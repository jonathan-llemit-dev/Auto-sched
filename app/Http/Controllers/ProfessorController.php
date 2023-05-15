<?php

namespace App\Http\Controllers;

use App\Events\ProfRegistered;
use App\Http\Requests\ProfessorStoreRequest;
use App\Models\Department;
use App\Models\Prof_config;
use App\Models\Prof_info;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfessorController extends Controller
{
    
    public function index()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('profFName', 'LIKE', "%{$value}%")
                        ->orWhere('profLName', 'LIKE', "%{$value}%");
                });
            });
        });
        
      //getting coordinator Id
      $coordinatorId = Auth::user()->id;

      //finding administrator id using coordinator id
      $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

      // getting school name
      $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        $professor = QueryBuilder::for(Prof_info::class)
            ->defaultSort('-id')
            ->allowedSorts(['profFName', 'profLName'])
            ->allowedFilters(['profDept', 'profField', $globalSearch, 
            AllowedFilter::exact('profSchool')->default($schoolInfo),]);
    
        return view('professors.index', [
            'professors' => SpladeTable::for($professor)
            ->withGlobalSearch('Search in all fields...', ['profFName', 'profLName'])
            ->column(key: 'profFName', label: 'First Name', searchable: true, sortable: true, canBeHidden: false)
            ->column(key: 'profLName', label: 'Last Name', searchable: true, sortable: true, canBeHidden: false)
            ->column('email', label: 'Email Address',)
            ->column('contactNumber', label: 'Contact Number',)
            ->column('profDept', label: 'Department',)
            ->column('field', label: 'Field/s',)
            ->paginate(10),]);
    }

    public function create()
    {
        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        // getting subject field
        $subjectField = DB::table('subjects')->where('subSchool', $schoolInfo)->distinct()->pluck('subField','subField')->toArray();

        // getting departments under authenticated school/coordinator
        $dept = Department::join('school_infos', 'departments.schName', '=', 'school_infos.schName')
                ->where('departments.schName',$schoolInfo)
                ->pluck('departments.deptName', 'departments.deptName')->toArray();

        return view('professors.create',compact('dept','subjectField'));
    }

    public function store(ProfessorStoreRequest $request)
    {
        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        // getting school mode of class
        $mode = DB::table('school_configs')->where('coordinatorId', $administratorId)->value('mode');

        // generating a pasword
        $password1 = Str::password(8);

        $password = $password1;

        $profFirstName = $request -> profFName;
        $profLastName = $request -> profLName;

        if(
            DB::table('prof_infos')
            ->where('profFName', $profFirstName)
            ->where('profLName', $profLastName)
            ->where('ProfSchool', $schoolInfo)
            ->exists()
        ){

            Toast::title('This person. '.$profFirstName." "." ".$profLastName.' is already existed')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(3);

        }else{

            $prof = Prof_info::create([
            
                'profFName' => $request->profFName,
                'profLName' => $request->profLName,
                'email' => $request->email,
                'contactNumber' => $request->contactNumber,
                'profDept' => $request->profDept,
                'profField' => $request->profField,
                'profSchool' => $schoolInfo,
                'password' => Hash::make($password),
                
            ]);
    
            event(new ProfRegistered($prof, $password));
    
            $profFName = $request -> profFName;
            $profLName = $request -> profLName;
    
            $profId = DB::table('prof_infos')
                ->where('profFName', $profFName)
                ->where('profLName', $profLName)
                ->value('id');
    
            Prof_config::create([
                
                'profId' => $profId,
                'mode' => $mode,
                'prefModeSun' => $mode, 
                'prefModeMon' => $mode, 
                'prefModeTue' => $mode,
                'prefModeWed' => $mode,
                'prefModeThu' => $mode,
                'prefModeFri' => $mode,
                'prefModeSat' => $mode,
              
            ]);
    
            Toast::title('Professor Added Successfully.')
            ->success()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(1.5);

        }

        return to_route('professors.index');

    }
}

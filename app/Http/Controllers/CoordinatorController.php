<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoordinatorStoreRequest;
use App\Events\ProfRegistered;
use App\Models\Coor_info;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class CoordinatorController extends Controller
{
    
    public function index(){

        //getting admin id
        $adminId = Auth::user()->id;

        // getting school name
        $adminSchool = DB::table('school_infos')->where('coordinatorId', $adminId)->value('schName');

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('coorFName', 'LIKE', "%{$value}%")
                        ->orWhere('coorLName', 'LIKE', "%{$value}%");
                });
            });
        });

        $Coor_info = QueryBuilder::for(Coor_info::class)
            ->defaultSort('-id')
            ->allowedSorts(['coorFName', 'coorLName'])
            ->allowedFilters(['coorFName','coorLName', $globalSearch,
            AllowedFilter::exact('coorSchool')->default($adminSchool),]);

        return view('coordinator.index',['Coor_info' => SpladeTable::for($Coor_info)
        ->withGlobalSearch('Search in all fields...', ['coorFName', 'coorLName'])
        ->column('coorFName', label: 'First Name', searchable: true, sortable: true, canBeHidden: false)
        ->column('coorLName', label: 'Last Name', searchable: true, sortable: true, canBeHidden: false)
        ->column('coorDept', label: 'Department', searchable: true, sortable: true, canBeHidden: false)
        ->column('contactNumber', label: 'Contact Number',)
        ->column('email', label: 'Email',)
        ->paginate(10),]);

    }

    public function create(){

       //getting admin id
       $adminId = Auth::user()->id;

       // getting school name
       $adminSchool = DB::table('school_infos')->where('coordinatorId', $adminId)->value('schName');

       $dept =  Department::where('schName', $adminSchool)->distinct()->pluck('deptName','deptName')->toArray();

       return view('coordinator.create',compact('dept'));

    }

    public function store(CoordinatorStoreRequest $request){

        //getting admin id
        $adminId = Auth::user()->id;

        // getting school name
        $adminSchool = DB::table('school_infos')->where('coordinatorId', $adminId)->value('schName');

        $password1 = Str::password(8);

        $password = $password1;

        $coorFirstName = $request -> coorFName;
        $coorLastName = $request -> coorLName;

        if(Coor_info::where('coorFName', $coorFirstName)->where('coorLName', $coorLastName)->exists()){

            Toast::title('This Person '.$coorFirstName." ".$coorLastName." ".' is already Registered')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(3);

            return to_route('coordinator.create');

        }else{

           $prof =  Coor_info::create([
            
                'coorFName' => $request->coorFName,
                'coorLName' => $request->coorLName,
                'email' => $request->email,
                'contactNumber' => $request->contactNumber,
                'coorDept' => $request->coorDept,
                'coorSchool' => $adminSchool,
                'coorAdminId' => $adminId,
                'password' => Hash::make($password) ,
                
            ]);

            event(new ProfRegistered($prof, $password));
    
            Toast::title('Coordinator Added Successfully.')
            ->success()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(5);

        }

        return to_route('coordinator.index');

    }

}

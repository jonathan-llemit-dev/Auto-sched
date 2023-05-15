<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectStoreRequest;
use App\Http\Requests\SubjectUpdateRequest;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\DB;
use App\Exports\SubjectExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SubjectsImport;
use App\Models\All_Subject;
use App\Models\Class_With_Subs;
use App\Models\Ongoing_Class_With_Subs;
use App\Models\Ongoing_Subjects;
use App\Models\Prof_sched;
use App\Models\Room_sched;
use App\Models\Stud_sched;
use Attribute;

class SubjectController extends Controller
{
    public function index()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('subTitle', 'LIKE', "%{$value}%")
                        ->orWhere('subCode', 'LIKE', "%{$value}%");
                });
            });
        });

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('schName');

        $subject = QueryBuilder::for(Subject::class)
            ->defaultSort('-id')
            ->allowedSorts(['subTitle', 'subCode'])
            ->allowedFilters(['subField', $globalSearch,
            AllowedFilter::exact('subSchool')->default($schoolInfo),]);

        return view('subjects.index', [
            'subjects' => SpladeTable::for($subject)
            ->withGlobalSearch('Search in all fields...', ['subTitle', 'subCode'])
            ->column('subTitle', label: 'Subject Description', searchable: true, sortable: true, canBeHidden: false)
            ->column('subCode', label: 'Subject Code', searchable: true, sortable: true, canBeHidden: false)
            ->column('subUnits', label: 'Units',)
            ->column('subField', label: 'Field',)
            ->column('action', label: 'Actions')
            ->paginate(10),
        ]);
    }

    public function create()
    {
        return view('subjects.create');
    }

    public function store(SubjectStoreRequest $request)
    {   

        //getting administrator id
        $coordinatorId = Auth::user()->id;
        
        //getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('schName');

        //getting school id
        $id = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('id');
        
        $subTitle = $request -> subTitle;
        $subCode = $request -> subCode;

        if(
            DB::table('subjects')
            ->where('subTitle', $subTitle)
            ->where('subCode', $subCode)
            ->where('subSchool', $schoolInfo)
            ->exists()
       ){

            Toast::title($subTitle." ".$subCode." ".' is Already Exist.')
            ->success()
            ->rightTop()
            ->backdrop()
            ->warning()
            ->autoDismiss(1.5); 

       }else{

        Subject::create([
            'subTitle' => $request -> subTitle,
            'subCode' => $request -> subCode,
            'subUnits' => $request -> subUnits,
            'sem' => $request -> sem,
            'subField' => $request -> subField,
            'schId' => $id ,
            'subSchool' => $schoolInfo,
        ]);

        Toast::title('Subject Added Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

       }

        return to_route('subjects.index');
    }

    public function edit(Subject $subject)
    {
        return view('subjects.edit', compact('subject'));
    }

    public function update(SubjectUpdateRequest $request, Subject $subject)
    {

        //getting administrator id
        $coordinatorId = Auth::user()->id;
        
        //getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('schName');

        //getting subtitle 
        $subTitle =  $subject -> subTitle;

        //getting subcode
        $subCode =  $subject -> subCode;

        //update subject info in all_subjects
        DB::table('all_subjects') 
            ->where('subTitle', $subTitle)
            ->where('subSchool', $schoolInfo) 
            ->update(['subTitle' =>  $request->subTitle ,
                        'subCode' => $request->subCode, 
                        'subUnits' => $request->subUnits, 
                        'subField' => $request->subField 
                    ]);
        
        //update subject info in class_with_subs
        DB::table('class_with_subs') 
            ->where('subject_title', $subTitle)
            ->where('schName', $schoolInfo) 
            ->update(['subject_title' =>  $request->subTitle ,
                        'subject_code' => $request->subCode, 
                        'subject_units' => $request->subUnits, 
                    ]);
        
        //update subject info in ongoing_class_with_subs
        DB::table('ongoing_class_with_subs') 
            ->where('subject_title', $subTitle)
            ->where('schName', $schoolInfo) 
            ->update(['subject_title' =>  $request->subTitle ,
                        'subject_code' => $request->subCode, 
                        'subject_units' => $request->subUnits, 
                    ]);
        
        //update subject info in ongoing_subjects            
        DB::table('ongoing_subjects') 
            ->where('subTitle', $subTitle)
            ->where('subSchool', $schoolInfo) 
            ->update(['subTitle' =>  $request->subTitle ,
                        'subCode' => $request->subCode, 
                        'subUnits' => $request->subUnits,
                        'subField' => $request->subField, 
                    ]);
        
        //update subject info in prof_scheds
        DB::table('prof_scheds') 
            ->where('subCode', $subCode)
            ->where('profSchool', $schoolInfo) 
            ->update(['subCode' => $request->subCode]);

        //update subject info in room_scheds
        DB::table('room_scheds') 
            ->where('subCode', $subCode)
            ->where('roomSchool', $schoolInfo) 
            ->update(['subCode' => $request->subCode]);
        
        //update subject info in stud_scheds
        DB::table('stud_scheds') 
            ->where('subCode', $subCode)
            ->where('schName', $schoolInfo)  
            ->update(['subCode' => $request->subCode]);

        //update subject info in subjects table            
        $subject -> update($request->validated());

        Toast::title('Subject Updated Successfully. '.$subTitle )
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect()->route('subjects.index');
    }

    public function destroy(Subject $subject)
    {

        //getting administrator id
        $coordinatorId = Auth::user()->id;
        
        //getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('schName');

        //getting subtitle 
        $subTitle =  $subject -> subTitle;

        //getting subcode
        $subCode =  $subject -> subCode;

        //deleting subject info in All_Subject 
        All_Subject::where('subTitle', $subTitle)->where('subSchool', $schoolInfo)->delete();

        //deleting subject info in Class_With_Subs 
        Class_With_Subs::where('subject_title', $subTitle)->where('schName', $schoolInfo)->delete();

        //deleting subject info in Ongoing_Class_With_Subs 
        Ongoing_Class_With_Subs::where('subject_title', $subTitle)->where('schName', $schoolInfo)->delete();

        //deleting subject info in Ongoing_Subjects 
        Ongoing_Subjects::where('subTitle', $subTitle)->where('subSchool', $schoolInfo)->delete();

        //deleting subject info in Prof_sched 
        Prof_sched::where('subCode', $subCode)->where('profSchool', $schoolInfo)->delete();

        //deleting subject info in Room_sched 
        Room_sched::where('subCode', $subCode)->where('roomSchool', $schoolInfo)->delete();

        //deleting subject info in Stud_sched
        Stud_sched::where('subCode', $subCode)->where('schName', $schoolInfo)->delete();

        $subject->delete();

        Toast::success('Subject Deleted Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect()->route('subjects.index');
    }

    public function export() 
    {
        return Excel::download(new SubjectExport, 'subjects.xlsx');
    }

    public function import(Request $request) 
    {
        $request->validate(['subjects' => ['required']]);

        Excel::import(new SubjectsImport, $request->file('subjects'));

        Toast::success('Excel File Imported Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect()->route('subjects.index');

        // return redirect('/subjects')->with('success', 'All Good!');
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Models\All_Class;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{

    public function index()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('courseName', 'LIKE', "%{$value}%")
                        ->orWhere('courseDept', 'LIKE', "%{$value}%");
                });
            });
        });

      //getting coordinator Id
      $coordinatorId = Auth::user()->id;

      //finding administrator id using coordinator id
      $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

      // getting school name
      $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        $course = QueryBuilder::for(Course::class)
            ->defaultSort('-id')
            ->allowedSorts(['courseName', 'courseDept'])
            ->allowedFilters(['courseDept', $globalSearch,
            AllowedFilter::exact('courseSchool')->default($schoolInfo),]);

        return view('courses.index', [
            'courses' => SpladeTable::for($course)
            ->withGlobalSearch('Search in all fields...', ['courseName', 'courseDept'])
            ->column('courseName', label: 'Course', searchable: true, sortable: true, canBeHidden: false)
            ->column('courseDept', label: 'Department', searchable: true, sortable: true, canBeHidden: false)
            ->column('courseYearLevels', label: 'Year Levels', searchable: true, sortable: true, canBeHidden: false)
            ->column('courseSchool', label: 'School Name')
            ->column('action', label: 'Actions')
            ->paginate(10),
        ]);
    }

    public function create()
    {

        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        // getting departments under authenticated school/coordinator
        $dept = Department::join('school_infos', 'departments.schName', '=', 'school_infos.schName')
                ->where('departments.schName',$schoolInfo)
                ->pluck('departments.deptName', 'departments.deptName')->toArray();

        return view('courses.create', compact('dept'));

    }

    public function store(CourseStoreRequest $request)
    {

        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        //getting school id using administrator id 
        $id = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('id');

        $courseName = $request -> courseName;

        if(

            DB::table('courses')
            ->where('courseName', $courseName)
            ->where('courseSchool', $schoolInfo)
            ->exists()

       ){

            Toast::title('Already Exist.')
            ->success()
            ->rightTop()
            ->backdrop()
            ->warning()
            ->autoDismiss(1.5); 

       }else{

        Course::create([
            'courseName' => $request->courseName,
            'courseYearLevels' => $request->courseYearLevels,
            'courseDept' => $request->courseDept,
            'courseSchool' => $schoolInfo,
        ]);

        $yearLevel = $request -> courseYearLevels;
        $courseSection = $request -> courseSection;
        $courseSection1 = $request -> courseSection1;

        for($i=1; $i<=$yearLevel; $i++ ){
            for($j=$courseSection; $j<=$courseSection1; $j++ ){
                All_Class::create([
                    'course' => $request->courseName,
                    'year' => $i,
                    'section' => $j,
                    'schId' => $id,
                    'schName' => $schoolInfo,
                ]);
            }
        }

        Toast::title('Course Added Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

       }

        return to_route('courses.index');

    }

    public function edit(Course $course)
    {

        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        // getting departments under authenticated school/coordinator
        $dept = Department::join('school_infos', 'departments.schName', '=', 'school_infos.schName')
                 ->where('departments.schName',$schoolInfo)
                 ->pluck('departments.deptName', 'departments.deptName')->toArray();

        return view('courses.edit', compact('course', 'dept'));
        
    }

    public function update(CourseUpdateRequest $request, Course $course)
    {
        $course -> update($request->validated());
        
        Toast::title('Course Updated Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        Toast::success('Course Deleted Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect()->route('courses.index');
    }

}

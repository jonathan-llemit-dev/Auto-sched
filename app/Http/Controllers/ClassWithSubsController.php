<?php

namespace App\Http\Controllers;

use App\Models\All_Subject;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Class_With_Subs;
use App\Models\Coor_info;
use App\Models\Ongoing_Class_With_Subs;
use App\Models\Ongoing_Subjects;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Facades\Redirect;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Collection;

class ClassWithSubsController extends Controller
{
    public function index(Subject $subject)
    {   
        //getting subject code
        $subjectCode = $subject -> subCode;

        //getting coordinator id
        $coordinatorId = Auth::user()->id;

        //getting administrator id
        $administratorId = Coor_info::where('id', $coordinatorId)->value('coorAdminId');

        //getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        //getting course name
        $course = DB::table('all_class')->where('schName', $schoolInfo)->distinct()->pluck('course','course')->toArray();

        //getting course year
        $year = DB::table('all_class')->where('schName', $schoolInfo)->distinct()->pluck('year','year')->toArray();

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('courseName', 'LIKE', "%{$value}%")
                        ->orWhere('courseDept', 'LIKE', "%{$value}%");
                });
            });
        });

        $Class_With_Subs = QueryBuilder::for(Class_With_Subs::class)
            ->defaultSort('-id')
            ->allowedSorts(['course', 'year'])
            ->allowedFilters(['course', $globalSearch,
            AllowedFilter::exact('schName')->default($schoolInfo),
            AllowedFilter::exact('subject_code')->default($subjectCode),]);


        return view('coor.add', compact('subject', 'course', 'year'), 
        ['Class_With_Subs' => SpladeTable::for($Class_With_Subs)
        ->withGlobalSearch('Search in all fields...', ['course', 'year'])
        ->column('course', label: 'Course', searchable: true, sortable: true, canBeHidden: false)
        ->column('year', label: 'Year', searchable: true, sortable: true, canBeHidden: false)
        ->column('section', label: 'Section', searchable: true, sortable: true, canBeHidden: false)
        ->column('sem', label: 'Semester',)
        ->column('action', label: 'Action',)
        ->paginate(10),]);

    }

    public function create(Request $request)
    {
        //getting log in user id
        $coordinatorId = Auth::user()->id;

        //getting administrator id
        $administratorId = Coor_info::where('id', $coordinatorId)->value('coorAdminId');

        //getting school name from school_infos
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        //getting primary key 
        $id = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('id');

        //initialized $maxcourse and $maxyear for $countCourseYear
        $maxcourse = $request -> course;
        $maxyear = $request -> year;
        
        //getting count value of course and year from all_class
        $countCourseYear = DB::table('all_class')
                ->where('course', $maxcourse)
                ->where('year', $maxyear)
                ->where('schName', $schoolInfo)
                ->count();

        $classWithSubSem = $request -> sem;

        $schoolSem = DB::table('school_configs')->where('coordinatorId', $coordinatorId)->value('sem');

        $section = 'A';

        //initialized $course, $year and $sem for if condition 
        $course = $request -> course;
        $year = $request -> year;
        $sem = $request -> sem;
        $subTitle = $request -> subTitle;
        $subCode = $request -> subCode;

        if (
            DB::table('class_with_subs')
                ->where('course', $course)
                ->where('year', $year)
                ->where('sem', $sem)
                ->where('subject_title', $subTitle)
                ->where('subject_code', $subCode)
                ->exists()
            )
        {
            Toast::title($course." ".$year." "." Sem ".$sem." ".'Already Exist.')
            ->success()
            ->rightTop()
            ->backdrop()
            ->warning()
            ->autoDismiss(2); 
        }
        else
        {

            for($i=1; $i<= $countCourseYear; $i++)
            {
                Class_With_Subs::create([
    
                    'course' => $request -> course,
                    'year' => $request -> year,
                    'section' =>  $section,
                    'subject_code' => $request -> subCode,
                    'subject_title' => $request -> subTitle,
                    'subject_units' => $request -> subUnits ,
                    'sem' => $request -> sem,
                    'schId' => $id,
                    'schName' => $schoolInfo,
        
                ]);
    
                if( $classWithSubSem == $schoolSem )
                {
                    Ongoing_Class_With_Subs::create([
    
                        'course' => $request -> course,
                        'year' => $request -> year,
                        'section' =>  $section,
                        'subject_code' => $request -> subCode,
                        'subject_title' => $request -> subTitle,
                        'subject_units' => $request -> subUnits ,
                        'sem' => $request -> sem,
                        'schId' => $id,
                        'schName' => $schoolInfo,
    
                    ]);
        
                }
    
                $section++;
            }

            Toast::title('Add Courses to Subject Sucessfully')
            ->success()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(1.5);

        }
        
        $subCode = $request -> subCode;

        $subField = DB::table('subjects')->where('subCode', $subCode)->value('subField');

        if (DB::table('all_subjects')->where('subTitle', $subTitle)->where('subCode', $subCode)->where('sem', $sem)->exists()) 
        {
            //nothing happened
        }
        else
        {
            All_Subject::create([

                'subTitle'  => $request -> subTitle,
                'subCode' => $request -> subCode,
                'subUnits' => $request -> subUnits,
                'sem' => $request -> sem,
                'subField' => $subField,
                'schId' => $id,
                'subSchool' => $schoolInfo,
    
            ]);
    
            if( $classWithSubSem == $schoolSem ){
    
                Ongoing_Subjects::create([
    
                    'subTitle'  => $request -> subTitle,
                    'subCode' => $request -> subCode,
                    'subUnits' => $request -> subUnits,
                    'sem' => $request -> sem,
                    'subField' => $subField,
                    'schId' => $id,
                    'subSchool' => $schoolInfo,
    
                ]);
            } 
        }

        return Redirect::to(url()->previous());

    }

    public function destroy(Class_With_Subs $ClassCourseId, $ClassCourse, $ClassYear, $ClassSection, $ClassSem, $ClassSchool){

        $ClassCourseId->delete();

        //deleting subject info in Ongoing_Class_With_Subs 
        Ongoing_Class_With_Subs::where('course', $ClassCourse)
                                ->where('year', $ClassYear)
                                ->where('section', $ClassSection)
                                ->where('sem', $ClassSem)
                                ->where('schName', $ClassSchool)
                                ->delete();

        Toast::title('Courses Subject Deleted Sucessfully')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);                                         

        return Redirect::to(url()->previous());

    }

}

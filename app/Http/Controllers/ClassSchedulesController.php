<?php

namespace App\Http\Controllers;

use App\Models\All_Class;
use App\Models\Course;
use App\Models\Stud_sched;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ClassSchedulesController extends Controller
{
    public function showClassSchedules(){

        //getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('schName');

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('studCourse', 'LIKE', "%{$value}%")
                        ->orWhere('studYear', 'LIKE', "%{$value}%")
                        ->orWhere('studSection', 'LIKE', "%{$value}%")
                        ->orWhere('subcode', 'LIKE', "%{$value}%")
                        ->orWhere('profName', 'LIKE', "%{$value}%")
                        ->orWhere('schedDay', 'LIKE', "%{$value}%")
                        ->orWhere('classroom', 'LIKE', "%{$value}%")
                        ->orWhere('startTime', 'LIKE', "%{$value}%")
                        ->orWhere('endTime', 'LIKE', "%{$value}%")
                        ->orWhere('sem', 'LIKE', "%{$value}%");
                });
            });
        });

        $Stud_sched = QueryBuilder::for(Stud_sched::class)
        ->defaultSort('-id')
        ->allowedSorts(['studCourse','studYear','subCode','studSection','subCode','profName','schedDay','startTime','endTime','totalHours','classroom','sem'])
        ->allowedFilters(['studCourse','studYear', 'studSection', $globalSearch,
            AllowedFilter::exact('studCourse'),
            AllowedFilter::exact('studYear'),
            AllowedFilter::exact('studSection'),
            AllowedFilter::exact('schName')->default($schoolInfo),
        ]);

        $courseName = All_Class::where('schName',$schoolInfo)->pluck('course','course')->toArray();
        $courseYear = All_Class::where('schName',$schoolInfo)->pluck('year','year')->toArray();
        $courseSection = All_Class::where('schName',$schoolInfo)->pluck('section','section')->toArray();

        return view('schedules.class-sched',['Stud_sched' => SpladeTable::for($Stud_sched)
        ->withGlobalSearch('Search in all fields...', ['studCourse','studYear',
        'studSection','subCode',
        'startTime','endTime',
        'classroom','schedDay'])
        ->column('studCourse', label: 'Course', searchable: true, sortable: true, canBeHidden: false)
        ->column('studYear', label: 'Year', searchable: true, sortable: true, canBeHidden: false)
        ->column('studSection', label: 'Section' , searchable: true, sortable: true, canBeHidden: false)
        ->column('subCode', label: 'Subject Code', sortable: true, canBeHidden: false)
        ->column('profName', label: 'Professors Name', sortable: true, canBeHidden: false)
        ->column('schedDay', label: 'Day' , searchable: true, sortable: true, canBeHidden: false)
        ->column('startTime', label: 'Start Time' , searchable: true, sortable: true,)
        ->column('endTime', label: 'End Time', searchable: true, sortable: true, canBeHidden: false)
        ->column('totalHours', label: 'Units', searchable: true, sortable: true, canBeHidden: false)
        ->column('classroom', label: 'Classroom', searchable: true, sortable: true, canBeHidden: false)
        ->column('sem', label: 'Semester', searchable: true, sortable: true, canBeHidden: false)
        ->column('action', label: 'Action')
        ->selectFilter('studCourse', $courseName)
        ->selectFilter('studYear', $courseYear)
        ->selectFilter('studSection', $courseSection)
        ->paginate(5),]);

    }
}

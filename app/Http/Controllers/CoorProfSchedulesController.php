<?php

namespace App\Http\Controllers;


use App\Models\Prof_info;
use App\Models\Prof_sched;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CoorProfSchedulesController extends Controller
{
    
    public function showSchedules(){

        // //getting school name
        // $schoolInfo = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('schName');

        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        //finding coordinator department using coordinator id
        $coordinatorDepartment = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorDept');

        //finding coordinator department room
        $coordinatorDepartmentRoom = DB::table('prof_infos')->where('profDept', $coordinatorDepartment)
                                                        ->where('profSchool', $schoolInfo)
                                                        ->pluck('profFName', 'id')
                                                        ->toArray();

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('subCode', 'LIKE', "%{$value}%")
                        ->orWhere('studCourse', 'LIKE', "%{$value}%")
                        ->orWhere('studYear', 'LIKE', "%{$value}%")
                        ->orWhere('studSection', 'LIKE', "%{$value}%")
                        ->orWhere('profName', 'LIKE', "%{$value}%")
                        ->orWhere('totalHours', 'LIKE', "%{$value}%")
                        ->orWhere('schedDay', 'LIKE', "%{$value}%")
                        ->orWhere('startTime', 'LIKE', "%{$value}%")
                        ->orWhere('endTime', 'LIKE', "%{$value}%")
                        ->orWhere('sem', 'LIKE', "%{$value}%")
                        ->orWhere('classroom', 'LIKE', "%{$value}%");
                });
            });
        });

        // $profList = Prof_info::where('profSchool',$schoolInfo)->pluck('profFname','id')->toArray();

        $Prof_sched = QueryBuilder::for(Prof_sched::class)
        ->defaultSort('startTime')
        ->allowedSorts(['subCode','studCourse','studYear','studSection','profName','totalHours','schedDay','startTime','endTime','sem','classroom'])
        ->allowedFilters(['subCode','studCourse','studYear','studSection','profName','totalHours','schedDay','startTime','endTime','sem','classroom','profId', $globalSearch,
            AllowedFilter::exact('profId'),
            AllowedFilter::exact('profSchool')->default($schoolInfo),
        ]);

        return view('coor.prof-sched',['Prof_sched' => SpladeTable::for($Prof_sched)
        ->withGlobalSearch('Search in all fields...', ['schedDay', 'subCode'])
        ->column('subCode', label: 'Subject Code', searchable: true, sortable: true, canBeHidden: false)
        ->column('studCourse', label: 'Course', searchable: true, sortable: true, canBeHidden: false)
        ->column('studYear', label: 'Year', searchable: true, sortable: true, canBeHidden: false)
        ->column('studSection', label: 'Section', searchable: true, sortable: true, canBeHidden: false)
        ->column('profName', label: 'Professor Name', searchable: true, sortable: true, canBeHidden: false)
        ->column('totalHours', label: 'Units', searchable: true, sortable: true, canBeHidden: false)
        ->column('schedDay', label: 'Day', searchable: true, sortable: true, canBeHidden: false)
        ->column('startTime', label: 'Start Time', searchable: true, sortable: true, canBeHidden: false)
        ->column('endTime', label: 'End Time', searchable: true, sortable: true, canBeHidden: false)
        ->column('sem', label: 'Semester', searchable: true, sortable: true, canBeHidden: false)
        ->column('classroom', label: 'Room No.', searchable: true, sortable: true, canBeHidden: false)
        ->column('action', label: 'Action')
        ->selectFilter('profId', $coordinatorDepartmentRoom)
        ->paginate(5),]);

    }

}

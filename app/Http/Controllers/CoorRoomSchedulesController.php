<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Room_sched;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CoorRoomSchedulesController extends Controller
{
    
    public function showRoomSchedules(){

        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');
   
        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        //finding coordinator department using coordinator id
        $coordinatorDepartment = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorDept');

        //finding coordinator department room
        $coordinatorDepartmentRoom = DB::table('rooms')->where('roomDepartment', $coordinatorDepartment)
                                                        ->where('roomSchool', $schoolInfo)
                                                        ->pluck('roomNumber', 'roomNumber')
                                                        ->toArray();

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('roomNumber', 'LIKE', "%{$value}%")
                        ->orWhere('subCode', 'LIKE', "%{$value}%")
                        ->orWhere('studCourse', 'LIKE', "%{$value}%")
                        ->orWhere('studYear', 'LIKE', "%{$value}%")
                        ->orWhere('studSection', 'LIKE', "%{$value}%")
                        ->orWhere('profName', 'LIKE', "%{$value}%")
                        ->orWhere('totalHours', 'LIKE', "%{$value}%")
                        ->orWhere('startTime', 'LIKE', "%{$value}%")
                        ->orWhere('endTime', 'LIKE', "%{$value}%")
                        ->orWhere('sem', 'LIKE', "%{$value}%")
                        ->orWhere('schedDay', 'LIKE', "%{$value}%");
                });
            });
        });

        $Room_sched = QueryBuilder::for(Room_sched::class)
        ->defaultSort('startTime')
        ->allowedSorts(['roomNumber','subCode','studCourse','studYear','studSection','profName','totalHours','schedDay','startTime','endTime','sem'])
        ->allowedFilters(['roomNumber','subCode','studCourse','studYear','studSection','profName','totalHours','startTime','endTime','schedDay','sem', $globalSearch,
            AllowedFilter::exact('roomNumber'),
            AllowedFilter::exact('profSchool')->default($schoolInfo),
        ]);

        return view('coor.room-sched',['Room_sched' => SpladeTable::for($Room_sched)
        ->withGlobalSearch('Search in all fields...', ['roomNumber','subCode',
        'schedDay','studCourse',
        'studYear','studSection',
        'startTime','endTime'])
        ->column('roomNumber', label: 'roomNumber', searchable: true, sortable: true, canBeHidden: false)
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
        ->column('action', label: 'Action')
        ->selectFilter('roomNumber', $coordinatorDepartmentRoom)
        ->paginate(5),]);

    }

}

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

class RoomSchedulesController extends Controller
{
    public function showRoomSchedules(){

        //getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('schName');

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('roomNumber', 'LIKE', "%{$value}%")
                        ->orWhere('profName', 'LIKE', "%{$value}%")
                        ->orWhere('subCode', 'LIKE', "%{$value}%")
                        ->orWhere('studCourse', 'LIKE', "%{$value}%")
                        ->orWhere('studYear', 'LIKE', "%{$value}%")
                        ->orWhere('studSection', 'LIKE', "%{$value}%")
                        ->orWhere('startTime', 'LIKE', "%{$value}%")
                        ->orWhere('endTime', 'LIKE', "%{$value}%")
                        ->orWhere('schedDay', 'LIKE', "%{$value}%")
                        ->orWhere('sem', 'LIKE', "%{$value}%");
                });
            });
        });

        $Room_sched = QueryBuilder::for(Room_sched::class)
        ->defaultSort('-id')
        ->allowedSorts(['roomNumber','profName','subCode','studCourse','studYear','studSection','totalHours','schedDay','startTime','endTime','sem'])
        ->allowedFilters(['roomNumber','schedDay', $globalSearch,
            AllowedFilter::exact('roomNumber'),
            AllowedFilter::exact('profSchool')->default($schoolInfo),
        ]);

        $roomList = Room::where('roomSchool',$schoolInfo)->pluck('roomNumber','roomNumber')->toArray();

        return view('schedules.room-sched',['Room_sched' => SpladeTable::for($Room_sched)
        ->withGlobalSearch('Search in all fields...', ['roomNumber','subCode',
        'schedDay','studCourse',
        'studYear','studSection',
        'startTime','endTime'])
        ->column('roomNumber', label: 'Room Number',searchable: true, sortable: true, canBeHidden: false)
        ->column('profName', label: 'Professors Name',searchable: true, sortable: true, canBeHidden: false)
        ->column('subCode', label: 'Subject Code',searchable: true, sortable: true, canBeHidden: false)
        ->column('studCourse', label: 'Course',searchable: true, sortable: true, canBeHidden: false)
        ->column('studYear', label: 'Year',searchable: true, sortable: true, canBeHidden: false)
        ->column('studSection', label: 'Section',searchable: true, sortable: true, canBeHidden: false)
        ->column('totalHours', label: 'Units',searchable: true, sortable: true, canBeHidden: false)
        ->column('schedDay', label: 'Day', searchable: true, sortable: true, canBeHidden: false)
        ->column('startTime', label: 'Start Time',searchable: true, sortable: true, canBeHidden: false)
        ->column('endTime', label: 'End Time', sortable: true, canBeHidden: false)
        ->column('sem', label: 'Semester', sortable: true, canBeHidden: false)
        ->column('action', label: 'Action')
        ->selectFilter('roomNumber', $roomList)
        ->paginate(5),]);

    }
}

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


class ProfessorSchedulesController extends Controller
{

    public function showSchedules(){

        //getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('schName');

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('subCode', 'LIKE', "%{$value}%")
                        ->orWhere('profName', 'LIKE', "%{$value}%")
                        ->orWhere('studCourse', 'LIKE', "%{$value}%")
                        ->orWhere('studYear', 'LIKE', "%{$value}%")
                        ->orWhere('studSection', 'LIKE', "%{$value}%")
                        ->orWhere('totalHours', 'LIKE', "%{$value}%")
                        ->orWhere('schedDay', 'LIKE', "%{$value}%")
                        ->orWhere('startTime', 'LIKE', "%{$value}%")
                        ->orWhere('endTime', 'LIKE', "%{$value}%")
                        ->orWhere('classroom', 'LIKE', "%{$value}%")
                        ->orWhere('sem', 'LIKE', "%{$value}%");
                });
            });
        });

        $profList = Prof_info::where('profSchool',$schoolInfo)->pluck('profFname','id')->toArray();

        $Prof_sched = QueryBuilder::for(Prof_sched::class)
        ->defaultSort('-id')
        ->allowedSorts(['subCode','profName','studCourse','studYear','studSection','totalHours','schedDay','startTime','endTime','sem','classroom'])
        ->allowedFilters(['profId', $globalSearch,
            AllowedFilter::exact('profId'),
            AllowedFilter::exact('profSchool')->default($schoolInfo),
        ]);

        return view('schedules.prof-sched',['Prof_sched' => SpladeTable::for($Prof_sched)
        ->withGlobalSearch('Search in all fields...', ['schedDay', 'subCode'])
        ->column('subCode', label: 'Subject Code', searchable: true, sortable: true, canBeHidden: false)
        ->column('profName', label: 'Professors Name', searchable: true, sortable: true, canBeHidden: false)
        ->column('studCourse', label: 'Course', sortable: true, canBeHidden: false)
        ->column('studYear', label: 'Year', sortable: true, canBeHidden: false)
        ->column('studSection', label: 'Section', sortable: true, canBeHidden: false)
        ->column('totalHours', label: 'Units', sortable: true, canBeHidden: false)
        ->column('schedDay', label: 'Day', sortable: true, searchable: true,  canBeHidden: false)
        ->column('startTime', label: 'Start Time', sortable: true, canBeHidden: false)
        ->column('endTime', label: 'End Time', sortable: true, canBeHidden: false)
        ->column('sem', label: 'Semester', searchable: true, sortable: true, canBeHidden: false)
        ->column('classroom', label: 'Room', sortable: true, canBeHidden: false)
        ->column('action', label: 'action')
        ->selectFilter('profId', $profList)
        ->paginate(5),]);

    }

}

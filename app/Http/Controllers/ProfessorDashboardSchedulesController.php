<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prof_sched;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ProfessorDashboardSchedulesController extends Controller
{

    public function professorSchedules(){

        $profId = Auth::user()->id;

        //getting school name
        $schoolInfo = DB::table('prof_infos')->where('id', Auth::user()->id)->value('profSchool');

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('schedDay', 'LIKE', "%{$value}%")
                        ->orWhere('studCourse', 'LIKE', "%{$value}%")
                        ->orWhere('studYear', 'LIKE', "%{$value}%")
                        ->orWhere('studSection', 'LIKE', "%{$value}%")
                        ->orWhere('classroom', 'LIKE', "%{$value}%")
                        ->orWhere('subCode', 'LIKE', "%{$value}%");
                });
            });
        });

        $Prof_sched = QueryBuilder::for(Prof_sched::class)
        ->defaultSort('schedDay')
        ->allowedSorts(['schedDay','subCode','studCourse','studYear','studSection','totalHours','startTime','endTime', ])
        ->allowedFilters(['studCourse','studYear','studSection','schedDay',  $globalSearch,
            AllowedFilter::exact('profId')->default($profId),
            AllowedFilter::exact('profSchool')->default($schoolInfo),
        ]);

        return view('prof.classCalendar',['Prof_sched' => SpladeTable::for($Prof_sched)
        ->withGlobalSearch('Search in all fields...', ['schedDay', 'studCourse','studYear','studSection'])
        ->column('schedDay', label: 'Day', searchable: true, sortable: true,  canBeHidden: false)
        ->column('subCode', label: 'Subject Code', searchable: true, sortable: true,  canBeHidden: false)
        ->column('studCourse', label: 'Course', searchable: true, sortable: true,  canBeHidden: false)
        ->column('studYear', label: 'Year', searchable: true, sortable: true,  canBeHidden: false)
        ->column('studSection', label: 'Section', searchable: true, sortable: true,  canBeHidden: false)
        ->column('totalHours', label: 'Units', searchable: true, sortable: true,  canBeHidden: false)       
        ->column('startTime', label: 'Start Time', searchable: true, sortable: true,  canBeHidden: false)
        ->column('endTime', label: 'End Time', searchable: true, sortable: true,  canBeHidden: false)
        ->column('action', label: 'Action')
        ->paginate(10),]);

    }
    
}

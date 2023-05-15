<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\DB;

class CourseListController extends Controller
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

    //   //finding administrator id using coordinator id
    //   $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

      // getting school name
      $schoolInfo = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('schName');

        $course = QueryBuilder::for(Course::class)
            ->defaultSort('-id')
            ->allowedSorts(['courseName', 'courseDept'])
            ->allowedFilters(['courseDept', $globalSearch,
            AllowedFilter::exact('courseSchool')->default($schoolInfo),]);

        return view('courseList', ['courses' => SpladeTable::for($course)
            ->withGlobalSearch('Search in all fields...', ['courseName', 'courseDept'])
            ->column('courseName', label: 'Course', searchable: true, sortable: true, canBeHidden: false)
            ->column('courseDept', label: 'Department', searchable: true, sortable: true, canBeHidden: false)
            ->column('courseYearLevels', label: 'Year Levels', searchable: true, sortable: true, canBeHidden: false)
            ->column('courseSchool', label: 'School Name')
            ->column('action', label: 'Actions')
            ->paginate(10),
        ]);
    }
}

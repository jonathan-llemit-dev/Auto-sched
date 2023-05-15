<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\DB;


class SubjectListController extends Controller
{
    public function index()
    {

        //getting coordinator id
        $coordinatorId = Auth::user()->id;

        //getting administrator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');
        
        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('subTitle', 'LIKE', "%{$value}%")
                        ->orWhere('subCode', 'LIKE', "%{$value}%");
                });
            });
        });

        $subject = QueryBuilder::for(Subject::class)
            ->defaultSort('-id')
            ->allowedSorts(['subTitle', 'subCode'])
            ->allowedFilters(['subField', $globalSearch,
            AllowedFilter::exact('subSchool')->default($schoolInfo),]);

        return view('coor.index', [
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

}

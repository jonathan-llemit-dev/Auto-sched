<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Http\Requests\DepartmentUpdateRequest;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class DepartmentController extends Controller
{
    public function index(){

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('deptCode', 'LIKE', "%{$value}%")
                        ->orWhere('deptName', 'LIKE', "%{$value}%");
                });
            });
        });

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('schName');

        $department = QueryBuilder::for(Department::class)
            ->defaultSort('-id')
            ->allowedSorts(['deptCode', 'deptName'])
            ->allowedFilters(['deptName', $globalSearch,
                AllowedFilter::exact('schName')->default($schoolInfo),]);
          
        return view('department.index',[
            'departments' => SpladeTable::for($department)
                ->withGlobalSearch('Search in all fields...', ['deptCode', 'deptName'])
                ->column(key: 'deptCode', label: 'Department Code', searchable: true, sortable: true, canBeHidden: false)
                ->column(key: 'deptName', label: 'Department Name', searchable: true, sortable: true, canBeHidden: false)
                ->column('action', label: 'Actions')
                ->paginate(10),
        ]);
    }

    public function create(){
        return view('department.create');
    }

    public function store(DepartmentRequest $request){

        $adminId = Auth::user()->id;
        $deptSchool = DB::table('school_infos')->where('coordinatorId', $adminId)->value('schName');

        $deptCode = $request->deptCode;
        $deptName = $request->deptName;

       if(
            DB::table('departments')
            ->where('deptCode', $deptCode)
            ->where('deptName', $deptName)
            ->where('coordinatorId', $adminId)
            ->exists()
       ){

            Toast::title('Already Exist.')
            ->success()
            ->rightTop()
            ->backdrop()
            ->warning()
            ->autoDismiss(1.5); 

       }else{

        Department::create([
            'deptCode' => $request->deptCode,
            'deptName' => $request->deptName,
            'coordinatorId' => $adminId,
            'schName' => $deptSchool,
        ]);

        Toast::title('Department Added Sucessfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

       }
       
        return to_route('department.index');

    }

    public function edit(Department $department){

        return view('department.edit', compact('department'));
        
    }

    public function update(DepartmentUpdateRequest $request, Department $department){

        $department -> update($request->validated());

        Toast::title('Department Updated Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect()->route('department.index');

    }

    public function destroy(Department $department){

        $department->delete();

        Toast::success('Department Deleted Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect()->route('department.index');

    }

}

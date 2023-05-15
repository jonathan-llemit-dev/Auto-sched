<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomStoreRequest;
use App\Http\Requests\RoomUpdateRequest;
use App\Models\Room;
use App\Models\Department;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{

    public function index()
    {

        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('roomNumber', 'LIKE', "%{$value}%")
                        ->orWhere('roomDepartment', 'LIKE', "%{$value}%");
                });
            });
        });

        $room = QueryBuilder::for(Room::class)
            ->defaultSort('-id')
            ->allowedSorts(['roomNumber', 'roomDepartment'])
            ->allowedFilters(['roomDepartment', $globalSearch,
            AllowedFilter::exact('roomSchool')->default($schoolInfo),]);

        return view('rooms.index', [
            'rooms' => SpladeTable::for($room)
            ->withGlobalSearch('Search in all fields...', ['roomNumber', 'roomDepartment'])
            ->column('roomNumber', label: 'Room Number', searchable: true, sortable: true, canBeHidden: false)
            ->column('roomDepartment', label: 'Department', searchable: true, sortable: true, canBeHidden: false)
            ->column('roomSchool', label: 'School Name')
            ->column('action', label: 'Actions')
            ->paginate(10),
        ]);

    }

    public function create()
    {

        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

       // getting departments under authenticated school/coordinator
       $department = Department::join('school_infos', 'departments.schName', '=', 'school_infos.schName')
               ->where('departments.schName',$schoolInfo)
               ->pluck('departments.deptName', 'departments.deptName')->toArray();

        return view('rooms.create', compact('department'));

    }

    public function store(RoomStoreRequest $request)
    {

        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $roomSchool = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');
   
        Room::create([
            'roomNumber' => $request->roomNumber,
            'roomDepartment' => $request->roomDepartment,
            'roomSchool' => $roomSchool,
        ]);

        Toast::title('Room Added Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return to_route('rooms.index');

    }

    public function edit(Room $room)
    {

        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        // getting departments under authenticated school/coordinator
        $department = Department::join('school_infos', 'departments.schName', '=', 'school_infos.schName')
                ->where('departments.schName',$schoolInfo)
                ->pluck('departments.deptName', 'departments.deptName')->toArray();

        return view('rooms.edit', compact('room', 'department'));

    }

    public function update(RoomUpdateRequest $request, Room $room)
    {
        $room -> update($request->validated());

        Toast::title('Room Updated Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect()->route('rooms.index');
    }

    public function destroy(Room $room)
    {
        $room->delete();

        Toast::success('Room Deleted Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect()->route('rooms.index');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\Prof_info;
use App\Models\Room;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfDashboardController extends Controller
{
    public function create(){

        // getting coordinator id
        $schName = Auth::user()->profSchool;

        // $schName = School_info::where('coordinatorId',$coorId)->value('schName');

        $subjects = Subject::where('subSchool',$schName)->distinct('subCode')->count('subCode');

        $departments = Department::where('schName',$schName)->distinct('deptCode')->count('deptCode');

        $courses = Course::where('courseSchool',$schName)->distinct('courseName')->count('courseName');

        $professors = Prof_info::where('profSchool',$schName)->distinct('email')->count('email');

        $rooms = Room::where('roomSchool',$schName)->distinct('roomNumber')->count('roomNumber');

        return view('prof.dashboard', compact('subjects', 'departments', 'courses', 'professors', 'rooms'));

    }
}

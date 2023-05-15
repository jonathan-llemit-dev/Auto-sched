<?php

namespace App\Http\Controllers;

use App\Models\Prof_config;
use App\Models\Prof_sched;
use App\Models\Room_sched;
use App\Models\School_info;
use App\Models\Stud_sched;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;


class PDFController extends Controller
{
    public function generatePDF($Prof_sched){

       $administratorId = Auth::user()->id;

       $schoolName = School_info::where('coordinatorId', $administratorId)->value('schName');

       $schoolCity = School_info::where('coordinatorId', $administratorId)->value('city');
       $schoolBrgy = School_info::where('coordinatorId', $administratorId)->value('barangay');
       $schoolStrt = School_info::where('coordinatorId', $administratorId)->value('street');

       $schoolAddress = $schoolStrt . " " . $schoolBrgy . ", " . $schoolCity;

       $schLogo = School_info::where('coordinatorId', $administratorId)->value('schLogo');

       $schoolContactNum = School_info::where('coordinatorId', $administratorId)->value('contactNumber');
       $schoolEmail = School_info::where('coordinatorId', $administratorId)->value('email');

       $schoolCntcts = $schoolContactNum . " | " . $schoolEmail;

       $profSchedules = Prof_sched::where('profName', $Prof_sched)->where('profSchool', $schoolName)->orderBy('startTime', 'asc')->get();

       $units = Prof_sched::where('profName', $Prof_sched)->where('profSchool', $schoolName)->sum('totalHours');

       $profId = Prof_sched::where('profName', $Prof_sched)->where('profSchool', $schoolName)->value('profId');

       $emply = Prof_config::where('profId', $profId)->value('employment');

       $pdf = Pdf::loadView('schedules.pdf-prof-sched', ['profSchedules' =>  $profSchedules, 'schoolName' => $schoolName, 'schoolAddress' => $schoolAddress, 'schoolCntcts' => $schoolCntcts, 'units' => $units, 'emply' => $emply, 'schLogo' => $schLogo])->setPaper('a4', 'landscape');
       return $pdf->stream();

    }

    public function generatePdfRoomSched($Room_sched){

      $administratorId = Auth::user()->id;

      $schoolName = School_info::where('coordinatorId', $administratorId)->value('schName');

      $schoolCity = School_info::where('coordinatorId', $administratorId)->value('city');
       $schoolBrgy = School_info::where('coordinatorId', $administratorId)->value('barangay');
       $schoolStrt = School_info::where('coordinatorId', $administratorId)->value('street');

       $schoolAddress = $schoolStrt . " " . $schoolBrgy . ", " . $schoolCity;
       
       $schLogo = School_info::where('coordinatorId', $administratorId)->value('schLogo');

       $schoolContactNum = School_info::where('coordinatorId', $administratorId)->value('contactNumber');
       $schoolEmail = School_info::where('coordinatorId', $administratorId)->value('email');

       $schoolCntcts = $schoolContactNum . " | " . $schoolEmail;

      $roomSchedules = Room_sched::where('roomNumber', $Room_sched)->where('roomSchool', $schoolName)->orderBy('startTime', 'asc')->get();

      $roomNumber = $Room_sched;

      $pdf = Pdf::loadView('schedules.pdf-room-sched', ['roomSchedules' =>  $roomSchedules, 'roomNumber' => $roomNumber, 'schoolName' => $schoolName, 'schoolAddress' => $schoolAddress, 'schoolCntcts' => $schoolCntcts, 'schLogo' => $schLogo])->setPaper('a4', 'landscape');
      return $pdf->stream();

    }

    public function generatePdfClassSched($Stud_sched, $Stud_year, $Stud_Section){

      $administratorId = Auth::user()->id;

      $schoolName = School_info::where('coordinatorId', $administratorId)->value('schName');

      $schoolCity = School_info::where('coordinatorId', $administratorId)->value('city');
       $schoolBrgy = School_info::where('coordinatorId', $administratorId)->value('barangay');
       $schoolStrt = School_info::where('coordinatorId', $administratorId)->value('street');

       $schoolAddress = $schoolStrt . " " . $schoolBrgy . ", " . $schoolCity;
       
       $schLogo = School_info::where('coordinatorId', $administratorId)->value('schLogo');

       $schoolContactNum = School_info::where('coordinatorId', $administratorId)->value('contactNumber');
       $schoolEmail = School_info::where('coordinatorId', $administratorId)->value('email');

       $schoolCntcts = $schoolContactNum . " | " . $schoolEmail;

      $classSchedules = Stud_sched::where('studCourse', $Stud_sched)->where('studYear', $Stud_year)->where('studSection', $Stud_Section)->where('schName', $schoolName)->orderBy('startTime', 'asc')->get();

      $pdf = Pdf::loadView('schedules.pdf-class-sched', ['classSchedules' => $classSchedules, 'schoolName' => $schoolName, 'schoolAddress' => $schoolAddress, 'schoolCntcts' => $schoolCntcts, 'schLogo' => $schLogo])->setPaper('a4', 'landscape');
      return $pdf->stream();

    }

    public function generateCoorProfPdf($Prof_Name, $Prof_School){

      $coorProfSchedules = Prof_sched::where('profName', $Prof_Name)->where('profSchool', $Prof_School)->orderBy('startTime', 'asc')->get();

      $pdf = Pdf::loadView('coor.pdf-prof-coor', ['coorProfSchedules' => $coorProfSchedules])->setPaper('a4', 'landscape');
      return $pdf->stream();

    }

    public function generateCoorRoomPdf($Room_Number, $Room_School){

      $coorRoomSchedules = Room_sched::where('roomNumber', $Room_Number)->where('roomSchool', $Room_School)->orderBy('startTime', 'asc')->get();

      $pdf = Pdf::loadView('coor.pdf-room-coor', ['coorRoomSchedules' => $coorRoomSchedules])->setPaper('a4', 'landscape');
      return $pdf->stream();

    }

    public function generateCoorClassPdf($Course, $Year, $Section, $School){

      $coorClassSchedules = Stud_sched::where('studCourse', $Course)
                                      ->where('studYear', $Year)
                                      ->where('studSection', $Section)
                                      ->where('schName', $School)
                                      ->orderBy('startTime', 'asc')
                                      ->get();

      $pdf = Pdf::loadView('coor.pdf-class-coor', ['coorClassSchedules' => $coorClassSchedules])->setPaper('a4', 'landscape');
      return $pdf->stream();

    }

    public function generatePdfProfSched(){
      
      $profId = Auth::user()->id;

      $profSchedules = Prof_sched::where('profId', $profId)->orderBy('startTime', 'asc')->get();

      $pdf = Pdf::loadView('prof.prof-pdf', ['profSchedules' => $profSchedules])->setPaper('a4', 'landscape');
      return $pdf->stream();

    }

}

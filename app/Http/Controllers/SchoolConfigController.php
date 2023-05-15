<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolConfigRequest;
use App\Models\Class_With_Subs;
use App\Models\Ongoing_Class_With_Subs;
use App\Models\Ongoing_Subjects;
use App\Models\Prev_Prof_Scheds;
use App\Models\Prev_Room_Scheds;
use App\Models\Prev_Stud_Scheds;
use App\Models\Prof_config;
use App\Models\Prof_info;
use App\Models\Prof_sched;
use App\Models\Room_sched;
use Illuminate\Support\Facades\Auth;
use App\Models\School_config;
use App\Models\Stud_sched;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Facades\DB;


class SchoolConfigController extends Controller
{
    public function index()
    {

        $coordinatorId = Auth::user()->id;

        $id = DB::table('school_configs')->where('coordinatorId', $coordinatorId)->value('id');

        $school = School_config::find($id);

        return view('school.dailyTime', ['school' => $school]);

    }

    public function store(SchoolConfigRequest $request){

        $coordinatorId = Auth::user()->id;

        $id = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('id');

        $schName = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('schName');

        $disable = $request -> autoRoom;
        $newAllocationWay = "null";
        $value = 0;
        $mode = $request -> mode;

        $schTimeStartSun = $request -> schTimeStartSun;
        $schTimeEndSun = $request -> schTimeEndSun;
        $schTimeStartMon = $request -> schTimeStartMon;
        $schTimeEndMon = $request -> schTimeEndMon;
        $schTimeStartTue = $request -> schTimeStartTue;
        $schTimeEndTue = $request -> schTimeEndTue;
        $schTimeStartWed = $request -> schTimeStartWed;
        $schTimeEndWed = $request -> schTimeEndWed;
        $schTimeStartThu = $request -> schTimeStartThu;
        $schTimeEndThu = $request -> schTimeEndThu;
        $schTimeStartFri = $request -> schTimeStartFri;
        $schTimeEndFri = $request -> schTimeEndFri;
        $schTimeStartSat = $request -> schTimeStartSat;
        $schTimeEndSat = $request -> schTimeEndSat;

        if($schTimeStartSun > $schTimeEndSun){

            Toast::title('Please Enter a Valid Time Schedule in Sunday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(1.5);

        }elseif($schTimeStartMon > $schTimeEndMon){

            Toast::title('Please Enter a Valid Time Schedule in Monday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(1.5);

        }elseif($schTimeStartTue > $schTimeEndTue){

            Toast::title('Please Enter a Valid Time Schedule in Tuesday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(1.5);

        }elseif($schTimeStartWed > $schTimeEndWed){

            Toast::title('Please Enter a Valid Time Schedule in Wednesday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(1.5);

        }elseif($schTimeStartThu > $schTimeEndThu){

            Toast::title('Please Enter a Valid Time Schedule in Thursday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(1.5);

        }elseif($schTimeStartFri > $schTimeEndFri){

            Toast::title('Please Enter a Valid Time Schedule in Friday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(1.5);

        }elseif($schTimeStartSat > $schTimeEndSat){

            Toast::title('Please Enter a Valid Time Schedule in Saturday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(1.5);

        }else{

            $schoolSetuptime = School_config::find($coordinatorId);
            $schoolSetuptime -> schId = $id;
            $schoolSetuptime -> schName = $schName;
            $schoolSetuptime -> mode = $request -> mode;
            $schoolSetuptime -> sem = $request -> sem;
            $schoolSetuptime -> autoRoom = $request -> autoRoom;
            $schoolSetuptime -> allocationWay = $request -> allocationWay;
            $schoolSetuptime -> schTimeStartSun = $request -> schTimeStartSun;
            $schoolSetuptime -> schTimeEndSun = $request -> schTimeEndSun;
            $schoolSetuptime -> schTimeStartMon = $request -> schTimeStartMon;
            $schoolSetuptime -> schTimeEndMon = $request -> schTimeEndMon;
            $schoolSetuptime -> schTimeStartTue = $request -> schTimeStartTue;
            $schoolSetuptime -> schTimeEndTue = $request -> schTimeEndTue;
            $schoolSetuptime -> schTimeStartWed = $request -> schTimeStartWed;
            $schoolSetuptime -> schTimeEndWed = $request -> schTimeEndWed;
            $schoolSetuptime -> schTimeStartThu = $request -> schTimeStartThu;
            $schoolSetuptime -> schTimeEndThu = $request -> schTimeEndThu;
            $schoolSetuptime -> schTimeStartFri = $request -> schTimeStartFri;
            $schoolSetuptime -> schTimeEndFri = $request -> schTimeEndFri;
            $schoolSetuptime -> schTimeStartSat = $request -> schTimeStartSat;
            $schoolSetuptime -> schTimeEndSat = $request -> schTimeEndSat;
            $schoolSetuptime -> save();

            Toast::title('School Hours Updated Successfully. ')
            ->success()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(1.5);

        }

        $newSem = $request -> sem;
        $firstSem = 1;
        $secondSem = 2;
        $thirdSem = 3;

        if($disable == $value){

            $schoolSetuptime = School_config::find($coordinatorId);
            $schoolSetuptime -> allocationWay = $newAllocationWay;
            $schoolSetuptime -> save();

        }

        // changing the teaching mode of existing prof setup
        
        $professors = Prof_info::where('profSchool',$schName)->orderBy("id")->get();

        foreach($professors as $professor){

            $profId = $professor->id;

            Prof_config::where('profId',$profId)->update(['mode' => $mode,
                                                        'prefModeSun' => $mode, 
                                                        'prefModeMon' => $mode, 
                                                        'prefModeTue' => $mode,
                                                        'prefModeWed' => $mode,
                                                        'prefModeThu' => $mode,
                                                        'prefModeFri' => $mode,
                                                        'prefModeSat' => $mode, ]);

        }

        // end

        //new semester of university
        if($newSem == $secondSem)
        {

            //delete data with value of first sem in Ongoing_Class_With_Subs
            Ongoing_Class_With_Subs::where('sem', $firstSem)->where('schName', $schName)->delete();

            //delete data with value of first sem in Ongoing_Subjects
            Ongoing_Subjects::where('sem', $firstSem)->where('subSchool', $schName)->delete();

            //delete data with value of third sem in Ongoing_Class_With_Subs
            Ongoing_Class_With_Subs::where('sem', $thirdSem)->where('schName', $schName)->delete();

            //delete data with value of third sem in Ongoing_Subjects
            Ongoing_Subjects::where('sem', $thirdSem)->where('subSchool', $schName)->delete();

            //getting all data from prof_scheds
            $prof_scheds_data = DB::table('prof_scheds')
            ->where('sem', $firstSem)
            ->where('profSchool', $schName)
            ->get();

            foreach($prof_scheds_data as $prev_prof_scheds_data){

                Prev_Prof_Scheds::create([
                    
                    'profId' => $prev_prof_scheds_data -> profId,
                    'profName' => $prev_prof_scheds_data -> profName,
                    'profSchool' => $prev_prof_scheds_data -> profSchool,
                    'subCode' => $prev_prof_scheds_data -> subCode,
                    'schedDay' =>  $prev_prof_scheds_data -> schedDay,
                    'startTime' => $prev_prof_scheds_data -> startTime,
                    'endTime' => $prev_prof_scheds_data -> endTime,
                    'studCourse' => $prev_prof_scheds_data -> studCourse,
                    'studYear' => $prev_prof_scheds_data -> studYear,
                    'studSection' => $prev_prof_scheds_data -> studSection,
                    'sem' => $prev_prof_scheds_data -> sem,
                    'totalHours' => $prev_prof_scheds_data -> totalHours,
                    'classroom' => $prev_prof_scheds_data -> classroom,
                    'sy' => $prev_prof_scheds_data -> sy,
    
                ]);
            }
 
            //delete data with value of first sem in Prof_sched
            Prof_sched::where('sem', $firstSem)->where('profSchool', $schName)->delete();

            //getting all data from room_scheds
            $room_scheds_data = DB::table('room_scheds')
            ->where('sem', $firstSem)
            ->where('roomSchool', $schName)
            ->get();

            foreach($room_scheds_data as $prev_room_scheds_data){

                Prev_Room_Scheds::create([
                    
                    'profId' => $prev_room_scheds_data -> profId,
                    'profName' => $prev_room_scheds_data -> profName,
                    'profSchool' => $prev_room_scheds_data -> profSchool,
                    'roomSchool' => $prev_room_scheds_data -> roomSchool,
                    'roomNumber' =>  $prev_room_scheds_data -> roomNumber,
                    'subCode' => $prev_room_scheds_data -> subCode,
                    'schedDay' => $prev_room_scheds_data -> schedDay,
                    'startTime' => $prev_room_scheds_data -> startTime,
                    'endTime' => $prev_room_scheds_data -> endTime,
                    'studCourse' => $prev_room_scheds_data -> studCourse,
                    'studYear' => $prev_room_scheds_data -> studYear,
                    'studSection' => $prev_room_scheds_data -> studSection,
                    'sem' => $prev_room_scheds_data -> sem,
                    'totalHours' => $prev_room_scheds_data -> totalHours,
                    'sy' => $prev_room_scheds_data -> sy,
    
                ]);
            }

            //delete data with value of first sem in Room_sched
            Room_sched::where('sem', $firstSem)->where('roomSchool', $schName)->delete();

            //getting all data from stud_scheds
            $stud_scheds_data = DB::table('stud_scheds')
            ->where('sem', $firstSem)
            ->where('schName', $schName)
            ->get();

            foreach($stud_scheds_data as $prev_stud_scheds_data){

                Prev_Stud_Scheds::create([
                    
                    'profId' => $prev_stud_scheds_data -> profId,
                    'profName' => $prev_stud_scheds_data -> profName,
                    'schId' => $prev_stud_scheds_data -> schId,
                    'schName' => $prev_stud_scheds_data -> schName,
                    'subCode' =>  $prev_stud_scheds_data -> subCode,
                    'schedDay' => $prev_stud_scheds_data -> schedDay,
                    'startTime' => $prev_stud_scheds_data -> startTime,
                    'endTime' => $prev_stud_scheds_data -> endTime,
                    'studCourse' => $prev_stud_scheds_data -> studCourse,
                    'studYear' => $prev_stud_scheds_data -> studYear,
                    'studSection' => $prev_stud_scheds_data -> studSection,
                    'sem' => $prev_stud_scheds_data -> sem,
                    'totalHours' => $prev_stud_scheds_data -> totalHours,
                    'classroom' => $prev_stud_scheds_data -> classroom,
                    'sy' => $prev_stud_scheds_data -> sy,
    
                ]);
            }

            //delete data with value of first sem in Stud_sched
            Stud_sched::where('sem', $firstSem)->where('schName', $schName)->delete();

            //getting all data from prof_scheds third sem
            $third_sem_prof_scheds_data = DB::table('prof_scheds')
            ->where('sem', $thirdSem)
            ->where('profSchool', $schName)
            ->get();

            foreach($third_sem_prof_scheds_data as $prev_third_sem_prof_scheds_data){

                Prev_Prof_Scheds::create([
                    
                    'profId' => $prev_third_sem_prof_scheds_data -> profId,
                    'profName' => $prev_third_sem_prof_scheds_data -> profName,
                    'profSchool' => $prev_third_sem_prof_scheds_data -> profSchool,
                    'subCode' => $prev_third_sem_prof_scheds_data -> subCode,
                    'schedDay' =>  $prev_third_sem_prof_scheds_data -> schedDay,
                    'startTime' => $prev_third_sem_prof_scheds_data -> startTime,
                    'endTime' => $prev_third_sem_prof_scheds_data -> endTime,
                    'studCourse' => $prev_third_sem_prof_scheds_data -> studCourse,
                    'studYear' => $prev_third_sem_prof_scheds_data -> studYear,
                    'studSection' => $prev_third_sem_prof_scheds_data -> studSection,
                    'sem' => $prev_third_sem_prof_scheds_data -> sem,
                    'totalHours' => $prev_third_sem_prof_scheds_data -> totalHours,
                    'classroom' => $prev_third_sem_prof_scheds_data -> classroom,
                    'sy' => $prev_third_sem_prof_scheds_data -> sy,
    
                ]);
            }
 
            //delete data with value of third sem in Prof_sched
            Prof_sched::where('sem', $thirdSem)->where('profSchool', $schName)->delete();

            //getting all data from room_scheds where sem is third sem
            $third_sem_room_scheds_data = DB::table('room_scheds')
            ->where('sem', $thirdSem)
            ->where('roomSchool', $schName)
            ->get();

            foreach($third_sem_room_scheds_data as $prev_third_sem_room_scheds_data){

                Prev_Room_Scheds::create([
                    
                    'profId' => $prev_third_sem_room_scheds_data -> profId,
                    'profName' => $prev_third_sem_room_scheds_data -> profName,
                    'profSchool' => $prev_third_sem_room_scheds_data -> profSchool,
                    'roomSchool' => $prev_third_sem_room_scheds_data -> roomSchool,
                    'roomNumber' =>  $prev_third_sem_room_scheds_data -> roomNumber,
                    'subCode' => $prev_third_sem_room_scheds_data -> subCode,
                    'schedDay' => $prev_third_sem_room_scheds_data -> schedDay,
                    'startTime' => $prev_third_sem_room_scheds_data -> startTime,
                    'endTime' => $prev_third_sem_room_scheds_data -> endTime,
                    'studCourse' => $prev_third_sem_room_scheds_data -> studCourse,
                    'studYear' => $prev_third_sem_room_scheds_data -> studYear,
                    'studSection' => $prev_third_sem_room_scheds_data -> studSection,
                    'sem' => $prev_third_sem_room_scheds_data -> sem,
                    'totalHours' => $prev_third_sem_room_scheds_data -> totalHours,
                    'sy' => $prev_third_sem_room_scheds_data -> sy,
    
                ]);
            }

            //delete data with value of third sem in Room_sched
            Room_sched::where('sem', $thirdSem)->where('roomSchool', $schName)->delete();

            //getting all data from stud_scheds where sem is third sem
            $third_sem_stud_scheds_data = DB::table('stud_scheds')
            ->where('sem', $thirdSem)
            ->where('schName', $schName)
            ->get();

            foreach($third_sem_stud_scheds_data as $prev_third_sem_stud_scheds_data){

                Prev_Stud_Scheds::create([
                    
                    'profId' => $prev_third_sem_stud_scheds_data -> profId,
                    'profName' => $prev_third_sem_stud_scheds_data -> profName,
                    'schId' => $prev_third_sem_stud_scheds_data -> schId,
                    'schName' => $prev_third_sem_stud_scheds_data -> schName,
                    'subCode' =>  $prev_third_sem_stud_scheds_data -> subCode,
                    'schedDay' => $prev_third_sem_stud_scheds_data -> schedDay,
                    'startTime' => $prev_third_sem_stud_scheds_data -> startTime,
                    'endTime' => $prev_third_sem_stud_scheds_data -> endTime,
                    'studCourse' => $prev_third_sem_stud_scheds_data -> studCourse,
                    'studYear' => $prev_third_sem_stud_scheds_data -> studYear,
                    'studSection' => $prev_third_sem_stud_scheds_data -> studSection,
                    'sem' => $prev_third_sem_stud_scheds_data -> sem,
                    'totalHours' => $prev_third_sem_stud_scheds_data -> totalHours,
                    'classroom' => $prev_third_sem_stud_scheds_data -> classroom,
                    'sy' => $prev_third_sem_stud_scheds_data -> sy,
    
                ]);
            }

            //delete data with value of third sem in Stud_sched
            Stud_sched::where('sem', $thirdSem)->where('schName', $schName)->delete();

            //getting all data from class_with_subs
            $newOngoingClassWithSubsSecondSem = DB::table('class_with_subs')
            ->where('sem', $secondSem)
            ->where('schName', $schName)
            ->get();

            foreach($newOngoingClassWithSubsSecondSem as $OngoingClassWithSubs){

                Ongoing_Class_With_Subs::create([
    
                    'course' => $OngoingClassWithSubs -> course,
                    'year' => $OngoingClassWithSubs -> year,
                    'section' =>  $OngoingClassWithSubs -> section,
                    'subject_code' => $OngoingClassWithSubs -> subject_code,
                    'subject_title' => $OngoingClassWithSubs -> subject_title,
                    'subject_units' => $OngoingClassWithSubs -> subject_units,
                    'sem' => $OngoingClassWithSubs -> sem,
                    'schId' => $OngoingClassWithSubs -> schId,
                    'schName' => $OngoingClassWithSubs -> schName,
    
                ]);
            }

            //getting all data from all_subjects
            $newOngoingSubjectsSecondSem = DB::table('all_subjects')
            ->where('sem', $secondSem)
            ->where('subSchool', $schName)
            ->get();

            foreach($newOngoingSubjectsSecondSem as $OngoingSubjectsSecondSem){

                Ongoing_Subjects::create([
    
                    'subTitle'  => $OngoingSubjectsSecondSem -> subTitle,
                    'subCode' => $OngoingSubjectsSecondSem -> subCode,
                    'subUnits' => $OngoingSubjectsSecondSem -> subUnits,
                    'sem' => $OngoingSubjectsSecondSem -> sem,
                    'subField' => $OngoingSubjectsSecondSem -> subField,
                    'schId' => $OngoingSubjectsSecondSem -> schId,
                    'subSchool' => $OngoingSubjectsSecondSem -> subSchool,
    
                ]);

            }

        }
        elseif($newSem == $firstSem)
        {

            //delete data with value of first sem in Ongoing_Class_With_Subs
            Ongoing_Class_With_Subs::where('sem', $secondSem)->where('schName', $schName)->delete();

            //delete data with value of first sem in Ongoing_Subjects
            Ongoing_Subjects::where('sem', $secondSem)->where('subSchool', $schName)->delete();

            //delete data with value of third sem in Ongoing_Class_With_Subs
            Ongoing_Class_With_Subs::where('sem', $thirdSem)->where('schName', $schName)->delete();

            //delete data with value of third sem in Ongoing_Subjects
            Ongoing_Subjects::where('sem', $thirdSem)->where('subSchool', $schName)->delete();

            //getting all data from prof_scheds
            $second_prof_scheds_data = DB::table('prof_scheds')
            ->where('sem', $secondSem)
            ->where('profSchool', $schName)
            ->get();

            foreach($second_prof_scheds_data as $prev_second_prof_scheds_data){

                Prev_Prof_Scheds::create([
                    
                    'profId' => $prev_second_prof_scheds_data -> profId,
                    'profName' => $prev_second_prof_scheds_data -> profName,
                    'profSchool' => $prev_second_prof_scheds_data -> profSchool,
                    'subCode' => $prev_second_prof_scheds_data -> subCode,
                    'schedDay' =>  $prev_second_prof_scheds_data -> schedDay,
                    'startTime' => $prev_second_prof_scheds_data -> startTime,
                    'endTime' => $prev_second_prof_scheds_data -> endTime,
                    'studCourse' => $prev_second_prof_scheds_data -> studCourse,
                    'studYear' => $prev_second_prof_scheds_data -> studYear,
                    'studSection' => $prev_second_prof_scheds_data -> studSection,
                    'sem' => $prev_second_prof_scheds_data -> sem,
                    'totalHours' => $prev_second_prof_scheds_data -> totalHours,
                    'classroom' => $prev_second_prof_scheds_data -> classroom,
                    'sy' => $prev_second_prof_scheds_data -> sy,
    
                ]);
            }
 
            //delete data with value of second sem in Prof_sched
            Prof_sched::where('sem', $secondSem)->where('profSchool', $schName)->delete();

            //getting all data from room_scheds
            $second_room_scheds_data = DB::table('room_scheds')
            ->where('sem', $secondSem)
            ->where('roomSchool', $schName)
            ->get();

            foreach($second_room_scheds_data as $prev_second_room_scheds_data){

                Prev_Room_Scheds::create([
                    
                    'profId' => $prev_second_room_scheds_data -> profId,
                    'profName' => $prev_second_room_scheds_data -> profName,
                    'profSchool' => $prev_second_room_scheds_data -> profSchool,
                    'roomSchool' => $prev_second_room_scheds_data -> roomSchool,
                    'roomNumber' =>  $prev_second_room_scheds_data -> roomNumber,
                    'subCode' => $prev_second_room_scheds_data -> subCode,
                    'schedDay' => $prev_second_room_scheds_data -> schedDay,
                    'startTime' => $prev_second_room_scheds_data -> startTime,
                    'endTime' => $prev_second_room_scheds_data -> endTime,
                    'studCourse' => $prev_second_room_scheds_data -> studCourse,
                    'studYear' => $prev_second_room_scheds_data -> studYear,
                    'studSection' => $prev_second_room_scheds_data -> studSection,
                    'sem' => $prev_second_room_scheds_data -> sem,
                    'totalHours' => $prev_second_room_scheds_data -> totalHours,
                    'sy' => $prev_second_room_scheds_data -> sy,
    
                ]);
            }

            //delete data with value of second sem in Room_sched
            Room_sched::where('sem', $secondSem)->where('roomSchool', $schName)->delete();

            //getting all data from stud_scheds
            $second_stud_scheds_data = DB::table('stud_scheds')
            ->where('sem', $secondSem)
            ->where('schName', $schName)
            ->get();
 
             foreach($second_stud_scheds_data as $prev_second_stud_scheds_data){
 
                 Prev_Stud_Scheds::create([
                     
                     'profId' => $prev_second_stud_scheds_data -> profId,
                     'profName' => $prev_second_stud_scheds_data -> profName,
                     'schId' => $prev_second_stud_scheds_data -> schId,
                     'schName' => $prev_second_stud_scheds_data -> schName,
                     'subCode' =>  $prev_second_stud_scheds_data -> subCode,
                     'schedDay' => $prev_second_stud_scheds_data -> schedDay,
                     'startTime' => $prev_second_stud_scheds_data -> startTime,
                     'endTime' => $prev_second_stud_scheds_data -> endTime,
                     'studCourse' => $prev_second_stud_scheds_data -> studCourse,
                     'studYear' => $prev_second_stud_scheds_data -> studYear,
                     'studSection' => $prev_second_stud_scheds_data -> studSection,
                     'sem' => $prev_second_stud_scheds_data -> sem,
                     'totalHours' => $prev_second_stud_scheds_data -> totalHours,
                     'classroom' => $prev_second_stud_scheds_data -> classroom,
                     'sy' => $prev_second_stud_scheds_data -> sy,
     
                 ]);
             }
 
            //delete data with value of second sem in Stud_sched
            Stud_sched::where('sem', $secondSem)->where('schName', $schName)->delete();

            //getting all data from prof_scheds where sem is third
            $third_sem_second_prof_scheds_data = DB::table('prof_scheds')
            ->where('sem', $thirdSem)
            ->where('profSchool', $schName)
            ->get();

            foreach($third_sem_second_prof_scheds_data as $prev_third_sem_second_prof_scheds_data){

                Prev_Prof_Scheds::create([
                    
                    'profId' => $prev_third_sem_second_prof_scheds_data -> profId,
                    'profName' => $prev_third_sem_second_prof_scheds_data -> profName,
                    'profSchool' => $prev_third_sem_second_prof_scheds_data -> profSchool,
                    'subCode' => $prev_third_sem_second_prof_scheds_data -> subCode,
                    'schedDay' =>  $prev_third_sem_second_prof_scheds_data -> schedDay,
                    'startTime' => $prev_third_sem_second_prof_scheds_data -> startTime,
                    'endTime' => $prev_third_sem_second_prof_scheds_data -> endTime,
                    'studCourse' => $prev_third_sem_second_prof_scheds_data -> studCourse,
                    'studYear' => $prev_third_sem_second_prof_scheds_data -> studYear,
                    'studSection' => $prev_third_sem_second_prof_scheds_data -> studSection,
                    'sem' => $prev_third_sem_second_prof_scheds_data -> sem,
                    'totalHours' => $prev_third_sem_second_prof_scheds_data -> totalHours,
                    'classroom' => $prev_third_sem_second_prof_scheds_data -> classroom,
                    'sy' => $prev_third_sem_second_prof_scheds_data -> sy,
    
                ]);
            }
 
            //delete data with value of third sem in Prof_sched
            Prof_sched::where('sem', $thirdSem)->where('profSchool', $schName)->delete();

            //getting all data from room_scheds where sem is third
            $third_sem_second_room_scheds_data = DB::table('room_scheds')
            ->where('sem', $thirdSem)
            ->where('roomSchool', $schName)
            ->get();

            foreach($third_sem_second_room_scheds_data as $prev_third_sem_second_room_scheds_data){

                Prev_Room_Scheds::create([
                    
                    'profId' => $prev_third_sem_second_room_scheds_data -> profId,
                    'profName' => $prev_third_sem_second_room_scheds_data -> profName,
                    'profSchool' => $prev_third_sem_second_room_scheds_data -> profSchool,
                    'roomSchool' => $prev_third_sem_second_room_scheds_data -> roomSchool,
                    'roomNumber' =>  $prev_third_sem_second_room_scheds_data -> roomNumber,
                    'subCode' => $prev_third_sem_second_room_scheds_data -> subCode,
                    'schedDay' => $prev_third_sem_second_room_scheds_data -> schedDay,
                    'startTime' => $prev_third_sem_second_room_scheds_data -> startTime,
                    'endTime' => $prev_third_sem_second_room_scheds_data -> endTime,
                    'studCourse' => $prev_third_sem_second_room_scheds_data -> studCourse,
                    'studYear' => $prev_third_sem_second_room_scheds_data -> studYear,
                    'studSection' => $prev_third_sem_second_room_scheds_data -> studSection,
                    'sem' => $prev_third_sem_second_room_scheds_data -> sem,
                    'totalHours' => $prev_third_sem_second_room_scheds_data -> totalHours,
                    'sy' => $prev_third_sem_second_room_scheds_data -> sy,
    
                ]);
            }

            //delete data with value of third sem in Room_sched
            Room_sched::where('sem', $thirdSem)->where('roomSchool', $schName)->delete();

            //getting all data from stud_scheds where sem is third
            $third_sem_second_stud_scheds_data = DB::table('stud_scheds')
            ->where('sem', $thirdSem)
            ->where('schName', $schName)
            ->get();
 
             foreach($third_sem_second_stud_scheds_data as $prev_third_sem_second_stud_scheds_data){
 
                 Prev_Stud_Scheds::create([
                     
                     'profId' => $prev_third_sem_second_stud_scheds_data -> profId,
                     'profName' => $prev_third_sem_second_stud_scheds_data -> profName,
                     'schId' => $prev_third_sem_second_stud_scheds_data -> schId,
                     'schName' => $prev_third_sem_second_stud_scheds_data -> schName,
                     'subCode' =>  $prev_third_sem_second_stud_scheds_data -> subCode,
                     'schedDay' => $prev_third_sem_second_stud_scheds_data -> schedDay,
                     'startTime' => $prev_third_sem_second_stud_scheds_data -> startTime,
                     'endTime' => $prev_third_sem_second_stud_scheds_data -> endTime,
                     'studCourse' => $prev_third_sem_second_stud_scheds_data -> studCourse,
                     'studYear' => $prev_third_sem_second_stud_scheds_data -> studYear,
                     'studSection' => $prev_third_sem_second_stud_scheds_data -> studSection,
                     'sem' => $prev_third_sem_second_stud_scheds_data -> sem,
                     'totalHours' => $prev_third_sem_second_stud_scheds_data -> totalHours,
                     'classroom' => $prev_third_sem_second_stud_scheds_data -> classroom,
                     'sy' => $prev_third_sem_second_stud_scheds_data -> sy,
     
                 ]);
             }
 
            //delete data with value of third sem in Stud_sched
            Stud_sched::where('sem', $thirdSem)->where('schName', $schName)->delete();

            //getting all data from class_with_subs
            $newOngoingClassWithSubsFirstSem = DB::table('class_with_subs')
            ->where('sem', $firstSem)
            ->where('schName', $schName)
            ->get();

            foreach($newOngoingClassWithSubsFirstSem as $OngoingClassWithSubsFirstSem){

                Ongoing_Class_With_Subs::create([
    
                    'course' => $OngoingClassWithSubsFirstSem -> course,
                    'year' => $OngoingClassWithSubsFirstSem -> year,
                    'section' =>  $OngoingClassWithSubsFirstSem -> section,
                    'subject_code' => $OngoingClassWithSubsFirstSem -> subject_code,
                    'subject_title' => $OngoingClassWithSubsFirstSem -> subject_title,
                    'subject_units' => $OngoingClassWithSubsFirstSem -> subject_units,
                    'sem' => $OngoingClassWithSubsFirstSem -> sem,
                    'schId' => $OngoingClassWithSubsFirstSem -> schId,
                    'schName' => $OngoingClassWithSubsFirstSem -> schName,
    
                ]);

            }

            //getting all data from all_subjects
            $newOngoingSubjectsFirstSem = DB::table('all_subjects')
            ->where('sem', $firstSem)
            ->where('subSchool', $schName)
            ->get();

            foreach($newOngoingSubjectsFirstSem as $OngoingSubjectsFirstSem){

                Ongoing_Subjects::create([
    
                    'subTitle'  => $OngoingSubjectsFirstSem -> subTitle,
                    'subCode' => $OngoingSubjectsFirstSem -> subCode,
                    'subUnits' => $OngoingSubjectsFirstSem -> subUnits,
                    'sem' => $OngoingSubjectsFirstSem -> sem,
                    'subField' => $OngoingSubjectsFirstSem -> subField,
                    'schId' => $OngoingSubjectsFirstSem -> schId,
                    'subSchool' => $OngoingSubjectsFirstSem -> subSchool,
    
                ]);

            }

        }
        elseif($newSem == $thirdSem)
        {

            //delete data with value of first sem in Ongoing_Class_With_Subs
            Ongoing_Class_With_Subs::where('sem', $firstSem)->where('schName', $schName)->delete();

            //delete data with value of first sem in Ongoing_Subjects
            Ongoing_Subjects::where('sem', $firstSem)->where('subSchool', $schName)->delete();

            //delete data with value of second sem in Ongoing_Class_With_Subs
            Ongoing_Class_With_Subs::where('sem', $secondSem)->where('schName', $schName)->delete();

            //delete data with value of second sem in Ongoing_Subjects
            Ongoing_Subjects::where('sem', $secondSem)->where('subSchool', $schName)->delete();

            //getting all data from prof_scheds where sem is first
            $first_sem_third_prof_scheds_data = DB::table('prof_scheds')
            ->where('sem', $firstSem)
            ->where('profSchool', $schName)
            ->get();

            foreach($first_sem_third_prof_scheds_data as $prev_first_sem_third_prof_scheds_data){

                Prev_Prof_Scheds::create([
                    
                    'profId' => $prev_first_sem_third_prof_scheds_data -> profId,
                    'profName' => $prev_first_sem_third_prof_scheds_data -> profName,
                    'profSchool' => $prev_first_sem_third_prof_scheds_data -> profSchool,
                    'subCode' => $prev_first_sem_third_prof_scheds_data -> subCode,
                    'schedDay' =>  $prev_first_sem_third_prof_scheds_data -> schedDay,
                    'startTime' => $prev_first_sem_third_prof_scheds_data -> startTime,
                    'endTime' => $prev_first_sem_third_prof_scheds_data -> endTime,
                    'studCourse' => $prev_first_sem_third_prof_scheds_data -> studCourse,
                    'studYear' => $prev_first_sem_third_prof_scheds_data -> studYear,
                    'studSection' => $prev_first_sem_third_prof_scheds_data -> studSection,
                    'sem' => $prev_first_sem_third_prof_scheds_data -> sem,
                    'totalHours' => $prev_first_sem_third_prof_scheds_data -> totalHours,
                    'classroom' => $prev_first_sem_third_prof_scheds_data -> classroom,
                    'sy' => $prev_first_sem_third_prof_scheds_data -> sy,
    
                ]);
            }
 
            //delete data with value of first sem in Prof_sched
            Prof_sched::where('sem', $firstSem)->where('profSchool', $schName)->delete();

            //getting all data from room_scheds where sem is first
            $first_sem_third_room_scheds_data = DB::table('room_scheds')
            ->where('sem', $firstSem)
            ->where('roomSchool', $schName)
            ->get();

            foreach($first_sem_third_room_scheds_data as $prev_first_sem_third_room_scheds_data){

                Prev_Room_Scheds::create([
                    
                    'profId' => $prev_first_sem_third_room_scheds_data -> profId,
                    'profName' => $prev_first_sem_third_room_scheds_data -> profName,
                    'profSchool' => $prev_first_sem_third_room_scheds_data -> profSchool,
                    'roomSchool' => $prev_first_sem_third_room_scheds_data -> roomSchool,
                    'roomNumber' =>  $prev_first_sem_third_room_scheds_data -> roomNumber,
                    'subCode' => $prev_first_sem_third_room_scheds_data -> subCode,
                    'schedDay' => $prev_first_sem_third_room_scheds_data -> schedDay,
                    'startTime' => $prev_first_sem_third_room_scheds_data -> startTime,
                    'endTime' => $prev_first_sem_third_room_scheds_data -> endTime,
                    'studCourse' => $prev_first_sem_third_room_scheds_data -> studCourse,
                    'studYear' => $prev_first_sem_third_room_scheds_data -> studYear,
                    'studSection' => $prev_first_sem_third_room_scheds_data -> studSection,
                    'sem' => $prev_first_sem_third_room_scheds_data -> sem,
                    'totalHours' => $prev_first_sem_third_room_scheds_data -> totalHours,
                    'sy' => $prev_first_sem_third_room_scheds_data -> sy,
    
                ]);
            }

            //delete data with value of first sem in Room_sched
            Room_sched::where('sem', $firstSem)->where('roomSchool', $schName)->delete();

            //getting all data from stud_scheds where sem is first
            $first_sem_third_stud_scheds_data = DB::table('stud_scheds')
            ->where('sem', $firstSem)
            ->where('schName', $schName)
            ->get();

            foreach($first_sem_third_stud_scheds_data as $prev_first_sem_third_stud_scheds_data){

                Prev_Stud_Scheds::create([
                    
                    'profId' => $prev_first_sem_third_stud_scheds_data -> profId,
                    'profName' => $prev_first_sem_third_stud_scheds_data -> profName,
                    'schId' => $prev_first_sem_third_stud_scheds_data -> schId,
                    'schName' => $prev_first_sem_third_stud_scheds_data -> schName,
                    'subCode' =>  $prev_first_sem_third_stud_scheds_data -> subCode,
                    'schedDay' => $prev_first_sem_third_stud_scheds_data -> schedDay,
                    'startTime' => $prev_first_sem_third_stud_scheds_data -> startTime,
                    'endTime' => $prev_first_sem_third_stud_scheds_data -> endTime,
                    'studCourse' => $prev_first_sem_third_stud_scheds_data -> studCourse,
                    'studYear' => $prev_first_sem_third_stud_scheds_data -> studYear,
                    'studSection' => $prev_first_sem_third_stud_scheds_data -> studSection,
                    'sem' => $prev_first_sem_third_stud_scheds_data -> sem,
                    'totalHours' => $prev_first_sem_third_stud_scheds_data -> totalHours,
                    'classroom' => $prev_first_sem_third_stud_scheds_data -> classroom,
                    'sy' => $prev_first_sem_third_stud_scheds_data -> sy,
    
                ]);
            }

            //delete data with value of first sem in Stud_sched
            Stud_sched::where('sem', $firstSem)->where('schName', $schName)->delete();

            //getting all data from prof_scheds where sem is second
            $second_sem_third_prof_scheds_data = DB::table('prof_scheds')
            ->where('sem', $secondSem)
            ->where('profSchool', $schName)
            ->get();

            foreach($second_sem_third_prof_scheds_data as $prev_second_sem_third_prof_scheds_data){

                Prev_Prof_Scheds::create([
                    
                    'profId' => $prev_second_sem_third_prof_scheds_data -> profId,
                    'profName' => $prev_second_sem_third_prof_scheds_data -> profName,
                    'profSchool' => $prev_second_sem_third_prof_scheds_data -> profSchool,
                    'subCode' => $prev_second_sem_third_prof_scheds_data -> subCode,
                    'schedDay' =>  $prev_second_sem_third_prof_scheds_data -> schedDay,
                    'startTime' => $prev_second_sem_third_prof_scheds_data -> startTime,
                    'endTime' => $prev_second_sem_third_prof_scheds_data -> endTime,
                    'studCourse' => $prev_second_sem_third_prof_scheds_data -> studCourse,
                    'studYear' => $prev_second_sem_third_prof_scheds_data -> studYear,
                    'studSection' => $prev_second_sem_third_prof_scheds_data -> studSection,
                    'sem' => $prev_second_sem_third_prof_scheds_data -> sem,
                    'totalHours' => $prev_second_sem_third_prof_scheds_data -> totalHours,
                    'classroom' => $prev_second_sem_third_prof_scheds_data -> classroom,
                    'sy' => $prev_second_sem_third_prof_scheds_data -> sy,
    
                ]);
            }
 
            //delete data with value of second sem in Prof_sched
            Prof_sched::where('sem', $secondSem)->where('profSchool', $schName)->delete();

            //getting all data from room_scheds where sem is first
            $second_sem_third_room_scheds_data = DB::table('room_scheds')
            ->where('sem', $secondSem)
            ->where('roomSchool', $schName)
            ->get();

            foreach($second_sem_third_room_scheds_data as $prev_second_sem_third_room_scheds_data){

                Prev_Room_Scheds::create([
                    
                    'profId' => $prev_second_sem_third_room_scheds_data -> profId,
                    'profName' => $prev_second_sem_third_room_scheds_data -> profName,
                    'profSchool' => $prev_second_sem_third_room_scheds_data -> profSchool,
                    'roomSchool' => $prev_second_sem_third_room_scheds_data -> roomSchool,
                    'roomNumber' =>  $prev_second_sem_third_room_scheds_data -> roomNumber,
                    'subCode' => $prev_second_sem_third_room_scheds_data -> subCode,
                    'schedDay' => $prev_second_sem_third_room_scheds_data -> schedDay,
                    'startTime' => $prev_second_sem_third_room_scheds_data -> startTime,
                    'endTime' => $prev_second_sem_third_room_scheds_data -> endTime,
                    'studCourse' => $prev_second_sem_third_room_scheds_data -> studCourse,
                    'studYear' => $prev_second_sem_third_room_scheds_data -> studYear,
                    'studSection' => $prev_second_sem_third_room_scheds_data -> studSection,
                    'sem' => $prev_second_sem_third_room_scheds_data -> sem,
                    'totalHours' => $prev_second_sem_third_room_scheds_data -> totalHours,
                    'sy' => $prev_second_sem_third_room_scheds_data -> sy,
    
                ]);
            }

            //delete data with value of second sem in Room_sched
            Room_sched::where('sem', $secondSem)->where('roomSchool', $schName)->delete();

            //getting all data from stud_scheds where sem is second
            $second_sem_third_stud_scheds_data = DB::table('stud_scheds')
            ->where('sem', $secondSem)
            ->where('schName', $schName)
            ->get();

            foreach($second_sem_third_stud_scheds_data as $prev_second_sem_third_stud_scheds_data){

                Prev_Stud_Scheds::create([
                    
                    'profId' => $prev_second_sem_third_stud_scheds_data -> profId,
                    'profName' => $prev_second_sem_third_stud_scheds_data -> profName,
                    'schId' => $prev_second_sem_third_stud_scheds_data -> schId,
                    'schName' => $prev_second_sem_third_stud_scheds_data -> schName,
                    'subCode' =>  $prev_second_sem_third_stud_scheds_data -> subCode,
                    'schedDay' => $prev_second_sem_third_stud_scheds_data -> schedDay,
                    'startTime' => $prev_second_sem_third_stud_scheds_data -> startTime,
                    'endTime' => $prev_second_sem_third_stud_scheds_data -> endTime,
                    'studCourse' => $prev_second_sem_third_stud_scheds_data -> studCourse,
                    'studYear' => $prev_second_sem_third_stud_scheds_data -> studYear,
                    'studSection' => $prev_second_sem_third_stud_scheds_data -> studSection,
                    'sem' => $prev_second_sem_third_stud_scheds_data -> sem,
                    'totalHours' => $prev_second_sem_third_stud_scheds_data -> totalHours,
                    'classroom' => $prev_second_sem_third_stud_scheds_data -> classroom,
                    'sy' => $prev_second_sem_third_stud_scheds_data -> sy,
    
                ]);
            }

            //delete data with value of second sem in Stud_sched
            Stud_sched::where('sem', $secondSem)->where('schName', $schName)->delete();

            //getting all data from class_with_subs
            $newOngoingClassWithSubsThirdSem = DB::table('class_with_subs')
            ->where('sem', $thirdSem)
            ->where('schName', $schName)
            ->get();

            foreach($newOngoingClassWithSubsThirdSem as $OngoingClassWithSubsThirdSem){

                Ongoing_Class_With_Subs::create([
    
                    'course' => $OngoingClassWithSubsThirdSem -> course,
                    'year' => $OngoingClassWithSubsThirdSem -> year,
                    'section' =>  $OngoingClassWithSubsThirdSem -> section,
                    'subject_code' => $OngoingClassWithSubsThirdSem -> subject_code,
                    'subject_title' => $OngoingClassWithSubsThirdSem -> subject_title,
                    'subject_units' => $OngoingClassWithSubsThirdSem -> subject_units,
                    'sem' => $OngoingClassWithSubsThirdSem -> sem,
                    'schId' => $OngoingClassWithSubsThirdSem -> schId,
                    'schName' => $OngoingClassWithSubsThirdSem -> schName,
    
                ]);

            }

            //getting all data from all_subjects
            $newOngoingSubjectsThirdSem = DB::table('all_subjects')
            ->where('sem', $thirdSem)
            ->where('subSchool', $schName)
            ->get();

            foreach($newOngoingSubjectsThirdSem as $OngoingSubjectsThirdSem){

                Ongoing_Subjects::create([
    
                    'subTitle'  => $OngoingSubjectsThirdSem -> subTitle,
                    'subCode' => $OngoingSubjectsThirdSem -> subCode,
                    'subUnits' => $OngoingSubjectsThirdSem -> subUnits,
                    'sem' => $OngoingSubjectsThirdSem -> sem,
                    'subField' => $OngoingSubjectsThirdSem -> subField,
                    'schId' => $OngoingSubjectsThirdSem -> schId,
                    'subSchool' => $OngoingSubjectsThirdSem -> subSchool,
    
                ]);

            }

        }

        return to_route('school.index');
     
    }
}

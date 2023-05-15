<?php

namespace App\Http\Controllers;

use App\Models\Prof_config;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfConfigController extends Controller
{
    public function index(){

        $profId = Auth::user()->id;

        $id = DB::table('prof_configs')->where('profId', $profId)->value('id');

        $profconfig = Prof_config::find($id);

        return view('prof.profconfigs',['profconfig' => $profconfig]);

    }

    public function store(Request $request){

        $profId = Auth::user()->id;

        $id = DB::table('prof_configs')->where('profId', $profId)->value('id');

        $profSchool = DB::table('prof_infos')->where('id', $profId)->value('profSchool');

        $minimumTime = strtotime("03:00:00");
        $finalMinimumTime = date("H:i:s", $minimumTime);

        $schTimeStartSun = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeStartSun');
        $schTimeEndSun = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeEndSun');
        $schTimeStartMon = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeStartMon');
        $schTimeEndMon = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeEndMon');
        $schTimeStartTue = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeStartTue');
        $schTimeEndTue = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeEndTue');
        $schTimeStartWed = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeStartWed');
        $schTimeEndWed = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeEndWed');
        $schTimeStartThu = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeStartThu');
        $schTimeEndThu = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeEndThu');
        $schTimeStartFri = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeStartFri');
        $schTimeEndFri = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeEndFri');
        $schTimeStartSat = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeStartSat');
        $schTimeEndSat = DB::table('school_configs')->where('schName', $profSchool)->value('schTimeEndSat');

        //pref start sunday
        $prefTimeStartSun =  $request -> prefTimeStartSun;
        $prefTimeStartSunToInt = strtotime($prefTimeStartSun);
        $prefTimeStartSunConverted = date("H:i:s", $prefTimeStartSunToInt);

        //pref end sun
        $prefTimeEndSun =  $request -> prefTimeEndSun;
        $prefTimeEndSunSunToInt = strtotime($prefTimeEndSun);
        $prefTimeEndSunConverted = date("H:i:s", $prefTimeEndSunSunToInt);

        //pref start monday
        $prefTimeStartMon =  $request -> prefTimeStartMon;
        $prefTimeStartMonToInt = strtotime($prefTimeStartMon);
        $prefTimeStartMonConverted = date("H:i:s", $prefTimeStartMonToInt);

        //pref end monday
        $prefTimeEndMon =  $request -> prefTimeEndMon;
        $prefTimeEndMonToInt = strtotime($prefTimeStartMon);
        $prefTimeEndMonConverted = date("H:i:s", $prefTimeEndMonToInt);

        //pref start tuesday
        $prefTimeStartTue =  $request -> prefTimeStartTue;
        $prefTimeStartTueToInt = strtotime($prefTimeStartTue);
        $prefTimeStartTueConverted = date("H:i:s", $prefTimeStartTueToInt);

        //pref end tuesday
        $prefTimeEndTue =  $request -> prefTimeEndTue;
        $prefTimeEndTueToInt = strtotime($prefTimeEndTue);
        $prefTimeEndTueConverted = date("H:i:s", $prefTimeEndTueToInt);

        //pref start wednesday
        $prefTimeStartWed =  $request -> prefTimeStartWed;
        $prefTimeStartWedToInt = strtotime($prefTimeStartWed);
        $prefTimeStartWedConverted = date("H:i:s", $prefTimeStartWedToInt);

        //pref end wednesday
        $prefTimeEndWed =  $request -> prefTimeEndWed;
        $prefTimeEndWedToInt = strtotime($prefTimeEndWed);
        $prefTimeEndWedConverted = date("H:i:s", $prefTimeEndWedToInt);

        //pref start thursday
        $prefTimeStartThu =  $request -> prefTimeStartThu;
        $prefTimeStartThuToInt = strtotime($prefTimeStartThu);
        $prefTimeStartThuConverted = date("H:i:s", $prefTimeStartThuToInt);

        //pref end thursday
        $prefTimeEndThu =  $request -> prefTimeEndThu;
        $prefTimeEndThuToInt = strtotime($prefTimeEndThu);
        $prefTimeEndThuConverted = date("H:i:s", $prefTimeEndThuToInt);

        //pref start friday
        $prefTimeStartFri =  $request -> prefTimeStartFri;
        $prefTimeStartFriToInt = strtotime($prefTimeStartFri);
        $prefTimeStartFriConverted = date("H:i:s", $prefTimeStartFriToInt);

        //pref end friday
        $prefTimeEndFri =  $request -> prefTimeEndFri;
        $prefTimeEndFriToInt = strtotime($prefTimeEndFri);
        $prefTimeEndFriConverted = date("H:i:s", $prefTimeEndFriToInt);

        //pref start saturday
        $prefTimeStartSat =  $request -> prefTimeStartSat;
        $prefTimeStartSatToInt = strtotime($prefTimeStartSat);
        $prefTimeStartSatConverted = date("H:i:s", $prefTimeStartSatToInt);

        //pref end saturday
        $prefTimeEndSat =  $request -> prefTimeEndSat;
        $prefTimeEndSatToInt = strtotime($prefTimeEndSat);
        $prefTimeEndSatConverted = date("H:i:s", $prefTimeEndSatToInt);

        //professor preferred time not less than to 3 units for sunday
        $sundayStartTime = $prefTimeStartSun;
        $sundayEndTime = $prefTimeEndSun;

        $sundayStartTimeToString = strtotime($sundayStartTime);
        $sundayEndTimeToString = strtotime($sundayEndTime);

        $differenceInTimeInSunday =  $sundayEndTimeToString  - $sundayStartTimeToString ; 
        $finalTimeInSunday = date("H:i:s", $differenceInTimeInSunday);
        //end for sunday

        //professor preferred time not less than to 3 units for monday
        $mondayStartTime = $prefTimeStartMon;
        $mondayEndTime = $prefTimeEndMon;

        $mondayStartTimeToString = strtotime($mondayStartTime);
        $mondayEndTimeToString = strtotime($mondayEndTime);

        $differenceInTimeInMonday =  $mondayEndTimeToString  - $mondayStartTimeToString ; 
        $finalTimeofMonday = date("H:i:s", $differenceInTimeInMonday);
        //end for monday

        //professor preferred time not less than to 3 units for tuesday
        $tuesdayStartTime = $prefTimeStartTue;
        $tuesdayEndTime = $prefTimeEndTue;

        $tuesdayStartTimeToString = strtotime($tuesdayStartTime);
        $tuesdayEndTimeToString = strtotime($tuesdayEndTime);

        $differenceInTimeInTuesday =  $tuesdayEndTimeToString  - $tuesdayStartTimeToString ; 
        $finalTimeofTuesday = date("H:i:s", $differenceInTimeInTuesday);
        //end for tuesday

        //professor preferred time not less than to 3 units for wednesday
        $wednesdayStartTime = $prefTimeStartWed;
        $wednesdayEndTime = $prefTimeEndWed;

        $wednesdayStartTimeToString = strtotime($wednesdayStartTime);
        $wednesdayEndTimeToString = strtotime($wednesdayEndTime);

        $differenceInTimeInWednesday =  $wednesdayEndTimeToString  - $wednesdayStartTimeToString ; 
        $finalTimeofWednesday = date("H:i:s", $differenceInTimeInWednesday);
        //end for wednesday

        //professor preferred time not less than to 3 units for thursday
        $thursdayStartTime = $prefTimeStartThu;
        $thursdayEndTime = $prefTimeEndThu;

        $thursdayStartTimeToString = strtotime($thursdayStartTime);
        $thursdayEndTimeToString = strtotime($thursdayEndTime);

        $differenceInTimeInThursday =  $thursdayEndTimeToString  - $thursdayStartTimeToString ; 
        $finalTimeofThursday = date("H:i:s", $differenceInTimeInThursday);
        //end for thursday

        //professor preferred time not less than to 3 units for friday
        $fridayStartTime = $prefTimeStartFri;
        $fridayEndTime = $prefTimeEndFri;

        $fridayStartTimeToString = strtotime($fridayStartTime);
        $fridayEndTimeToString = strtotime($fridayEndTime);

        $differenceInTimeInFriday =  $fridayEndTimeToString  - $fridayStartTimeToString ; 
        $finalTimeofFriday = date("H:i:s", $differenceInTimeInFriday);
        //end for friday

        //professor preferred time not less than to 3 units for saturday
        $saturdayStartTime = $prefTimeStartSat;
        $saturdayEndTime = $prefTimeEndSat;

        $saturdayStartTimeToString = strtotime($saturdayStartTime);
        $saturdayEndTimeToString = strtotime($saturdayEndTime);

        $differenceInTimeInSaturday =  $saturdayEndTimeToString  - $saturdayStartTimeToString ; 
        $finalTimeofSaturday = date("H:i:s", $differenceInTimeInSaturday);
        //end for saturday
        
        //checking if the preferred time input is not less than to 3 units
        if($finalTimeInSunday < $finalMinimumTime){

            Toast::title('Please Enter a preferred time greater than 3 units in Sunday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(5);

        //for monday
        }elseif($finalTimeofMonday < $finalMinimumTime){

            Toast::title('Please Enter a preferred time greater than 3 units in Monday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(5);

        //for tuesday
        }elseif($finalTimeofTuesday < $finalMinimumTime){

            Toast::title('Please Enter a preferred time greater than 3 units in Tuesday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(5);

        //for wednesday
        }elseif($finalTimeofWednesday < $finalMinimumTime){

            Toast::title('Please Enter a preferred time greater than 3 units in Wednesday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(5);

        //for thursday
        }elseif($finalTimeofThursday < $finalMinimumTime){

            Toast::title('Please Enter a preferred time greater than 3 units in Thursday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(5);

        //for friday
        }elseif($finalTimeofFriday < $finalMinimumTime){

            Toast::title('Please Enter a preferred time greater than 3 units in Friday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(5);

        }elseif($finalTimeofSaturday < $finalMinimumTime){

            Toast::title('Please Enter a preferred time greater than 3 units in Saturday')
            ->warning()
            ->rightTop()
            ->backdrop()
            ->autoDismiss(5);

        }else{

            //checking if the input of professor availability time is in the scope of the configuration of school hours
            if($prefTimeStartSunConverted < $schTimeStartSun || $prefTimeEndSunConverted > $schTimeEndSun){

                Toast::title('Please Enter Available Schedule Based on your University School Hours in Sunday')
                ->warning()
                ->rightTop()
                ->backdrop()
                ->autoDismiss(5);

            //for monday        
            }elseif($prefTimeStartMonConverted < $schTimeStartMon || $prefTimeEndMonConverted > $schTimeEndMon){

                Toast::title('Please Enter Available Schedule Based on your University School Hours in Monday')
                ->warning()
                ->rightTop()
                ->backdrop()
                ->autoDismiss(5);

            //for tuesday
            }elseif($prefTimeStartTueConverted < $schTimeStartTue || $prefTimeEndTueConverted > $schTimeEndTue){

                Toast::title('Please Enter Available Schedule Based on your University School Hours in Tuesday')
                ->warning()
                ->rightTop()
                ->backdrop()
                ->autoDismiss(5);
        
            //for wednesday
            }elseif($prefTimeStartWedConverted < $schTimeStartWed || $prefTimeEndWedConverted > $schTimeEndWed){

                Toast::title('Please Enter Available Schedule Based on your University School Hours in Wednesday')
                ->warning()
                ->rightTop()
                ->backdrop()
                ->autoDismiss(5);
            
            //for thursday 
            }elseif($prefTimeStartThuConverted < $schTimeStartThu || $prefTimeEndThuConverted > $schTimeEndThu){

                Toast::title('Please Enter Available Schedule Based on your University School Hours in Thursday')
                ->warning()
                ->rightTop()
                ->backdrop()
                ->autoDismiss(5);
            
            //for Friday
            }elseif($prefTimeStartFriConverted < $schTimeStartFri || $prefTimeEndFriConverted > $schTimeEndFri){

                Toast::title('Please Enter Available Schedule Based on your University School Hours in Friday')
                ->warning()
                ->rightTop()
                ->backdrop()
                ->autoDismiss(5);
        
            //for saturday
            }elseif($prefTimeStartSatConverted < $schTimeStartSat || $prefTimeEndSatConverted > $schTimeEndSat){

                Toast::title('Please Enter Available Schedule Based on your University School Hours in Saturday')
                ->warning()
                ->rightTop()
                ->backdrop()
                ->autoDismiss(5);

            }else{

                //checking if the professor entering a valid schedule format
                if($prefTimeStartSun > $prefTimeEndSun){

                    Toast::title('Please Enter a Valid Schedule Format for Sunday.')
                    ->warning()
                    ->rightTop()
                    ->backdrop()
                    ->autoDismiss(5);
                
                //for monday    
                }elseif($prefTimeStartMon > $prefTimeEndMon){
        
                    Toast::title('Please Enter a Valid Schedule Format for Monday.')
                    ->warning()
                    ->rightTop()
                    ->backdrop()
                    ->autoDismiss(5);
                
                //for tuesday
                }elseif($prefTimeStartTue > $prefTimeEndTue){
        
                    Toast::title('Please Enter a Valid Schedule Format for Tuesday.')
                    ->warning()
                    ->rightTop()
                    ->backdrop()
                    ->autoDismiss(5);
                    
                //for wednesday
                }elseif($prefTimeStartWed > $prefTimeEndWed){
        
                    Toast::title('Please Enter a Valid Schedule Format for Wednesday.')
                    ->warning()
                    ->rightTop()
                    ->backdrop()
                    ->autoDismiss(5);
                    
                //for thursday
                }elseif($prefTimeStartThu > $prefTimeEndThu){
        
                    Toast::title('Please Enter a Valid Schedule Format for Thursday.')
                    ->warning()
                    ->rightTop()
                    ->backdrop()
                    ->autoDismiss(5);
            
                //for friday
                }elseif($prefTimeStartFri > $prefTimeEndFri){
        
                    Toast::title('Please Enter a Valid Schedule Format for Friday.')
                    ->warning()
                    ->rightTop()
                    ->backdrop()
                    ->autoDismiss(5);
            
                //for saturday    
                }elseif($prefTimeStartSat > $prefTimeEndSat){
        
                    Toast::title('Please Enter a Valid Schedule Format for Saturday.')
                    ->warning()
                    ->rightTop()
                    ->backdrop()
                    ->autoDismiss(5);
            
                }else{
        
                    $schoolSetuptime = Prof_config::find($id);
                    $schoolSetuptime -> employment = $request -> employment;
                    $schoolSetuptime -> mode = $request -> mode;
                    $schoolSetuptime -> loadUnit = $request -> loadUnit;
                    $schoolSetuptime -> prefTimeStartSun = $request -> prefTimeStartSun;
                    $schoolSetuptime -> prefTimeEndSun = $request -> prefTimeEndSun;
                    $schoolSetuptime -> prefTimeStartMon = $request -> prefTimeStartMon;
                    $schoolSetuptime -> prefTimeEndMon = $request -> prefTimeEndMon;
                    $schoolSetuptime -> prefTimeStartTue = $request -> prefTimeStartTue;
                    $schoolSetuptime -> prefTimeEndTue = $request -> prefTimeEndTue;
                    $schoolSetuptime -> prefTimeStartWed = $request -> prefTimeStartWed;
                    $schoolSetuptime -> prefTimeEndWed = $request -> prefTimeEndWed;
                    $schoolSetuptime -> prefTimeStartThu = $request -> prefTimeStartThu;
                    $schoolSetuptime -> prefTimeEndThu = $request -> prefTimeEndThu;
                    $schoolSetuptime -> prefTimeStartFri = $request -> prefTimeStartFri;
                    $schoolSetuptime -> prefTimeEndFri = $request -> prefTimeEndFri;
                    $schoolSetuptime -> prefTimeStartSat = $request -> prefTimeStartSat;
                    $schoolSetuptime -> prefTimeEndSat = $request -> prefTimeEndSat;
                    $schoolSetuptime -> save();
            
                    Toast::title('Professor Hours Updated Successfully. ')
                    ->success()
                    ->rightTop()
                    ->backdrop()
                    ->autoDismiss(10);
        
                }

            }

        }

        return to_route('prof-save-time');

    }
}

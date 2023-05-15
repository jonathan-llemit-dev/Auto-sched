<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Facades\DB;
use App\Models\Prof_info;
use Illuminate\Support\Facades\File;

class ProfileProfController extends Controller
{
    public function edit(Request $request)
    {
        //getting prof school name
        $schoolInfo = DB::table('prof_infos')->where('id', Auth::user()->id)->value('profSchool');

        //getting prof subject field
        $subjectField = DB::table('subjects')->where('subSchool', $schoolInfo)->distinct()->pluck('subField','subField')->toArray();

        $department = DB::table('departments')->where('schName', $schoolInfo)->pluck('deptName','deptName')->toArray();

        return view('prof.update',[
            'user' => $request->user(),
            'field' => $subjectField,
            'department' => $department,
        ]);

    }

    public function update(ProfProfileRequest $request)
    {
            $professorId = Auth::user()->id;
            
            // $image_path = $request->file('profPic')->store('image', 'public');

            $professorInfo = Prof_info::find($professorId);

            // $file = $professorInfo->schLogo;

            // if (File::exists('storage/'.$file)) {
            //     File::delete('storage/'.$file);
            // }
            // // }else{
            // //     dd('File does not exists. '.$file);
            // // }
           
            $professorInfo = Prof_info::find($professorId);
            $professorInfo->profFName = $request->profFName;
            $professorInfo->profLName = $request->profLName;
            $professorInfo->email = $request->email;
            $professorInfo->contactNumber = $request->contactNumber;
            $professorInfo->profDept = $request->profDept;
            $professorInfo->profField =  $request->profField;
            // $professorInfo->profPic = $image_path;
            $professorInfo->save();

            // $request->user()->fill($request->validated());
            // $request->user()->save();
            
        Toast::success('Your Profile Updated Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return to_route('prof-update');
      
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolInfoRequest;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Facades\Auth;
use App\Models\School_info;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SchoolController extends Controller
{
    public function index()
    {

        $coordinatorId = Auth::user()->id;
        $id = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('id');
        $school = School_info::find($id);

        return view('school.index', ['school' => $school]);

    }

    public function edit()
    {

        $coordinatorId = Auth::user()->id;
        $id = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('id');
        $school = School_info::find($id);

        return view('school.edit', ['school' => $school]);

    }

    public function editLogo()
    {

        $coordinatorId = Auth::user()->id;
        $id = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('id');
        $school = School_info::find($id);

        return view('school.school-logo', ['school' => $school]);

    }

    public function store(SchoolInfoRequest $request)
    {

        $coordinatorId = Auth::user()->id;

        // $image_path = $request->file('schLogo')->store('image', 'public');
        // $schoolInfo->schLogo = $image_path;

        $response = Http::get("https://psgc.gitlab.io/api/regions/".$request->regionCode);
        $region = $response->json('name');

        $response = Http::get("https://psgc.gitlab.io/api/cities-municipalities/".$request->cityCode);
        $city = $response->json('name');

        $response = Http::get("https://psgc.gitlab.io/api/barangays/".$request->barangayCode);
        $barangay = $response->json('name');

        $schoolInfo = School_info::find($coordinatorId);
        $schoolInfo->schName = $request->schName;
        $schoolInfo->email = $request->email;
        $schoolInfo->contactNumber = $request->contactNumber;
        $schoolInfo->region = $region;
        $schoolInfo->regionCode = $request->regionCode;
        $schoolInfo->city = $city;
        $schoolInfo->cityCode = $request->cityCode;
        $schoolInfo->barangay = $barangay;
        $schoolInfo->barangayCode = $request->barangayCode;
        $schoolInfo->street = $request->street;
        $schoolInfo->save();
       
        Toast::title('School Profile Updated Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return to_route('school.index');

    }

    public function imageStore(Request $request)
    {

        $request->validate([
            'schLogo' => ['required'],
        ]);

        // $schoolInfo = $request->file('schLogo')->store('image', 'public');
        // $coordinatorId = Auth::user()->id;
        // DB::table('school_infos')->where('coordinatorId',  $coordinatorId)->update(['schLogo' => $schoolInfo ]);

        $coordinatorId = Auth::user()->id;

        $image_path = $request->file('schLogo')->store('image', 'public');
       
        $schoolInfo = School_info::find($coordinatorId);

        $file = $schoolInfo->schLogo;

        if (File::exists('storage/'.$file)) {
            File::delete('storage/'.$file);
        }
        // }else{
        //     dd('File does not exists. '.$file);
        // }

        $schoolInfo->schLogo = $image_path;
        $schoolInfo->save();

        Toast::title('School Logo Updated Sucessfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return to_route('school.index');
    }

    public function setupSchool()
    {

        $coordinatorId = Auth::user()->id;
        $id = DB::table('school_infos')->where('coordinatorId', $coordinatorId)->value('id');
        $school = School_info::find($id);

        return view('school.setup-school', ['school' => $school]);
        
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRegReq;
use App\Http\Requests\CoorRegReq;
use App\Models\Administrator;
use App\Models\Coor_info;
use App\Models\School_config;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use ProtoneMedia\Splade\Facades\Toast;
use App\Models\School_info;

class RegisteredUserController extends Controller
{
    
    public function create()
    {
        
        return view('auth.register');

    }

    public function store(AdminRegReq $request)
    {
        $request->validate([
            
            'email' => ['unique:'.Administrator::class],
            'contactNumber' => ['unique:'.Administrator::class],
            
        ]);

        $response = Http::get("https://psgc.gitlab.io/api/regions/".$request->regionCode);
        $region = $response->json('name');

        // $response = Http::get("https://psgc.gitlab.io/api/regions/".$request->region."/cities-municipalities/".$request->city);
        // $city = $response->json('name');

        $response = Http::get("https://psgc.gitlab.io/api/cities-municipalities/".$request->cityCode);
        $city = $response->json('name');

        // $response = Http::get("https://psgc.gitlab.io/api/cities-municipalities/".$request->city."/barangays/".$request->barangay);
        // $barangay = $response->json('name');

        $response = Http::get("https://psgc.gitlab.io/api/barangays/".$request->barangayCode);
        $barangay = $response->json('name');
        
        $user = Administrator::create([
            'adminFName' => $request->coorFName,
            'adminMName' => $request->coorMName,
            'adminLName' => $request->coorLName,
            'email' => $request->email,
            'contactNumber' => $request->contactNumber,
            'region' => $region,
            'regionCode' => $request->regionCode,
            'city' => $city,
            'cityCode' => $request->cityCode,
            'barangay' => $barangay,
            'barangayCode' => $request->barangayCode,
            'street' => $request->street,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $request->session()->regenerate();

        Toast::title('Registered Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        $adminId = Auth::user()->id;

        School_info::create([
            'coordinatorId' => $adminId,
        ]);

        School_config::create([
            'coordinatorId' => $adminId,
        ]);

        return redirect(RouteServiceProvider::HOME);
    }
}

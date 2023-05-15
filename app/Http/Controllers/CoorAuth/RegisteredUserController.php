<?php

namespace App\Http\Controllers\CoorAuth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Coor_info;
use App\Models\Prof_info;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('coor.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'profFName' => ['required', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'profLName' => ['required', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'contactNumber' => ['required', 'regex:/^[\d+\+]*$/', 'min:7', 'max:16', 'unique:'.Coor_info::class],
            'email' => ['required', 'email', 'max:40', 'unique:'.Coor_info::class],
            'password' => ['required', 'confirmed', 'regex:/^(?=.*[A-Z]{1,})(?=.*[a-z]{1,})(?=.*[0-9]{1,})(?=.*[~!@#$%^&*()\-_=+{};:,<.>]{1,}).{8,}$/'],
        ]);

        $coor = Coor_info::create([
            'coorFName' => $request->profFName,
            'coorLName' => $request->profLName,
            'contactNumber' => $request->contactNumber,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($coor));

        Auth::guard('prof')->login($coor);

        return redirect(RouteServiceProvider::COOR_HOME);
    }
}

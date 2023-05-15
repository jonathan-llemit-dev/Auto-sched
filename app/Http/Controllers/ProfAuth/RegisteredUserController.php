<?php

namespace App\Http\Controllers\ProfAuth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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
        return view('prof.auth.register');
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
            'contactNumber' => ['required', 'regex:/^[\d+\+]*$/', 'min:7', 'max:16', 'unique:'.Prof_info::class],
            'email' => ['required', 'email', 'max:40', 'unique:'.Prof_info::class],
            'password' => ['required', 'confirmed', 'regex:/^(?=.*[A-Z]{1,})(?=.*[a-z]{1,})(?=.*[0-9]{1,})(?=.*[~!@#$%^&*()\-_=+{};:,<.>]{1,}).{8,}$/'],
        ]);

        $prof = Prof_info::create([
            'profFName' => $request->profFName,
            'profLName' => $request->profLName,
            'contactNumber' => $request->contactNumber,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($prof));

        Auth::guard('prof')->login($prof);

        return redirect(RouteServiceProvider::PROF_HOME);
    }
}

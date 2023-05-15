<?php

namespace App\Http\Controllers\ProfAuth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('prof.auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        if (! Auth::guard('prof')->validate([
            'email' => $request->prof()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('prof.auth.password'),
            ]);
        }

        $request->session()->put('prof.auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::PROF_HOME);
    }
}

<?php

namespace App\Http\Controllers\CoorAuth;

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
        return view('coor.auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        if (! Auth::guard('coor')->validate([
            'email' => $request->prof()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('coor.auth.password'),
            ]);
        }

        $request->session()->put('coor.auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::COOR_HOME);
    }
}

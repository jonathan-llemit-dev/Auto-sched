<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use ProtoneMedia\Splade\Facades\Toast;

class PasswordCoorController extends Controller
{
    public function show(){

        return view('auth.password');

    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        Toast::title('Password Change Successfully')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return back()->with('status', 'password-updated');
    }
}

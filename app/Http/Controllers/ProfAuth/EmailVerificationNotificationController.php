<?php

namespace App\Http\Controllers\ProfAuth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->prof()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::PROF_HOME);
        }

        $request->prof()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}

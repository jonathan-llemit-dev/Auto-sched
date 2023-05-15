<?php

namespace App\Http\Controllers\ProfAuth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        if ($request->prof()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::PROF_HOME.'?verified=1');
        }

        if ($request->prof()->markEmailAsVerified()) {
            event(new Verified($request->prof()));
        }

        return redirect()->intended(RouteServiceProvider::PROF_HOME.'?verified=1');
    }
}

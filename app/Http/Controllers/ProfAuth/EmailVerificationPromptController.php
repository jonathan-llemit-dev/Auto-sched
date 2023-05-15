<?php

namespace App\Http\Controllers\ProfAuth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        return $request->prof()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::PROF_HOME)
                    : view('prof.auth.verify-email');
    }
}

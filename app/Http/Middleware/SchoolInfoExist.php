<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SchoolInfoExist
{
    /* Handle an incoming request.
     @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next */

    public function handle(Request $request, Closure $next): Response
    {
        $adminId = Auth::user()->id;

        if (DB::table('school_infos')->where('schName', null)->where('coordinatorId', $adminId)->exists()) 
        {
            // return to_route('school.index');
            return redirect('/setup-school');
        }
        else
        {
            return $next($request);
        }
    }
}

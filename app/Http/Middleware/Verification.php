<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Verification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->request == true) {
            // return redirect()->route('pending-verification');
            return $next($request);
        }
        if (Auth::user()->request == false) {
            // return $next($request);

            return redirect()->route('home');
        }
    }
}

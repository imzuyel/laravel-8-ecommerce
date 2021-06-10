<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = null)
    {

        //User backto login
        if (Auth::guard($guard)->check() && Auth::user()->role->id == 3) {
            if (\Request::segment(1) === 'app') {
                Auth::logout();
                toastr()->error('You can\'n access this page');
                return redirect()->route('login');
            }
        }
        if (Auth::guard($guard)->check() && Auth::user()->role->id == 1 || Auth::guard($guard)->check() && Auth::user()->role->id == 2) {
            return redirect()->route('app.dashboard');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 3) {
            return redirect()->route('user.index');
        } else {
            return $next($request);
        }
    }
}

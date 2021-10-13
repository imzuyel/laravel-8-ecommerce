<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    { //User backto login
        if (Auth::user()->role->id == 3) {
            if (url()->current() === url()->current()) {
                Auth::logout();
                toastr()->error('You can\'n access this page');
                return redirect()->route('login');
            }
        }
        return $next($request);
    }
}

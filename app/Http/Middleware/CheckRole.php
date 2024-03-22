<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */

    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || (Auth::user()->role != 1 && Auth::user()->role != 2)) {
            return redirect('/email/verify');
        }

        return $next($request);
    }

}

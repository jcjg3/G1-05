<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       /* if (Auth::guard($guard)->check()) {
            $request->session()->put('key', 'value');
            return response()->json(['error' => 'Already authenticated.'], 400);

        }*/

        return $next($request);
    }
}

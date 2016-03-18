<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use App\User;

class Authenticate
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
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response(view('errors.401')->render(), 401);
            } else {
                return redirect()->guest('login');
            }
        }
        else {
            if(!Auth::User()->active) {
                return response(view('errors.401')->render(), 401);
            }
            $user = User::find(Auth::User()->id);
            $route_name = $request->route()->getName();

            if($user->checkOperation($route_name))
                return $next($request);

            return response(view('errors.401')->render(), 401);

        }
    }
}

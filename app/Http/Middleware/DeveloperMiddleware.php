<?php

namespace App\Http\Middleware;

use Closure;

class DeveloperMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(\Auth::User()!== NULL) {

            if (\Auth::user()->user_type == 1) {
                return $next($request);
            }

            return redirect('/');
        }
        
        abort(403, "Lo sentimos, pero no puedes acceder a esta página");
    }
}

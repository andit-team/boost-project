<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class Authenticate
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
        if (!Sentinel::check()) {
            return redirect('login')->with('error','Sorry you are not loggedin.');
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
class AdminAccess
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
        if (Sentinel::getUser()->type != 'admin') {
            return redirect('/');//->with('error','Sorry you are not loggedin.');
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
class CustomerAccess
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
        if (Sentinel::getUser()->type != 'customers') {
            return redirect('/');//->with('error','Sorry you are not loggedin.');
        }
        return $next($request);
    }
}

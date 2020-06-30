<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
class MerchantAccess
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
        if (Sentinel::getUser()->type == 'merchant' || Sentinel::getUser()->type == 'admin') {
            return $next($request);
        }
        return redirect('/');//->with('error','Sorry you are not loggedin.');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Baazar;
class IsMerchantActive
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
        if(Baazar::seller()->status == 'Active'){
            return $next($request);
        }
        return response(view('merchant.not-to-access'));
    }
}

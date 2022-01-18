<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaidStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()->hasRole('SuperAdmin')) {
            $status = Auth::user()->hasRole('Admin') ? Auth::user()->org->pay_status : Auth::user()->company->pay_status;
            if (isset($status) && $status == 1) {
                return redirect()->route('unpaid');
            }
        }

        return $next($request);
    }
}

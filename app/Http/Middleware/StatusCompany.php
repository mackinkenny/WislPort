<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusCompany
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
        if (!Auth::user()->hasRole('SuperAdmin')){
        $status = Auth::user()->hasRole('Admin') ? Auth::user()->org->status : Auth::user()->company->status;
        if (isset($status) && $status == 1) {
            return redirect()->route('disable');
        }
        }

        return $next($request);
    }
}

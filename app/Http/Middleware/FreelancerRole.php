<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class FreelancerRole
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
         $user = Auth::guard('api')->user();
         
        if($user->role != 1) {
           return response()->json(['error' => 'You are not a freelancer to perform this action'], 401);
        }
        return $next($request);
    }
}

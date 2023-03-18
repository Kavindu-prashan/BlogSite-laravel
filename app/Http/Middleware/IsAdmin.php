<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 * Summary of IsAdmin
 */
class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()) {
            if(auth()->user()->IsAdmin() == 'admin'){
                //redirect to admin page
                return $next($request);
            }else {
                //redirect to user page
                return back();
            }
        }
        
           
    }

    /**
     */
    public function __construct() {
    }
}

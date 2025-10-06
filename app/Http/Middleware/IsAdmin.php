<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
      // dd(auth()->user()->is_admin==1);
       if (Auth::user()->is_admin==1)
        {
        return $next($request);
        } else {
        return redirect('/login')->with('error','You have no Admin access!');
        }
    }
}

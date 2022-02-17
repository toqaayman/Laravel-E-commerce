<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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

        if(auth()->user()->admin == 1){
            return $next($request);
        } elseif (auth()->user()->admin == 2) {
            return $next($request);
        }
        return redirect('/')->with('error','You have not admin access');
    }
}

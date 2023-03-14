<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checklogin
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
        if(session()->missing("LOGGED_IN")){
            echo "you are not logged in";
            return redirect("login");
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LecturerMiddlware
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
        //CUSTOM MIDDLEWARE SET FOR LECTURER ROUTE
        if(auth()->user()->role == 'lecturer'){

            return $next($request);
        }
        else{
            return redirect()->back();
        }
    }
}


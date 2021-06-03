<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentMiddleware
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
        //CUSTOM MIDDLEWARE SET FOR STUDENT ROUTE
        if(auth()->user()->role == 'student'){

            return $next($request);
        }
        else{
            return redirect()->back();
        }
    }
}

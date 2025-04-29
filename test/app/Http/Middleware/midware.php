<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;



class midware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response{
    {
    
        if (!session()->has('email')) {
            
            return redirect()->route('login');
        }

        // echo "vijay samrat";
        return $next($request);

    }
    }
}
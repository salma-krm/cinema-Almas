<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
  
    // public function handle($request, Closure $next)
    // {
    //     if (Auth::check() && Auth::user()->roles->name === 'admin') {
    //         return $next($request);
    //     }
    
    //     abort(404); 
    // }
    
}

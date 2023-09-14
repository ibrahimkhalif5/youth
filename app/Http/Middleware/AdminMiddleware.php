<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $userRole = Auth::user()->role;

        if ($userRole === 'super_admin') {
            return $next($request);
        }elseif ($userRole === 'admin') {
            return $next($request);
        } 
        else {
            return redirect('/user/home');
        }
    }
    
    
    
    
    
    
}
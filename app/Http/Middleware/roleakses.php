<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class roleakses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if(auth()->user()->role == $role){
            return $next($request);
        }elseif(auth()->user()->role === 'admin') {
            return redirect('admin/dashboard');
        } elseif (auth()->user()->role === 'pengguna') {
            return redirect('pengguna/dashboard');
        }

    }
}

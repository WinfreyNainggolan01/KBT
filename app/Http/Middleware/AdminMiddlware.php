<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if (!auth()->guard('admin')->check()) {
    //         return redirect('/login');
    //     }
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna terautentikasi dan apakah role-nya admin
        if ($request->session()->get('user.role') !== 'admin') {
            return redirect('/login')->withErrors('You do not have access to this page.');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware\UserManagement;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role == 'admin') {
            return $next($request);
        }
        abort(403, 'Akses ditolak. Anda tidak memiliki akses untuk mengakses halaman ini.');
    }
}

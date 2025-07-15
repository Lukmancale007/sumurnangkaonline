<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            // $user = Auth::user();

            // if ($user->role_id === 1) {
            //     return redirect()->route('admin.home');
            // } elseif ($user->role_id === 2) {
            //     return redirect()->route('user.home');
            // } elseif ($user->role_id === 3) {
            //     return redirect()->route('asrama.home');
            // } elseif ($user->role_id === 4) {
            //     return redirect()->route('kamtib.home');
            // }
            //  // // Jika pengguna belum login, arahkan ke halaman login
            // return redirect()->route('login');
        }

        if (Auth::user()->role->name !== $role) {
            // Jika peran pengguna tidak sesuai, arahkan ke halaman 403 atau halaman khusus
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        return $next($request);
    }

}


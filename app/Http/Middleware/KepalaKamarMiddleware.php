<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KepalaKamarMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user login via guard kepala kamar
        if (Auth::guard('kepalakamar')->check()) {
            return $next($request);
        }

        return redirect()->route('login')->withErrors([
            'email' => 'Anda tidak memiliki akses sebagai Kepala Kamar.',
        ]);
    }
}
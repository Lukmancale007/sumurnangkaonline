<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\KepalaKamar;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Coba login dari users (admin, asrama, dsb)
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();

            $role = Auth::user()->role->name;

            return match ($role) {
                'admin' => redirect()->intended('/admin/home'),
                'asrama' => redirect()->intended('/asrama/home'),
                'bendahara' => redirect()->intended('/bendahara/laporan-gaji'),
                'kamtib' => redirect()->intended('/kamtib/izinsantri'),
                default => redirect('/'),
            };
        }

        // Jika gagal, coba login sebagai kepala kamar
        $kamarCredentials = $request->only('email', 'password'); // pakai email = username

        if (Auth::guard('kepalakamar')->attempt(['username' => $kamarCredentials['email'], 'password' => $kamarCredentials['password']])) {
            $request->session()->regenerate();

            return redirect()->intended('/kepalakamar/home');
        }

        return back()->withErrors([
            'email' => 'Email/Username atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        Auth::guard('kepalakamar')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
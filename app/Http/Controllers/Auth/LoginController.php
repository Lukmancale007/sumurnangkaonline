<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function redirectTo()
    {
        // Dapatkan pengguna yang sedang login
        $user = Auth::user();
        // Arahkan pengguna ke halaman sesuai peran mereka
        if ($user->role_id === 1) {
            // Admin
            return 'admin/home';
        } elseif ($user->role_id === 2) {
            // User
            return 'user/home';
        } elseif ($user->role_id === 3) {
            // Asrama
            return 'asrama/home';
        } elseif ($user->role_id === 4) {
            // Kamtib
            return 'kamtib/home';
        }

        // Jika peran tidak sesuai, arahkan ke halaman default
        return '/home';
    }

}

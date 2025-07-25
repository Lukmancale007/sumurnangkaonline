<?php

namespace App\Http\Controllers\Admin;

use App\Models\Santri;
use App\Models\IzinSantri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'santri' => Santri::count(),
            'izinsantri' => IzinSantri::count(),
        ];

        return view('admin.home', $data);
    }
}

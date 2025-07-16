<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::with('kepalaKamar')->get();

        return view('kamar.index', compact('kamars'));
    }

}

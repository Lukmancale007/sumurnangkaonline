<?php

namespace App\Http\Controllers\Website;

use App\Models\buletin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuletinController extends Controller
{
  public function index()   {
    $buletin = buletin::all();

    return view('admin.buletin.index', compact('buletin'));
    }
    public function create() {
        $buletin = buletin::all();
        return view('admin.buletin.tambah', compact('buletin'));
    }
    public function store(Request $request){


        // $pdf = $request->file('image');
        // $pdf->storeAs('public/buletin',$pdf->hashName());
        $buletin = buletin::create([
            'pdf' =>$request->pdf,
            'edisi' =>$request->edisi,
            'tema'  =>$request->tema
        ]);
        // buletin::create($request->all());

        $request->validate([
            'image' => 'required|file|mimes:pdf|max:2048',
        ]);
        if ($request->hasfile('image') && $request->file('image')->isValid()) {
            $filePath = $request->file('image')->store('images','public');

        }
        return redirect()->route('admin.buletin.tambah');

    }
}

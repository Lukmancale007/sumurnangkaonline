<?php

namespace App\Http\Controllers;
use App\Models\Umana;
use Illuminate\Http\Request;

class UmanaController extends Controller
{
    public function getUmana(Request $request)
    {
        $nmr = $request->get('nis');
        $umana = Umana::where('nis', $nmr)->first(); // Ambil data berdasarkan NIS

        if ($umana) {
            return response()->json($umana); // Kirim data dalam format JSON
        } else {
            return response()->json(['message' => 'Data tidak ditemukan'], 404); // Respon jika tidak ditemukan
        }
    }
}
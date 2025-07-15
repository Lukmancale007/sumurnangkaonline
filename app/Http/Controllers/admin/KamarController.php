<?php

namespace App\Http\Controllers\Admin;
use App\Models\Kamar;
use App\Models\asrama;
use App\Models\kepalakamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KamarController extends Controller
{
   public function getKetua($id)
{
    $kamar = Kamar::with('ketuaKamar')->find($id);

    if ($kamar && $kamar->ketuaKamar) {
        return response()->json([
            'id' => $kamar->ketuaKamar->id,
            'nama' => $kamar->ketuaKamar->nama,
        ]);
    }

    return response()->json([
        'id' => null,
        'nama' => 'Belum ada ketua kamar',
    ]);
}
}

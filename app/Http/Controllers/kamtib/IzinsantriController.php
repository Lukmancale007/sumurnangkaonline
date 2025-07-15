<?php

namespace App\Http\Controllers\kamtib;

use App\Models\Asrama;
use App\Models\Santri;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\IzinSantri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IzinsantriController extends Controller
{
    public function index(){
        $santri = Santri::all();
        $asrama = Asrama::all();
        $izinsantri = IzinSantri::all();

        return view('kamtib.perizinan.index', compact('santri', 'asrama','izinsantri'));
    }
    public function create()   {
        //
        $santris = Santri::whereHas('izinsantri')->get();
       $asrama = Asrama::all();
        return view('kamtib.perizinan.tambah', compact('asrama','santri'));
    }

    public function store(Request $request) {


        // $santri= Santri::all();
        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());
        // dua baris dibawah ini kode untuk menentukan aktif atau tidak
        $izin_santri = IzinSantri::create($request->all());

        return redirect()->route('kamtib.perizinan.index')->with('success', 'Alhamdulillah Data Santri iZin Berhasil Ditambahkan');
    }

    public function generatePDF($id)
    {
        // Data yang akan dikirimkan ke view
        $data = [
            'title' => 'Contoh Generate PDF di Laravel',
            'date' => date('m/d/Y'),
            'content' => 'Ini adalah contoh konten PDF yang dibuat dengan Laravel.'
        ];
        $izin_santri = IzinSantri::find($id);
        // Load view dan kirim data ke view
        $pdf = PDF::loadView('kamtib.perizinan.suratizinPDF', $data,  ['izinSantri' => $izin_santri]) ->setPaper('a5', 'portrait');;

        // Simpan atau langsung tampilkan PDF
        // return $pdf->download('izin_santri_a5.pdf'); // Untuk download langsung
        return $pdf->stream(); // Untuk ditampilkan di browser
    }
}

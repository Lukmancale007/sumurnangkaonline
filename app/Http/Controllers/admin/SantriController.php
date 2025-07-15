<?php

namespace App\Http\Controllers\Admin;
use id;
use App\Models\asrama;
use App\Models\Santri;
use App\Models\Kamar;
use App\Models\kepalakamar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\ModelStatus\Status;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SantriController extends Controller
{
    public function index(Request $request)
    {
        $query = Santri::query();

        // Filter gender hanya jika ada dan bukan 'semua'
        if ($request->has('gender') && in_array($request->gender, ['putra', 'putri'])) {
            $query->where('gender', $request->gender);
        }

        $santri = $query->paginate(10);
        $asrama = Asrama::all();
        $jumlahPutra = Santri::where('gender', 'putra')->count();
        $jumlahPutri = Santri::where('gender', 'putri')->count();
        $santrinonactive = Status::where('name', 'non-aktif')->count();
        $kamars = Kamar::all();

        return view('admin.santri.index', compact(
            'santri',
            'asrama',
            'kamars',
            'jumlahPutra',
            'jumlahPutri',
            'santrinonactive'
        ));
    }

    public function create()
    {
        //

        $kamars = Kamar::all();
        return view('create', compact('kamars'));
    }

    public function store(Request $request)
    {
        // //
        // Santri::create($request->all());
        $request->validate([
            'gender' => 'required|in:putra,putri',
        ]);
        // $santri= Santri::all();
        $image = $request->file('image');
        $image->storeAs('public/images', $image->hashName());
        // dua baris dibawah ini kode untuk menentukan aktif atau tidak
        $santri = Santri::create([
            'image' => $image->hashName(),
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kamar_id' => $request->kamar_id,
            'alamat' => $request->alamat,
            'ayah' => $request->ayah,
            'ibu' => $request->ibu,
            'gender' => $request->input('gender')
        ]);
        $santri->setStatus('aktif');
        // ini batasnya okee
        //create product

        $request->validate([
            'image' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',



        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Simpan file di storage/app/public/uploads
            $filePath = $request->file('image')->store('images', 'public');
        }

        Santri::create($request->only('nama', 'kamar_id'));

        return back()->with('success', 'Alhamdulillah Data Santri Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        //
        $santri = Santri::find($id);
        $asrama = Asrama::all();
        return view('admin.santri.edit', compact('santri', 'asrama'));
    }

    public function update(Request $request, $id)
    {
        //
        Santri::find($id)->update($request->all());
        return redirect()->route('santri.index')->with('success', 'Alhamdulillah Data Santri Berhasil Diubah');
    }
    public function delete(Request $request, $id): RedirectResponse
    {
        $santri = Santri::findOrFail($id);

        $santri->delete($request->all());

        return back()->with('success', 'Data Santri berhasil dihapus');
    }

    public function show(string $id)
    {
        $santri = Santri::findOrFail($id);
        return view('admin.santri.show', compact('santri'));
    }

    public function search(Request $request)
    {

        if ($request->has('search')) {
            $santri = Santri::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $santri = Santri::all();
        }

        return view('admin.santri.index', ['santri' => $santri]);
        // return back ();
    }
}
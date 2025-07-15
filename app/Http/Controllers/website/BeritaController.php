<?php

namespace App\Http\Controllers\website;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.index', compact('berita'));
    }
    public function create()
    {
        return view('admin.berita.tambah');
    }
    public function store(Request $request)
    {
        dd($request->all());

        // $user = User::create($request->all());
        $image = $request->file('gambar');
        $image->storeAs('public/users', $image->hashName());
        $berita = Berita::create([
            'gambar' => $image->hashName(),
            'judul' => $request->judul,
            'tanggal_berita' => $request->tanggal_berita,
            'content' => $request->content,
            'penulis' => $request->penulis
        ]);
        $request->validate([
            'gambar' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',

        ]);

        if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
            // Simpan file di storage/app/public/uploads
            $filePath = $request->file('gambar')->store('beritas', 'public');
        }
        // return redirect()->route('datapengguna.index')->with('success', 'ata Pengguna berhasil ditambahkan');
        return back();
    }





    public function berita()
    {
        $latestNews = Berita::latest()->first();
        $otherNews = Berita::where('id', '!=', $latestNews->id)->get();
        $berita = Berita::all();
        return view('website.berita.index', compact('latestNews', 'otherNews', 'berita'));
    }

    public function show(string $slug)
    {

        // Mencari berita berdasarkan slug
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $recentberita = Berita::all();
        return view('website.berita.show', compact('berita', 'recentberita')); // Kirim data berita ke view
    }
}
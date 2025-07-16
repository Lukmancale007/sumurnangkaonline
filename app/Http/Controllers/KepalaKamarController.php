<?php



namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\KepalaKamar;
use Illuminate\Http\Request;

class KepalaKamarController extends Controller
{
    public function index()
    {
        $data = KepalaKamar::with('kamar')->get();
        return view('kepala_kamar.index', compact('data'));
    }

    public function create()
    {
        $kamars = Kamar::whereNull('kepala_kamar_id')->get();
        return view('kepala_kamar.create', compact('kamars'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kamar_id' => 'required|exists:kamars,id',
        ]);

        $username = strtolower(str_replace(' ', '_', $validated['nama']));
        $original = $username;
        $i = 1;
        while (KepalaKamar::where('username', $username)->exists()) {
            $username = $original . '_' . $i++;
        }

        $kepalaKamar = KepalaKamar::create([
            'nama' => $validated['nama'],
            'username' => $username,
            'kamar_id' => $validated['kamar_id'],
        ]);

        $kamar = Kamar::find($validated['kamar_id']);
        $kamar->kepala_kamar_id = $kepalaKamar->id;
        $kamar->save();

        return redirect()->route('kepala_kamar.index')->with('success', 'Kepala kamar berhasil disimpan');
    }
}
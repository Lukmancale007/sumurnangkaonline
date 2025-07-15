<?php

// app/Http/Controllers/IzinController.php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\IzinUmana;

class IzinUmanaController extends Controller
{
    public function create()
    {
        $izin = IzinUmana::with('umana')->latest()->get();
        return view('bendahara.keterangan.Formizin',compact('izin'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nmr' => 'required',
        'tanggal' => 'required|date',
        'shift' => 'required|array',
    ]);

    foreach ($request->shift as $shift) {
        IzinUmana::create([
            'nmr' => $request->nmr,
            'tanggal' => $request->tanggal,
            'shift' => $shift,
            'keterangan' => $request->keterangan,
        ]);
    }

    return redirect()->back()->with('success', 'Izin berhasil disimpan.');
    }
    public function edit($id)
    {
        $izin = IzinUmana::findOrFail($id);
        return view('bendahara.keterangan.edit', compact('izin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nmr' => 'required',
            'tanggal' => 'required|date',
            'shift' => 'required',
        ]);

        $izin = IzinUmana::findOrFail($id);
        $izin->update([
            'nmr' => $request->nmr,
            'tanggal' => $request->tanggal,
            'shift' => $request->shift,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('izin.update')->with('success', 'Izin berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $izin = IzinUmana::findOrFail($id);
        $izin->delete();

        return redirect()->back()->with('success', 'Izin berhasil dihapus.');
    }
}


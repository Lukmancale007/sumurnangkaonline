<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatapenggunaController extends Controller
{
    public function index()
    {
        $role = Role::all();
        $user = User::with('role')->paginate(10); //untuk memanggil isi role dari database role
        return view('admin.datapengguna.index', compact('user', 'role'));
    }

    public function create()
    {
        return view('admin.datapengguna.tambah');
    }
    public function store(Request $request)
    {
        // $user = User::create($request->all());
        $image = $request->file('image');
        $image->storeAs('public/users', $image->hashName());
        $user = User::create([
            'image' => $image->hashName(),
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => $request->password
        ]);
        $request->validate([
            'image' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',

        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Simpan file di storage/app/public/uploads
            $filePath = $request->file('image')->store('users', 'public');
        }
        // return redirect()->route('datapengguna.index')->with('success', 'Data Pengguna berhasil ditambahkan');
        return back();
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.datapengguna.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('datapengguna.index')->with('success', 'Data Pengguna berhasil diupdate');
    }
    public function delete(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete($request->all());
        return redirect()->route('datapengguna.index')->with('success', 'Data Pengguna berhasil dihapus');
    }
}

@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Kepala Kamar</h3>
    <form action="{{ route('kepala_kamar.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Kepala Kamar</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Pilih Kamar</label>
            <select name="kamar_id" class="form-select" required>
                @foreach($kamars as $kamar)
                <option value="{{ $kamar->id }}">{{ $kamar->nama_kamar }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

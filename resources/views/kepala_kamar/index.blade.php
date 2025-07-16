@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Daftar Kepala Kamar</h3>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('kepala_kamar.create') }}" class="btn btn-primary mb-3">+ Tambah Kepala Kamar</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Kamar</th>
                <th>Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $i => $item)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->kamar->nama_kamar ?? '-' }}</td>
                <td>{{ $item->created_at->format('d M Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data kepala kamar</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

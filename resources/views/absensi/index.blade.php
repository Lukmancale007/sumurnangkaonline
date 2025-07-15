@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Umana</h3>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>NMR</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($umana as $u)
            <tr>
                <td>{{ $u->nmr }}</td>
                <td>{{ $u->nama }}</td>
                <td>{{ $u->jabatan }}</td>
                <td>
                    <a href="{{ route('umana.jadwal.edit', $u->nmr) }}" class="btn btn-sm btn-primary">
                        Atur Jadwal Shift
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

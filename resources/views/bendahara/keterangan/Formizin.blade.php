@extends('layout.sidebar')
@section('konten')
<form action="{{ route('izin.store') }}" method="POST">
    @csrf

    <label for="nmr">NMR:</label>
    <input type="text" name="nmr" required><br>

    <label for="tanggal">Tanggal Izin:</label>
    <input type="date" name="tanggal" required><br>

    <label>Shift:</label><br>
    <input type="checkbox" name="shift[]" value="shift_1"> Shift 1<br>
    <input type="checkbox" name="shift[]" value="shift_2"> Shift 2<br>

    <label for="keterangan">Keterangan:</label><br>
    <textarea name="keterangan"></textarea><br>

    <button type="submit">Simpan</button>
</form>


<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>NMR</th>
            <th>Tanggal</th>
            <th>Shift</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($izin as $data)
        <tr>
            <td>{{ $data->nmr }}</td>
            <td>{{ $data->tanggal }}</td>
            <td>{{ $data->shift }}</td>
            <td>{{ $data->keterangan }}</td>
            <td>
                <a href="{{ route('izin.edit', $data->id) }}">Edit</a>
                <form action="{{ route('izin.destroy', $data->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

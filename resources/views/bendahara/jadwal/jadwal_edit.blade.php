@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Pengaturan Jadwal Shift: {{ $umana->nama }} ({{ $umana->nmr }})</h3>
    <form method="POST" action="{{ route('umana.jadwal.update', $umana->nmr) }}">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Shift 1</th>
                    <th>Shift 2</th>
                </tr>
            </thead>
            <tbody>
                @foreach (["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"] as $hari)
                <tr>
                    <td>{{ $hari }}</td>
                    <td>
                        <input type="checkbox" name="jadwal[{{ $hari }}][shift_1]" value="1" {{
                            $existingJadwal->where('hari', $hari)->where('shift', 'shift_1')->count() ? 'checked' : ''
                        }}>
                    </td>
                    <td>
                        <input type="checkbox" name="jadwal[{{ $hari }}][shift_2]" value="1" {{
                            $existingJadwal->where('hari', $hari)->where('shift', 'shift_2')->count() ? 'checked' : ''
                        }}>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Simpan Jadwal</button>
    </form>
</div>
@endsection

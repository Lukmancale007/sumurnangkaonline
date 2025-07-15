<form action="{{ route('izin.update', $izin->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nmr">NMR:</label>
    <input type="text" name="nmr" value="{{ $izin->nmr }}" required><br>

    <label for="tanggal">Tanggal Izin:</label>
    <input type="date" name="tanggal" value="{{ $izin->tanggal }}" required><br>

    <label>Shift:</label><br>
    <select name="shift" required>
        <option value="shift_1" {{ $izin->shift == 'shift_1' ? 'selected' : '' }}>Shift 1</option>
        <option value="shift_2" {{ $izin->shift == 'shift_2' ? 'selected' : '' }}>Shift 2</option>
    </select><br>

    <label for="keterangan">Keterangan:</label><br>
    <textarea name="keterangan">{{ $izin->keterangan }}</textarea><br>

    <button type="submit">Update</button>
</form>

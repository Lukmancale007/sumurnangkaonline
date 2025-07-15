
<div class="container">
    <h4>Input Data Santri</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="/santri">
        @csrf

        <div class="mb-3">
            <label>Nama Santri</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Pilih Kamar</label>
            <select name="kamar_id" id="kamar_id" class="form-control" required>
                <option value="">-- Pilih Kamar --</option>
                @foreach($kamars as $kamar)
                    <option value="{{ $kamar->id }}">{{ $kamar->nama_kamar }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Ketua Kamar</label>
            <input type="text" id="nama_ketua" class="form-control" readonly>
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>

    <script>
        document.getElementById('kamar_id').addEventListener('change', function () {
            const kamarId = this.value;
            if (!kamarId) return;

            fetch(`/api/kamar/${kamarId}/ketua`)
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    document.getElementById('nama_ketua').value = data.nama ?? 'Tidak ditemukan';
                })
                .catch(err => {
                    console.error("Fetch error:", err);
                });
        });
    </script>
</body>
</html>




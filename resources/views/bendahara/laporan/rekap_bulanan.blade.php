@extends('layout.sidebar')
@section('konten')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        Manajemen Jadwal
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Manajemen Jadwal</li>
                    </ul>
                </div>
                <!--end::Page title-->

                <form method="GET" class="d-flex" style="gap: 1rem">
                    <select name="bulan" class="form-control" required>
                        @for ($m = 1; $m <= 12; $m++) <option value="{{ str_pad($m, 2, '0', STR_PAD_LEFT) }}" {{
                            $bulan==str_pad($m, 2, '0' , STR_PAD_LEFT) ? 'selected' : '' }}>
                            {{ DateTime::createFromFormat('!m', $m)->format('F') }}
                            </option>
                            @endfor
                    </select>

                    <select name="tahun" class="form-control" required>
                        @for ($y = date('Y') - 2; $y <= date('Y') + 1; $y++) <option value="{{ $y }}" {{ $tahun==$y
                            ? 'selected' : '' }}>{{ $y }}</option>
                            @endfor
                    </select>

                    <button class="btn btn-primary" type="submit">Tampilkan</button>
                </form>
            </div>
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div class="app-container container-xxl">
            <div class="card mt-5">
                <div class="card-body table-responsive">
                    <div class="mb-3">
                        <form method="POST" action="{{ route('absensi.kirim-wa') }}">
                            @csrf
                            <input type="hidden" name="bulan" value="{{ $bulan }}">
                            <input type="hidden" name="tahun" value="{{ $tahun }}">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-paper-plane"></i> Kirim Rekap ke WhatsApp
                            </button>
                        </form>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <h4>Rekap Kehadiran Shift 1 - Bulan {{ $bulan }} Tahun {{ $tahun }}</h4>
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>NMR</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    @for ($i = 1; $i <= 30; $i++) <th>{{ $i }}</th>
                                        @endfor
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($rekapShift1 as $r)
                                <tr>
                                    <td>{{ $r['nmr'] }}</td>
                                    <td>{{ $r['nama'] }}</td>
                                    <td>{{ $r['jabatan'] }}</td>
                                    @for ($i = 1; $i <= 30; $i++) @php $tanggal=\Carbon\Carbon::create($tahun, $bulan,
                                        $i)->format('Y-m-d');
                                        $hari = \Carbon\Carbon::create($tahun, $bulan, $i)->isoFormat('dddd');
                                        $now = \Carbon\Carbon::now()->toDateString();

                                        // default kosong
                                        $status = '';

                                        // jika tanggal sudah lewat atau hari ini
                                        if ($tanggal <= $now) { $dijadwalkan=\App\Models\JadwalShift::where('nmr',
                                            $r['nmr']) ->where('hari', $hari)
                                            ->where('shift', 'shift_1')
                                            ->exists();

                                            if ($dijadwalkan) {
                                            $hadir = \App\Models\AbsensiUmana::where('nmr', $r['nmr'])
                                            ->where('tanggal', $tanggal)
                                            ->where('shift', 'shift_1')
                                            ->exists();

                                            $izin = \App\Models\IzinUmana::where('nmr', $r['nmr'])
                                            ->where('tanggal', $tanggal)
                                            ->where('shift', 'shift_1')
                                            ->exists();

                                            if ($hadir) {
                                            $status = 'H';
                                            } elseif ($izin) {
                                            $status = 'I';
                                            } else {
                                            $status = 'A';
                                            }
                                            } else {
                                            $status = '-';
                                            }
                                            }
                                            @endphp
                                            <td class="text-center">{{ $status }}</td>
                                            @endfor
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h4>Rekap Kehadiran Shift 2 - Bulan {{ $bulan }} Tahun {{ $tahun }}</h4>
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>NMR</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    @for ($i = 1; $i <= 30; $i++) <th>{{ $i }}</th>
                                        @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rekapShift2 as $r)
                                <tr>
                                    <td>{{ $r['nmr'] }}</td>
                                    <td>{{ $r['nama'] }}</td>
                                    <td>{{ $r['jabatan'] }}</td>
                                    @for ($i = 1; $i <= 30; $i++) @php $tanggal=\Carbon\Carbon::create($tahun, $bulan,
                                        $i)->format('Y-m-d');
                                        $hari = \Carbon\Carbon::create($tahun, $bulan, $i)->isoFormat('dddd');
                                        $now = \Carbon\Carbon::now()->toDateString();

                                        // default kosong
                                        $status = '';

                                        // jika tanggal sudah lewat atau hari ini
                                        if ($tanggal <= $now) { $dijadwalkan=\App\Models\JadwalShift::where('nmr',
                                            $r['nmr']) ->where('hari', $hari)
                                            ->where('shift', 'shift_2')
                                            ->exists();

                                            if ($dijadwalkan) {
                                            $hadir = \App\Models\AbsensiUmana::where('nmr', $r['nmr'])
                                            ->where('tanggal', $tanggal)
                                            ->where('shift', 'shift_2')
                                            ->exists();

                                            $izin = \App\Models\IzinUmana::where('nmr', $r['nmr'])
                                            ->where('tanggal', $tanggal)
                                            ->where('shift', 'shift_2')
                                            ->exists();

                                            if ($hadir) {
                                            $status = 'H';
                                            } elseif ($izin) {
                                            $status = 'I';
                                            } else {
                                            $status = 'A';
                                            }
                                            } else {
                                            $status = '-';
                                            }
                                            }
                                            @endphp
                                            <td class="text-center">{{ $status }}</td>
                                            @endfor
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>

            </div>
        </div>
    </div>
    <!--end::Content-->
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    //message with sweetalert
    @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @endif


</script>

@endsection

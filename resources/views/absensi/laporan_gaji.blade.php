@extends('layout.sidebar')
@section('konten')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        Barokah Bulanan</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Barokah Bulanan</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->


            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">

                <div class="d-flex justify-content-between align-items-center flex-wrap mb-5">
                    <div class="card mt-5">
                        {{-- 🔁 Kirim WhatsApp (KIRI) --}}
                        <div>
                            <form method="POST" action="{{ route('absensi.kirim-wa') }}">
                                @csrf
                                <input type="hidden" name="bulan" value="{{ $bulan }}">
                                <input type="hidden" name="tahun" value="{{ $tahun }}">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fas fa-paper-plane"></i> Kirim Rekap Via WhatsApp
                                </button>
                            </form>
                        </div>
                    </div>

                    {{-- 🔁 Filter Bulan/Tahun dan Tombol Tampilkan (KANAN) --}}
                    <form method="GET" action="{{ route('absensi.laporanGaji') }}">
                        <div class="d-flex align-items-center gap-3 flex-wrap">
                            {{-- Bulan --}}
                            <div class="d-flex align-items-center gap-2">
                                <label for="bulan">Bulan:</label>
                                <select name="bulan" id="bulan"
                                    class="form-select form-select-sm form-select-solid w-125px" data-control="select2">
                                    @for ($i = 1; $i <= 12; $i++) <option value="{{ sprintf('%02d', $i) }}" {{
                                        $bulan==sprintf('%02d', $i) ? 'selected' : '' }}>
                                        {{ DateTime::createFromFormat('!m', $i)->format('F') }}
                                        </option>
                                        @endfor
                                </select>
                            </div>

                            {{-- Tahun --}}
                            <div class="d-flex align-items-center gap-2">
                                <label for="tahun">Tahun:</label>
                                <select name="tahun" id="tahun"
                                    class="form-select form-select-sm form-select-solid w-100px">
                                    @for ($y = now()->year; $y >= now()->year - 5; $y--)
                                    <option value="{{ $y }}" {{ $tahun==$y ? 'selected' : '' }}>{{ $y }}</option>
                                    @endfor
                                </select>
                            </div>

                            {{-- Tombol Tampilkan --}}
                            <button type="submit" class="btn btn-info btn-sm">
                                <i class="fas fa-search"></i> Tampilkan
                            </button>
                        </div>
                    </form>
                </div>
                <table class="table">
                    <thead class="fs-5 bg-info">
                        <tr
                            class="text-start text-white fw-bold fs-7 text-uppercase gs-0 fw-bold  fs-6 text-align-center">
                            <th class="ps-6 rounded-start ">No</th>
                            <th>Nama</th>
                            <th>NMR</th>
                            <th>Jabatan</th>
                            <th>Shift 1</th>
                            <th>Shift 2</th>
                            <th>Total Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div>
                            @php
                            $no = ($data->currentPage() - 1) * $data->perPage() + 1;
                            @endphp
                            @forelse ($data as $item)
                            <tr class="border-bottom border-5">
                                <td class="ps-6">{{ $no++ }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nmr }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->total_shift_1 }}</td>
                                <td>{{ $item->total_shift_2 }}</td>
                                <td>Rp {{ number_format($item->total_gaji, 0, ',', '.') }}</td>
                                <td>{{ $item->created_at }}</td>

                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">Tidak ada data absensi.</td>
                            </tr>
                            @endforelse
                    </tbody>
                </table>
                {{ $data->links('pagination::bootstrap-5') }}

            </div>
        </div>
    </div>
</div>
</div>
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

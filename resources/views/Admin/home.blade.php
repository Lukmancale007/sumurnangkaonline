@extends('layout.sidebar')
@section('konten')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::KONTEN-->
        <!--begin::Row-->
<div class="row g-5 g-xl-8">
    <div class="col-xl-4">
        <!--begin: Statistics Widget 6-->
        <a href="admin/berita" class="card bg-light-success border-hover-success hover-scale">
            <!--begin:: Card body-->
            <div class="card-body p-9">
                <!--begin::Name-->
                <div class="fw-bold text-success fs-5 mb-3 d-block">Data Santri</div>
                <!--end::Name-->
                <div class="py-1">
                    <span class="text-gray-900 fs-1 fw-bold me-2">{{ $santri }}</span>
                    <span class="fw-semibold text-muted fs-7">Jumlah Santri </span>
                </div>
                <div class="progress h-7px bg-success bg-opacity-50 mt-7">
                    {{-- <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> --}}
                </div>
            </div>
            <!--end:: Card body-->
        </a>
        <!--end: Statistics Widget 6-->
    </div>
    <div class="col-xl-4">
        <!--begin: Statistics Widget 6-->
        <a href="admin/buletin" class="card bg-light-info border-hover-info hover-scale">
            <!--begin:: Card body-->
            <div class="card-body p-9">
                <!--begin::Name-->
                <div class="fw-bold text-info fs-5 mb-3 d-block">Data Santri Izin</div>
                <!--end::Name-->
                <div class="py-1">
                    <span class="text-gray-900 fs-1 fw-bold me-2">{{ $izinsantri }}</span>
                    <span class="fw-semibold text-muted fs-7">Jumlah Santri Izin Keluar</span>
                </div>
                <div class="progress h-7px bg-info bg-opacity-50 mt-7">
                    {{-- <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> --}}
                </div>
            </div>
            <!--end:: Card body-->
        </a>
        <!--end: Statistics Widget 6-->
    </div>

    <div class="col-xl-4">
        <!--begin: Statistics Widget 6-->
        <a href="admin/resource" class="card bg-light-primary border-hover-primary hover-scale">
            <!--begin:: Card body-->
            <div class="card-body p-9">
                <!--begin::Name-->
                <div class="fw-bold text-primary fs-5 mb-3 d-block">Data Resource Guide</div>
                <!--end::Name-->
                <div class="py-1">
                    {{-- <span class="text-gray-900 fs-1 fw-bold me-2">{{ number_format($persentaseresource) }}%</span> --}}
                    {{-- <span class="fw-semibold text-muted fs-7">({{ $resource }} dari 27 Program Studi)</span> --}}
                </div>
                <div class="progress h-7px bg-primary bg-opacity-50 mt-7">
                    {{-- <div class="progress-bar bg-primary" role="progressbar" style="width: {{ number_format($persentaseresource) }}%" aria-valuenow="{{ number_format($persentaseresource) }}" aria-valuemin="0" aria-valuemax="100"></div> --}}
                </div>
            </div>
            <!--end:: Card body-->
        </a>
        <!--end: Statistics Widget 6-->
    </div>
</div>
</div>
<!--end::Content container-->
</div>
@endsection

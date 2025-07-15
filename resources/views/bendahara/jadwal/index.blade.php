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
                        Manajemen Jadwal</h1>
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
                        <li class="breadcrumb-item text-muted">Manajemen Jadwal</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->


            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="row g-5 g-xl-10">
                    <div class="col-xxl-4">
                        <!--begin::Forms widget 1-->
                        <div class="card h-xl-100">
                            <!--begin::Header-->
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="d-flex justify-content-center align-items-center vh-20">
                                    <!--begin::Nav-->
                                    <h4 class="text-center mb-5">DATA UMANA</h4>
                                </div>
                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade active show" id="kt_forms_widget_1_tab_content_1">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>NMR</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($umana as $item)
                                                <tr>
                                                    <td>{{ $item->nmr }}</td>
                                                    <td>{{ $item->nama}}</td>
                                                    <td>{{ $item->jabatan }}</td>
                                                    <td>
                                                        <a href="{{ route('jadwal.jadwal.edit', $item->nmr) }}"
                                                            class="btn btn-icon btn-align btn-secondary">
                                                            <i class="bi bi-chat-square-text-fill fs-4 "></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--end::Action-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->




                    <div class="col-xxl-8">
                        <!--begin::Table widget 7-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h4 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Data Kehadiran Hari Ini ({{
                                        \Carbon\Carbon::parse($tanggal)->translatedFormat('l, d F Y') }})</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-7">Updated 37 minutes ago</span>
                                </h4>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                        class="btn btn-flex btn-sm btn-light d-flex align-items-center px-4">
                                        <!--begin::Display range-->
                                        <div class="text-gray-600 fw-bold">Loading date range...</div>
                                        <!--end::Display range-->
                                        <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                        </i>
                                    </div>
                                    <!--end::Daterangepicker-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="border-bottom-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-175px"></th>
                                                <th class="p-0 min-w-175px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>NMR</th>
                                                        <th>Nama</th>
                                                        <th>Shift</th>
                                                        <th>Waktu Absen</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($data as $item)
                                                    <tr>
                                                        <td>{{ $item->nmr }}</td>
                                                        <td>{{ $item->umana->nama ?? '-' }}</td>
                                                        <td>{{ ucfirst(str_replace('_', ' ', $item->shift)) }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->waktu)->format('H:i:s') }}
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="4" class="text-center">Belum ada data kehadiran
                                                            hari ini.</td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>
                        <!--end::Table widget 7-->
                    </div>
                </div>
                @endsection

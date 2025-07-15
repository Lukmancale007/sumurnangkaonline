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
                        Buletin Mingguan</h1>
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
                        <li class="breadcrumb-item text-muted">Data Berita</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

            </div>
        </div>
        <div>
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <div>
                        <div class="d-flex my-0">
                            <!--begin::Select-->
                            <button type="button" class="btn btn-sm btn-light-success" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_update_details">
                                <i class="ki-outline ki-plus fs-2"></i>Tambah Berita
                            </button>
                            @include('admin.berita.tambah')
                        </div>
                    </div>
                    <!--end::Select-->

                    <br>
                    <!--end::Actions-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-striped fs-6 gy-5" id="kt_ecommerce_category_table">
                            <thead class="fw-bold fs-5 bg-success">
                                <tr class="text-start text-white fw-bold fs-7 text-uppercase gs-0">
                                    <th class="ps-6 rounded-start min-w-200px">Judul</th>
                                    <th>Konten</th>
                                    <th>Penulis</th>
                                    <th></th>
                                    <th class="pe-6 rounded-end text-end min-w-70px">Opsi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($berita as $item)
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex">
                                            <div class="position-relative ps-6 pe-3 py-2">
                                                <div
                                                    class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info">
                                                </div>
                                                <div class="text-gray-800 fs-5 fw-bold mb-1">{{ $item->judul }}</div>
                                                <div class="d-flex align-items-center">
                                                    <span class="fw-bold text-gray-600 fs-7">{{ $item->tanggal_berita
                                                        }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $item->content }}</td>
                                    <td>{{ $item->penulis }}</td>
                                    <td>
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <a href="{{ asset('/storage/buletin/' . $item->file) }}">
                                                <img alt="" class="w-35px"
                                                    src="{{ asset('admin/assets/media/svg/files/pdf.svg') }}">
                                            </a>
                                            <!--end::Icon-->

                                        </div>
                                    </td>
                                    <td class="text-end pe-4">
                                        <a href="#"
                                            class="btn btn-sm btn-light-info btn-active-info btn-flex btn-center"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Opsi
                                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href=# class="menu-link px-3" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_update_details{{ $item->id }}">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ asset('/admin/buletin('.$item->id.')/hapus') }}"
                                                    class="menu-link px-3">Hapus</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    {{-- @include('admin.buletin.edit') --}}
                                </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection

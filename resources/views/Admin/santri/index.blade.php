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
                        Data Santri</h1>
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
                        <li class="breadcrumb-item text-muted">Data Santri</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->


            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="d-flex justify-content-between align-items-center my-4 flex-wrap">
                    {{-- Tombol Tambah Santri (kiri) --}}
                    <div class="mb-2">
                        @if(auth()->user()->role->name == 'admin' || auth()->user()->role->name == 'asrama')
                        <button type="button" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_update_details">
                            <i class="ki-outline ki-plus fs-2"></i>Tambah Santri
                        </button>
                        @include('admin.santri.tambah')
                        @endif
                    </div>
                </div>

                <div class="d-flex flex-wrap">
                    <!--begin::Stat-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                        <!--begin::Number-->
                        <div class="d-flex align-items-center">
                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">

                            </i>
                            <div class="fs-2 fw-bold" data-kt-countup="false">{{ $jumlahPutra }}</div>
                        </div>
                        <!--end::Number-->
                        <!--begin::Label-->
                        <div class="fw-semibold fs-6 text-gray-500">Santri Putra</div>
                        <!--end::Label-->
                    </div>
                    <!--end::Stat-->
                    <!--begin::Stat-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                        <!--begin::Number-->
                        <div class="d-flex align-items-center">
                            <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <div class="fs-2 fw-bold" data-kt-countup="false">{{ $jumlahPutri }}</div>
                        </div>
                        <!--end::Number-->
                        <!--begin::Label-->
                        <div class="fw-semibold fs-6 text-gray-500">Santri Putri</div>
                        <!--end::Label-->
                    </div>
                    <!--end::Stat-->
                    <!--begin::Stat-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                        <!--begin::Number-->
                        <div class="d-flex align-items-center">
                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <div class="fs-2 fw-bold" data-kt-countup="false">{{ $santrinonactive }}</div>
                        </div>
                        <!--end::Number-->
                        <!--begin::Label-->
                        <div class="fw-semibold fs-6 text-gray-500">Santri Tidak Aktif</div>
                        <!--end::Label-->
                    </div>

                    @if(auth()->user()->role->name == 'admin' || auth()->user()->role->name == 'asrama' )
                    {{-- Form Filter Gender (kanan) --}}
                    <div class="mb-2 mt-8 ms-auto">
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <a class="btn btn-lg btn-flex btn-secondary fw-bold px-6" style="min-width: 200px;"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i> Filter Data Santri</a>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                id="kt_menu_667817148a847">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            @php
                                            $userRole = auth()->user()->role->name;
                                            $routeName = match($userRole) {
                                            'admin' => 'admin.santri.index', // ini routenya
                                            'asrama' => 'asrama.santri.index',
                                            default => '#', // fallback jika role tidak dikenali
                                            };
                                            @endphp
                                            <form method="GET" action="{{ route($routeName) }}" class="d-flex ms-auto">
                                                <select name="gender" class="form-select form-select-solid"
                                                    data-kt-select2="true" data-placeholder="Select option"
                                                    onchange="this.form.submit()">
                                                    <option>Semua Santri</option>
                                                    <option value="putra" {{ request('gender')=='putra' ? 'selected'
                                                        : '' }}>Putra</option>
                                                    <option value="putri" {{ request('gender')=='putri' ? 'selected'
                                                        : '' }}>Putri</option>
                                                </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                        </div>

                    </div>
                    @endif
                    <!--end::Stat-->
                </div>


                <table class="table">
                    <thead class="fs-5 bg-info">
                        <tr
                            class="text-start text-white fw-bold fs-7 text-uppercase gs-0 fw-bold  fs-6 text-align-center">
                            <th class="ps-6 rounded-start ">No</th>
                            <th>Image</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Asrama</th>
                            <th>Alamat</th>
                            <th>Ayah/Ibu</th>
                            {{-- <th>Tanggal Dibuat</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div>
                            @php
                            $no = ($santri->currentPage() - 1) * $santri->perPage() + 1;
                            @endphp
                            @foreach ($santri as $item)
                            <tr class="border-bottom border-5">
                                <td class="ps-6">{{ $no++ }}</td>
                                <td>
                                    <div class="me-7 mb-4">
                                        <div class="symbol symbol-100px symbol-lg-100px symbol-fixed position-relative">
                                            <img src="{{ asset('/storage/images/'.$item->image) }}" alt="">
                                            <div
                                                class="position-absolute translate-middle bottom-0 start-100 mb-6  border-4 border-body h-20px w-20px">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><b>{{ $item->nama }}</b> <br>
                                    <div class="badge badge-light-success me-auto">{{ $item->nis }}</div>
                                </td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>
                                    <div class="
                                        @if($item->gender == 'putra')
                                        badge badge-light-success me-auto
                                        @elseif($item->gender == 'putri')
                                        badge badge-light-danger
                                        @endif
                                         "> {{ $item->gender }}</div>
                                </td>
                                <td>{{ $item->asrama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->ayah }}/{{ $item->ibu }}</td>
                                {{-- <td>{{ $item->created_at }}</td> --}}
                                <td>
                                    @if(auth()->user()->role->name == 'admin')
                                    <a href="{{ asset('/admin/detail-santri('.$item->id.')') }}"
                                        class="btn btn-sm btn-light-success">Detail</a>
                                    <a href="{{ asset('/admin/edit-santri('.$item->id.')') }}"
                                        class="btn btn-sm btn-light-primary">Edit</a>
                                    <a href="{{ asset('/admin/delete-santri('.$item->id.')') }}"
                                        class="btn btn-sm btn-light-danger">
                                        @method('delete') Hapus</a>

                                    @elseif(auth()->user()->role->name == 'kepalakamar')
                                    <a href="{{ asset('/kepalakamar/detail-santri('.$item->id.')') }}"
                                        class="btn btn-sm btn-light-success">Detail</a>

                                    @elseif(auth()->user()->role->name == 'asrama')
                                    <a href="{{ asset('/asrama/detail-santri('.$item->id.')') }}"
                                        class="btn btn-sm btn-light-success">Detail</a>
                                    <a href="{{ asset('/asrama/edit-santri('.$item->id.')') }}"
                                        class="btn btn-sm btn-light-primary">Edit</a>
                                    <a href="{{ asset('/asrama/delete-santri('.$item->id.')') }}"
                                        class="btn btn-sm btn-light-danger">
                                        @method('delete') Hapus</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                {{ $santri->links('pagination::bootstrap-5') }}

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

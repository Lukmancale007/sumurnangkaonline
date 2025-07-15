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
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Data Izin</h1>
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
                        <li class="breadcrumb-item text-muted">Data Izin Bepergian</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->


            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="d-flex my-0">
            <!--begin::Select-->
            <button type="button" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">
                <i class="ki-outline ki-plus fs-2"></i>Tambah Izin Bepergian
            </button>
            <!--end::Select-->
        </div>
        <!--end::Actions-->
        @include('kamtib.perizinan.tambah')
 <br>
        <form action="santri/search" class="form-inline" method="GET">
            <input type="search" name="search" class="form-control float right" placeholder="search">
            <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>




                        <table class="table">
                            <thead>
                                <tr class="fw-bold  fs-6 text-gray-800">
                                    <th>No</th>
                                    <th>image</th>
                                    <th>Nama</th>
                                    <th>Asrama</th>
                                    <th>Kepala Kamar</th>
                                    <th>Tujuan</th>
                                    <th>Berangkat</th>
                                    <th>Kembali</th>
                                    {{-- <th>Tanggal Dibuat</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($izinsantri as $item)
                                <td>{{ $item->id }}</td>
                                    <td> <img src="{{ asset('/storage/image/'.$item->image) }}"></td>
                                    <td><b>{{ $item->nama }}</b> <br>
                                        <div class="badge badge-light-success me-auto">{{ $item->nis }}</div>
                                    </td>

                                    <td>{{ $item->asrama }}</td>
                                    <td>{{ $item->kepalakamar }}</td>
                                    <td>{{ $item->tujuan }}</td>
                                    <td>{{ $item->berangkat }}</td>
                                    <td>{{ $item->kembali }}</td>
                                    {{-- <td>{{ $item->created_at }}</td> --}}
                                    <td>
                                        <a href="{{ asset('kamtib/cetaksuratizin-pdf('.$item->id.')') }}" class="btn btn-sm btn-light-warning">Cetak</a>
                                        <a href="{{ asset('kamtib/edit-santri('.$item->id.')') }}" class="btn btn-sm btn-light-primary">Edit</a>
                                        <a href="{{ asset('kamtib/delete-santri('.$item->id.')') }}" class="btn btn-sm btn-light-danger">
                                            @method('delete')  Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

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

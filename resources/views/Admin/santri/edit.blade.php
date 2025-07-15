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
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Data Umana'</h1>
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
                        <li class="breadcrumb-item text-muted">Data Umana'</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->


            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card">
                    <form action="{{ route('santri.update',$santri->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Santri</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Santri</label>
                                <input type="text" class="form-control" name="nama"  value=" {{ $santri->nama }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nama">Tanggal Lahir</label>
                                <input type="text" class="form-control" name="tanggal_lahir"  value=" {{ $santri->tanggal_lahir}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Asrama</label>
                                <select name="asrama" id="" class="form-control">
                                    <option value="">Pilih Asrama</option>
                                    @foreach ($asrama as $item)
                                 <option value="{{$item->namaasrama}}">{{$item->namaasrama}}</option>
                                @endforeach</select>
                            </div>
                            <div class="form-group">
                                <label for="nama">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $santri->alamat }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nama">Ayah</label>
                                <input type="text" class="form-control" name="ayah"  value="{{ $santri->ayah }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">ibu</label>
                                <input type="text" class="form-control" name="ibu" value="{{ $santri->ibu }}"  required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-10">simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

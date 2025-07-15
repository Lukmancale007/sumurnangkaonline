<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Absen Kehadiran</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="shortcut icon" href="{{ ('profile/assets/img/logo/sumurnangka-icon.png ')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href={{ "https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" }} />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href={{ "assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" }} rel="stylesheet" type="text/css" />
    <link href={{ "assets/plugins/custom/datatables/datatables.bundle.css" }} rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <base href="{{ url('/') }}">
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('assets/media/bagkround/gambar.jpg');
            /* Ganti dengan path gambar kamu */
            ? background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            width: 100vw;
            font-family: sans-serif;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    {{-- form absensi umana yang di sembunyikan --}}
    <div style="position: absolute; opacity:0;">
        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf
            <label for="nmr">NMR:</label>
            <input type="text" name="nmr" id="nmr" class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                value="" required autofocus />
            <br>
            <button type="submit" class="btn btn-bg-light btn-color-success">Hadir</button>
        </form>
    </div>
</body>

</html>
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
    }).then(() => {
    window.location.reload(); // Refresh otomatis setelah alert sukses
    });
@elseif(session('error'))
    Swal.fire({
        icon: "error",
        title: "Astagfirulloh!",
        text: "{{ session('error') }}",
        showConfirmButton: false,
        timer: 2000
    });
@endif

window.addEventListener('DOMContentLoaded', function () {
        const nmrInput = document.getElementById('nmr');
        if (nmrInput) {
            nmrInput.focus();
        }
    });
</script>

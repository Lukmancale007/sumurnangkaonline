<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datapengguna;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\IzinUmanaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\JadwalShiftController;
use App\Http\Controllers\KepalaKamarController;
use App\Http\Controllers\AbsensiUmanaController;
use App\Http\Controllers\Admin\AsramaController;
use App\Http\Controllers\Admin\SantriController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\website\BeritaController;
use App\Http\Controllers\Website\BuletinController;
use App\Http\Controllers\kamtib\IzinsantriController;
use App\Http\Controllers\Admin\DatapenggunaController;

// Route::get('/', function () {
//     // return view('admin.home');
// })->middleware('is_admin');
Route::get('/user-page', function () {
    return view('user-page');
})->middleware('is_admin');
Route::get('/', function () {
    return view('website.beranda');
});

Auth::routes();

//::Rute ini untuk publik

Route::get('berita', [App\Http\Controllers\Website\BeritaController::class, 'berita']);

//::batas rute untuk publik




Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {

    Route::resource('home', HomeController::class)->names('admin.home');
    Route::resource('santri', SantriController::class)->names('admin.santri');
    Route::get('edit-santri({id})', [App\Http\Controllers\Admin\SantriController::class, 'edit']);
    Route::get('delete-santri({id})', [App\Http\Controllers\Admin\SantriController::class, 'delete']);
    Route::get('detail-santri({id})', [App\Http\Controllers\Admin\SantriController::class, 'show']);
    Route::get('santri/search', [App\Http\Controllers\Admin\SantriController::class, 'search'])->name('santri.search');
    Route::get('status/update', [StatusController::class, 'update'])->name('status.update');

    Route::resource('datapengguna', DatapenggunaController::class);
    Route::get('edit-datapengguna({id})', [App\Http\Controllers\Admin\DatapenggunaController::class, 'edit']);
    Route::get('delete-datapengguna({id})', [App\Http\Controllers\Admin\DatapenggunaController::class, 'delete']);

    Route::resource('izinsantri', IzinsantriController::class);
    Route::get('tambahdataizin', [App\Http\Controllers\kamtib\IzinSantriController::class, 'create']);
    Route::get('/cetaksuratizin-pdf({id})', [App\Http\Controllers\kamtib\IzinsantriController::class, 'generatePDF']);


    Route::resource('/berita', BeritaController::class);
    Route::resource('/buletin', BuletinController::class);
});

Route::prefix('asrama')->middleware(['auth', 'role:asrama'])->group(function () {

    Route::resource('home', HomeController::class)->names('santri.home');
    Route::resource('santri', SantriController::class)->names('asrama.santri');
    Route::get('edit-santri({id})', [App\Http\Controllers\Admin\SantriController::class, 'edit'])->name('santri.update');
    Route::get('delete-santri({id})', [App\Http\Controllers\Admin\SantriController::class, 'delete']);
    Route::get('detail-santri({id})', [App\Http\Controllers\Admin\SantriController::class, 'show']);
    Route::get('status/update', [StatusController::class, 'update'])->name('asrama.status.update');

    Route::resource('kepala_kamar', KepalaKamarController::class)->names('asrama.kepalakamar');

    Route::resource('/kamar', KamarController::class)->names('asrama.kamar');


});


Route::prefix('kamtib')->middleware(['auth', 'role:kamtib'])->group(function () {

    Route::resource('izinsantri', IzinsantriController::class)->names(names: 'Izinsantri.home');
    ;
    Route::get('izinsantri', [App\Http\Controllers\kamtib\IzinSantriController::class, 'index'])->name('kamtib.perizinan.index');
    Route::get('tambah-dataizin', [App\Http\Controllers\kamtib\IzinSantriController::class, 'create']);
    Route::get('/cetaksuratizin-pdf({id})', [App\Http\Controllers\kamtib\IzinsantriController::class, 'generatePDF']);

});
Route::prefix('kepalakamar')->middleware(['auth:kepalakamar'])->group(function () {

    Route::resource('home', HomeController::class)->names('kepalakamara.home');
    Route::resource('dataanakkamar', SantriController::class)->names('kepalakamar.datanakkamar');
    Route::get('edit-santri({id})', [App\Http\Controllers\Admin\SantriController::class, 'edit'])->name('kepalakamar.update');
    Route::get('delete-santri({id})', [App\Http\Controllers\Admin\SantriController::class, 'delete']);
    Route::get('detail-santri({id})', [App\Http\Controllers\Admin\SantriController::class, 'show']);
    Route::get('status/update', [StatusController::class, 'update'])->name('kepalakamar.status.update');

});

Route::get('berita/({slug})', [BeritaController::class, 'show']);

Route::prefix('bendahara')->middleware(['auth', 'role:bendahara'])->group(function () {

    Route::get('/laporan-gaji', [AbsensiUmanaController::class, 'laporanGaji'])->name('absensi.laporanGaji');

    Route::get('/jadwal', [AbsensiUmanaController::class, 'indexJadwalUmana'])->name('jadwal.index');
    Route::get('/jadwal/{nmr}/jadwal-shift', [AbsensiUmanaController::class, 'editJadwalShift'])->name('jadwal.jadwal.edit');
    Route::post('/jadwal/{nmr}/jadwal-shift/update', [AbsensiUmanaController::class, 'updateJadwalShift'])->name('umana.jadwal.update');


    Route::get('/izinumana', [IzinUmanaController::class, 'create'])->name('izin.create');
    Route::post('/izinumana', [IzinUmanaController::class, 'store'])->name('izin.store');
    Route::get('/izinumana/{id}/edit', [IzinUmanaController::class, 'edit'])->name('izin.edit');
    Route::put('/izinumana/{id}', [IzinUmanaController::class, 'update'])->name('izin.update');
    Route::delete('/izinumana/{id}', [IzinUmanaController::class, 'destroy'])->name('izin.destroy');

    Route::get('/rekap-bulanan', [AbsensiUmanaController::class, 'rekapBulanan'])->name('rekap.bulanan');
    Route::get('/rekap-bulanan/pdf', [AbsensiUmanaController::class, 'exportPdf'])->name('rekap.export.pdf');
    Route::post('/absensi/kirim-wa', [AbsensiUmanaController::class, 'kirimLaporanGajiViaWa'])->name('absensi.kirim-wa');

});

Route::get('/get-ketua/{id}', [SantriController::class, 'getKetua']); //ini untuk inpUt kamar yang ketua kamarnya otomatis muncul


Route::get('/absensikehadiran', [AbsensiUmanaController::class, 'index']);
Route::post('/absensikehadiran', [AbsensiUmanaController::class, 'store'])->name('absensi.store');

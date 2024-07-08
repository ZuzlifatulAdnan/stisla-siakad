<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'dashboard-kepsek');

// kepsek
Route::get('/dashboard-kepsek', function () {
    return view('pages.kepsek.index', ['type_menu' => 'dashboard-kepsek']);
});
Route::get('/guru-kepsek', function () {
    return view('pages.kepsek.guru', ['type_menu' => 'master']);
});
Route::get('/siswa-kepsek', function () {
    return view('pages.kepsek.siswa', ['type_menu' => 'master']);
});
Route::get('/pembayaran-kepsek', function () {
    return view('pages.kepsek.pembayaran', ['type_menu' => 'pembayaran']);
});

//bendahara
Route::get('/dashboard-bendahara', function () {
    return view('pages.bendahara.index', ['type_menu' => 'dashboard-bendahara']);
});
Route::get('/tagihan-bendahara', function () {
    return view('pages.bendahara.tagihan', ['type_menu' => 'pembayaran']);
});
Route::get('/pembayaran-bendahara', function () {
    return view('pages.bendahara.pembayaran', ['type_menu' => 'pembayaran']);
});

//guru
Route::get('/dashboard-guru', function () {
    return view('pages.guru.index', ['type_menu' => 'dashboard-guru']);
});
Route::get('/jadwal-guru', function () {
    return view('pages.guru.jadwal', ['type_menu' => 'jadwal']);
});
Route::get('/absen-guru', function () {
    return view('pages.guru.absen', ['type_menu' => 'absen']);
});
Route::get('/nilai-guru', function () {
    return view('pages.guru.nilai', ['type_menu' => 'nilai']);
});

//wakel
Route::get('/dashboard-wakel', function () {
    return view('pages.wakel.index', ['type_menu' => 'dashboard-wakel']);
});
Route::get('/absen-wakel', function () {
    return view('pages.wakel.absen', ['type_menu' => 'absen']);
});
Route::get('/nilai-wakel', function () {
    return view('pages.wakel.nilai', ['type_menu' => 'nilai']);
});
Route::get('/raport-wakel', function () {
    return view('pages.wakel.raport', ['type_menu' => 'raport']);
});
Route::get('/penilaian-wakel', function () {
    return view('pages.wakel.absen', ['type_menu' => 'perangkingan']);
});
Route::get('/normalisasi-wakel', function () {
    return view('pages.wakel.normalisasi', ['type_menu' => 'perangkingan']);
});
Route::get('/preferensi-wakel', function () {
    return view('pages.wakel.preferensi', ['type_menu' => 'perangkingan']);
});
Route::get('/perangkingan-wakel', function () {
    return view('pages.wakel.perangkingan', ['type_menu' => 'perangkingan']);
});

//siswa
Route::get('/dashboard-siswa', function () {
    return view('pages.siswa.index', ['type_menu' => 'dashboard-siswa']);
});
Route::get('/jadwal-siswa', function () {
    return view('pages.siswa.jadwal', ['type_menu' => 'jadwal']);
});
Route::get('/absen-siswa', function () {
    return view('pages.siswa.absen', ['type_menu' => 'absen']);
});
Route::get('/nilai-siswa', function () {
    return view('pages.siswa.nilai', ['type_menu' => 'nilai']);
});
Route::get('/raport-siswa', function () {
    return view('pages.siswa.raport', ['type_menu' => 'raport']);
});
Route::get('/preferensi-siswa', function () {
    return view('pages.siswa.preferensi', ['type_menu' => 'perangkingan']);
});
Route::get('/perangkingan-siswa', function () {
    return view('pages.siswa.perangkingan', ['type_menu' => 'perangkingan']);
});
Route::get('/pembayaran-siswa', function () {
    return view('pages.siswa.pembayaran', ['type_menu' => 'pembayaran']);
});

//ortu
Route::get('/dashboard-ortu', function () {
    return view('pages.ortu.index', ['type_menu' => 'dashboard-ortu']);
});
Route::get('/jadwal-ortu', function () {
    return view('pages.ortu.jadwal', ['type_menu' => 'jadwal']);
});
Route::get('/absen-ortu', function () {
    return view('pages.ortu.absen', ['type_menu' => 'absen']);
});
Route::get('/nilai-ortu', function () {
    return view('pages.ortu.nilai', ['type_menu' => 'nilai']);
});
Route::get('/raport-ortu', function () {
    return view('pages.ortu.raport', ['type_menu' => 'raport']);
});
Route::get('/preferensi-ortu', function () {
    return view('pages.ortu.preferensi', ['type_menu' => 'perangkingan']);
});
Route::get('/perangkingan-ortu', function () {
    return view('pages.ortu.perangkingan', ['type_menu' => 'perangkingan']);
});
Route::get('/pembayaran-ortu', function () {
    return view('pages.ortu.pembayaran', ['type_menu' => 'pembayaran']);
});
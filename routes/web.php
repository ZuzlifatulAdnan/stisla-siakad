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

Route::redirect('/', '');

// Dashboard
Route::get('/dashboard-kepsek', function () {
    return view('pages.kepsek.index', ['type_menu' => 'dashboard-kepsek']);
});
Route::get('/dashboard-bendahara', function () {
    return view('pages.bendahara.index', ['type_menu' => 'dashboard-bendahara']);
});
Route::get('/dashboard-guru', function () {
    return view('pages.guru.index', ['type_menu' => 'dashboard']);
});
Route::get('/dashboard-wakel', function () {
    return view('pages.wakel.index', ['type_menu' => 'dashboard']);
});
Route::get('/dashboard-siswa', function () {
    return view('pages.siswa.index', ['type_menu' => 'dashboard']);
});
Route::get('/dashboard-ortu', function () {
    return view('pages.ortu.index', ['type_menu' => 'dashboard']);
});
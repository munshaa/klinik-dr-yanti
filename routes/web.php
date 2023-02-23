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


Route::get('/home', function () {
    return view('home', [
        "title" => "home"
        ]);
});
Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
        ]);
});
Route::get('/login_anteran', function () {
    return view('login_anteran', [
        "title" => "Antrean"
        ]);
});
Route::get('/login_cek', function () {
    return view('login_cek', [
        "title" => "Cek Badan"
        ]);
});
Route::get('/login_dokter', function () {
    return view('login_dokter', [
        "title" => "Dokter"
        ]);
});
Route::get('/login_kasir', function () {
    return view('login_kasir', [
        "title" => "Kasir"
        ]);
});
Route::get('/login_apoteker', function () {
    return view('login_apoteker', [
        "title" => "Apoteker"
        ]);
});
Route::get('/login_keuangan', function () {
    return view('login_keuangan', [
        "title" => "Keuangan"
        ]);
});
Route::get('/login_gudang', function () {
    return view('login_gudang', [
        "title" => "Gudang"
        ]);
});
Route::get('/login_laporan', function () {
    return view('login_laporan', [
        "title" => "Laporan"
        ]);
});
Route::get('/login_bk_pasien', function () {
    return view('login_bk_pasien', [
        "title" => "Buku Pasien"
        ]);
});
Route::get('/login_admin', function () {
    return view('login_admin', [
        "title" => "Admin"
        ]);
});
Route::get('/hal_admin', function () {
    return view('hal_admin', [
        "title" => "Admin"
        ]);
});
Route::get('/hal_anteran', function () {
    return view('hal_anteran', [
        "title" => "Antrean"
        ]);
});
Route::get('/hal_cek', function () {
    return view('hal_cek', [
        "title" => "Cek Badan"
        ]);
});
Route::get('/hal_dokter', function () {
    return view('hal_dokter', [
        "title" => "Dokter"
        ]);
});
Route::get('/hal_kasir', function () {
    return view('hal_kasir', [
        "title" => "Kasir"
        ]);
});
Route::get('/hal_apoteker', function () {
    return view('hal_apoteker', [
        "title" => "Apoteker"
        ]);
});
Route::get('/hal_keuangan', function () {
    return view('hal_keuangan', [
        "title" => "Keuangan"
        ]);
});
Route::get('/hal_gudang', function () {
    return view('hal_gudang', [
        "title" => "Gudang"
        ]);
});
Route::get('/hal_laporan', function () {
    return view('hal_laporan', [
        "title" => "Laporan"
        ]);
});
Route::get('/hal_bk_pasien', function () {
    return view('hal_bk_pasien', [
        "title" => "Buku Pasien"
        ]);
});
Route::get('/hal_admin', function () {
    return view('hal_admin', [
        "title" => "Admin"
        ]);
});
Route::get('/hal_admin', function () {
    return view('hal_admin', [
        "title" => "Admin"
        ]);
});
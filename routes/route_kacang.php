<?php

use Illuminate\Support\Facades\Route;

//home
Route::get('/home', 'gudangkacang\HomeController@index');

//stock
Route::get('/gd_kacang', function () {
    return view('gudangkacang.gd_kacang');
});

Route::get('/gd_kacang_sortir', function () {
    return view('gudangkacang.gd_kacang_sortir');
});

Route::get('/stock_gudang_kacang_penerimaan_ob', function () {
    return view('gudangkacang.penerimaan_ob');
});

Route::get('/stock_gudang_kacang_penerimaan_7ml', function () {
    return view('gudangkacang.penerimaan_7ml');
});

Route::get('/stock_gudang_kacang_penerimaan_8ml', function () {
    return view('gudangkacang.penerimaan_8ml');
});

//kerja harian
Route::get('/hari_ini', function () {
    return view('gudangkacang.kerja_harian');
});

Route::get('/hari_sebelumnya', function () {
    return view('gudangkacang.kerja_harian_sebelumnya');
});

Route::get('/tutup', function () {
    return view('gudangkacang.review_harian');
});
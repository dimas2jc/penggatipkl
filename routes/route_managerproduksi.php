<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('managerproduksi/auth/login');
});

Route::get('/manager-produksi', 'managerproduksi\ManagerproduksiController@dashboard')->name('dashboard-manager-produksi');

//penerimaan
Route::get('/penerimaan/history_penerimaan', 'managerproduksi\PenerimaanController@select_history')->name('history_penerimaan');
Route::get('/penerimaan/create_penerimaan', 'managerproduksi\PenerimaanController@create');
Route::post('/penerimaan/store_sementara_penerimaan_supplier', 'managerproduksi\PenerimaanController@store_sementara1');
Route::post('/penerimaan/store_sementara_penerimaan_pemindahanbahan', 'managerproduksi\PenerimaanController@store_sementara2');
Route::post('/penerimaan/store_penerimaan_supplier', 'managerproduksi\PenerimaanController@store1');
Route::post('/penerimaan/store_penerimaan_pemindahanbahan', 'managerproduksi\PenerimaanController@store2');
Route::get('/penerimaan/edit_penerimaan_supplier/{id}', 'managerproduksi\PenerimaanController@edit1')->name('edit_penerimaan_supplier');
Route::get('/penerimaan/edit_penerimaan_pemindahanbahan/{id}', 'managerproduksi\PenerimaanController@edit2')->name('edit_penerimaan_pemindahanbahan');
Route::post('/penerimaan/update_sementara_penerimaan_supplier/{id}', 'managerproduksi\PenerimaanController@update_sementara1');
Route::post('/penerimaan/update_sementara_penerimaan_pemindahanbahan/{id}', 'managerproduksi\PenerimaanController@update_sementara2');
Route::post('/penerimaan/update_penerimaan_supplier/{id}', 'managerproduksi\PenerimaanController@update1');
Route::post('/penerimaan/update_penerimaan_pemindahanbahan/{id}', 'managerproduksi\PenerimaanController@update2');
Route::get('/penerimaan/cetak_barcode/{id}',  'managerproduksi\PenerimaanController@printBarcode')->name('cetak_barcode');

// Manager Produksi | Order Masak
Route::get('/manager-produksi/order-masak', 'managerproduksi\ManagerproduksiController@order_masak');

//manpro-gudangkacang
Route::get('/manpro-kacang/home', 'managerproduksi\ManproKacangController@home');
Route::get('/manpro-kacang/stock/gk', 'managerproduksi\ManproKacangController@stock_gudangkacang');
Route::get('/manpro-kacang/stock/gks', 'managerproduksi\ManproKacangController@stock_gudangkacangsortir');
Route::get('/manpro-kacang/kerjaharian/hariini', 'managerproduksi\ManproKacangController@kerjahariini');
Route::get('/manpro-kacang/kerjaharian/sebelumnya', 'managerproduksi\ManproKacangController@kerjaharisebelumnya');

//manpro-gudangbawang
Route::get('/manpro-bawang/home', 'managerproduksi\ManproBawangController@home');
Route::get('/manpro-bawang/stock/bawangkulit', 'managerproduksi\ManproBawangController@stock_bawangkulit');
Route::get('/manpro-bawang/stock/bawangkupas', 'managerproduksi\ManproBawangController@stock_bawangkupas');
Route::get('/manpro-bawang/kerjaharian/tenagakupas', 'managerproduksi\ManproBawangController@tenaga_kupas');
Route::get('/manpro-bawang/kerjaharian/pembagianbawang', 'managerproduksi\ManproBawangController@pembagian_bawang');
Route::get('/manpro-bawang/kerjaharian/penerimaanbawang', 'managerproduksi\ManproBawangController@penerimaan_bawang');
Route::get('/manpro-bawang/kerjaharian/persiapanmasak', 'managerproduksi\ManproBawangController@persiapan_masak');

// Manager Produksi | Data Produksi | Gudang Tapioka
Route::get('/manager-produksi/gudang-tapioka', 'managerproduksi\ManagerproduksiController@gudang_tapioka_home');
Route::get('/manager-produksi/gudang-tapioka/stock', 'managerproduksi\ManagerproduksiController@gudang_tapioka_stock');
Route::get('/manager-produksi/gudang-tapioka/kerja-harian', 'managerproduksi\ManagerproduksiController@gudang_tapioka_kerjaharian');

// Manager Produksi | Data Produksi | Gudang Bumbu
Route::get('/manager-produksi/gudang-bumbu', 'managerproduksi\ManagerproduksiController@gudang_bumbu_home');
Route::get('/manager-produksi/gudang-bumbu/stock-bahan', 'managerproduksi\ManagerproduksiController@gudang_bumbu_stock_bahan');
Route::get('/manager-produksi/gudang-bumbu/detail-prive', 'managerproduksi\ManagerproduksiController@gudang_bumbu_detail_prive');
Route::get('/manager-produksi/gudang-bumbu/stock-adonan-gula', 'managerproduksi\ManagerproduksiController@gudang_bumbu_stock_adonan_gula');
Route::get('/manager-produksi/gudang-bumbu/stock-adonan-gula-garam', 'managerproduksi\ManagerproduksiController@gudang_bumbu_stock_adonan_gula_garam');
Route::get('/manager-produksi/gudang-bumbu/stock-bumbu-ready', 'managerproduksi\ManagerproduksiController@gudang_bumbu_stock_bumbu_ready');
Route::get('/manager-produksi/gudang-bumbu/kerja-harian', 'managerproduksi\ManagerproduksiController@gudang_bumbu_kerja_harian');
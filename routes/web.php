<?php

use App\Http\Controllers\CrudController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


// Route::get('/user/{id?}/{aktif?}', function ($id = "1", $akt = "Y") {
//     // return view('welcome');
//     return "<h1>Ini Project Laravel $id $akt</h1> ";
// })->where('id', '[0-9]*');

Route::view('/', 'dashboard');

// Route::put('simpan', function () {
//     return "Data berhasil disimpan!";
// });


// Route::get('crud', function () {
//     //database
//     return view('crud', ['nama' => 'Andre']);
// });


// Route::get('/home', [CrudController::class, 'index'])->name('dashboard');

// Route::prefix('master-data')->group( function(){
//     Route::get('/data-karyawan', [CrudController::class, 'edit'])->name('dashboard');
// });

// Route::name('master-data.')->prefix('master-data')->group(function () {
//     Route::get('/data-karyawan', [CrudController::class, 'index'])->name('data-karyawan');
//     Route::get('/data-kerja', [CrudController::class, 'edit'])->name('data-kerja');
// });

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profil', function () {
    return "halaman profil";
});
Route::get('/dosen', function () {
    return view('dosen');
});
Route::get('/dosen/index', function () {
    return view('dosen.index');
});
Route::get('/fakultas', function () {
    //return view('fakultas.index', ['fikr' => 'Fakultas Ilmu Komputer dan Rekayasa']);
    return view('fakultas.index') 
                -> with('dataFakultas', ['FIKR', 'FEB']);
});
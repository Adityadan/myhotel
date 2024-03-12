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
    return view('home');
});
Route::get('/myprofile', function () {
    return view('myprofile');
});
Route::get('/kategori', function () {
    return view('kategori');
});
// Route::get('/kategori/{daftarkamar}', function ($daftarkamar='single-semi-double') {
//     return 'ini menu kamar single-semi-double';
// });
Route::get('/kategori/standar-double', function () {
   return view('double');
});

Route::get('/hotel/{name}', function ($name='asakusa kuramae') {
    return 'hotel bintang 5 yang sangat populer di nusa tengara barat';
});
Route::get('/promo/{promo}', function ($promo='Promo-Ramadhan') {
    return 'hotel bintang 5 yang sangat populer di nusa tengara barat';
});


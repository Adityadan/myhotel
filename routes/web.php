<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
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


Route::resource('hotels',HotelController::class);
Route::resource('products',ProductController::class);

Route::get('report/availableHotelRooms',[HotelController::class,'availableHotelRooms'])->name('reportShowHotel');
Route::get('report/avgPriceByHotelType', [HotelController::class,'avgPriceByHotelType'])->name('avgPriceByHotelType');

Route::get('/daftar-barang', [BarangController::class,'index'])->name('daftarBarang');
Route::get('/jumlah-barang/{category?}', [KategoriController::class,'jumlahBarang'])->name('jumlahBarang');

Route::view('ajaxExample', 'hotel.ajax');
Route::post("/hotel/showInfo",[HotelController::class, 'showInfo'])->name("hotels.showInfo");
Route::post('/hotel/showProducts',[HotelController::class,'showProducts'])->name('hotel.showProducts');



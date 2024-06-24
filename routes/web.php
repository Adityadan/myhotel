<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('home');
// });
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/myprofile', function () {
        return view('myprofile');
    });
    Route::get('/kategori', function () {
        return view('kategori');
    });
    Route::get('/kategori/standar-double', function () {
        return view('double');
    });

    Route::get('/hotel/{name}', function ($name = 'asakusa kuramae') {
        return 'hotel bintang 5 yang sangat populer di nusa tengara barat';
    });
    Route::get('/promo/{promo}', function ($promo = 'Promo-Ramadhan') {
        return 'hotel bintang 5 yang sangat populer di nusa tengara barat';
    });

    Route::resource('hotels', HotelController::class);
    Route::post("/hotel/showInfo", [HotelController::class, 'showInfo'])->name("hotels.showInfo");
    Route::post('/hotel/showProducts', [HotelController::class, 'showProducts'])->name('hotel.showProducts');
    Route::get('hotel/uploadLogo/{hotel_id}', [HotelController::class, 'uploadLogo']);
    Route::post('hotel/simpanLogo', [HotelController::class, 'simpanLogo']);
    Route::get('hotel/uploadPhoto/{hotel_id}', [HotelController::class, 'uploadPhoto']);
    Route::post('hotel/simpanPhoto', [HotelController::class, 'simpanPhoto']);

    Route::resource('products', ProductController::class);
    Route::post('products/showDataAjax/', [ProductController::class, 'showAjax'])->name('products.showAjax');
    Route::post('customproducts/getEditForm', [ProductController::class, 'getEditForm'])->name('products.getEditForm');
    Route::post('customproducts/deleteData', [ProductController::class, 'deleteData'])->name('products.deleteData');

    Route::get('report/availableHotelRooms', [HotelController::class, 'availableHotelRooms'])->name('reportShowHotel');
    Route::get('report/avgPriceByHotelType', [HotelController::class, 'avgPriceByHotelType'])->name('avgPriceByHotelType');

    Route::get('/daftar-barang', [BarangController::class, 'index'])->name('daftarBarang');
    Route::get('/jumlah-barang/{category?}', [KategoriController::class, 'jumlahBarang'])->name('jumlahBarang');
    Route::view('ajaxExample', 'hotel.ajax');

    Route::resource('transaction', TransactionController::class);
    Route::post('transaction/showDataAjax/', [TransactionController::class, 'showAjax'])->name('transaction.showAjax');
    Route::post('customtransaction/getEditForm', [TransactionController::class, 'getEditForm'])->name('transaction.getEditForm');
    Route::post('customtransaction/getEditFormB', [TransactionController::class, 'getEditFormB'])->name('transaction.getEditFormB');
    Route::post('customtransaction/saveDataTD', [TransactionController::class, 'saveDataTD'])->name('transaction.saveDataTD');
    Route::post('customtransaction/deleteData', [TransactionController::class, 'deleteData'])->name('transaction.deleteData');

    Route::resource('type', TypeController::class);
    Route::post('customtype/getEditForm', [TypeController::class, 'getEditForm'])->name('type.getEditForm');
    Route::post('customtype/getEditFormB', [TypeController::class, 'getEditFormB'])->name('type.getEditFormB');
    Route::post('customtype/saveDataTD', [TypeController::class, 'saveDataTD'])->name('type.saveDataTD');
    Route::post('customtype/deleteData', [TypeController::class, 'deleteData'])->name('type.deleteData');

    Route::resource('customer', CustomerController::class);
    Route::post('customcustomer/getEditForm', [CustomerController::class, 'getEditForm'])->name('customer.getEditForm');
    Route::post('customcustomer/deleteData', [CustomerController::class, 'deleteData'])->name('customer.deleteData');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});

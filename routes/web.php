<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;

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

//ROUTE UNTUK REGISTER
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);

// ROUTE UNTUK LOGIN
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);

//ROUTE UNTUK LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// ROUTE HALAMAN HOME
Route::get('/', function () {
    return view('home',[
        'title' => 'Home',
        'navtitle' => 'home'
    ]);
});

// ROUTE HALAMAN PRODUK
Route::get('/produk', [ProdukController::class, 'index'])->middleware('auth');
Route::get('/detailproduk/{detailproduk:slug}', [ProdukController::class, 'show'])->middleware('auth');

// ROUTE UNTUK PESANAN
Route::get('/lihatpesanan', [OrderController::class, 'index'])->middleware('auth');
Route::get('/pesanan/{produk_id}', [OrderController::class, 'create'])->middleware('auth');
Route::post('/pesanan', [OrderController::class, 'store'])->middleware('auth');

// ROUTE HALAMAN TENTANG KAMI
Route::get('about', function () {
    return view('about', [
        'title' => 'Tentang Kami',
        'navtitle' => 'tentangkami',
        'fotorifky' => 'rifky.jpg',
        'fotosalman' => 'salman.jpg',
        'fotoarief' => 'arief.jpg',
        'fotoabrar' => 'abrar.jpg'
    ]);
});






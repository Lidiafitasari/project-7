<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('beranda',[HomeController:: class,'showBeranda']);
Route::get('kategory',[HomeController:: class,'showKategory']);

Route::get('test/{produk}',[HomeController:: class,'test']);

Route::get('test/{produk}/{hargaMin?}/{hargaMax}', [HomeController::class, 'test']);

Route::prefix('admin')->group(function (){
	Route::post('produk/filter', [ProdukController::class, 'filter']);
	Route::resource('produk', ProdukController::class);
	Route::resource('user', UserController::class);
});
Route::get('promo',[HomeController:: class,'showPromo']);
Route::get('register',[HomeController:: class,'showRegister']);
Route::get('pelanggan',[HomeController:: class,'showPelanggan']);
Route::get('supplier',[HomeController:: class,'showSupplier']);

Route::get('create',[HomeController:: class,'showCreate']);
Route::get('template.base',[HomeController:: class,'showTemplate']);


Route::get('produk',[ProdukController:: class,'index']);
Route::get('produk/create',[ProdukController:: class,'create']);
Route::post('produk',[ProdukController:: class,'store']);
Route::get('produk/{produk}',[ProdukController:: class, 'show']);
Route::get('produk/{produk}/edit',[ProdukController:: class, 'edit']);
Route::put('produk/{produk}',[ProdukController:: class, 'update']);
Route::delete('produk/{produk}',[ProdukController:: class, 'destroy']);


Route::get('user',[UserController:: class,'index']);
Route::get('user/create',[UserController:: class,'create']);
Route::post('user',[UserController:: class,'store']);
Route::get('user/{user}',[UserController:: class, 'show']);
Route::get('user/{user}/edit',[UserController:: class, 'edit']);
Route::put('user/{user}',[UserController:: class, 'update']);
Route::delete('user/{user}',[UserController:: class, 'destroy']);

Route::get('login',[AuthController:: class,'showLogin']);
Route::post('login',[AuthController:: class,'loginProcess']);
Route::get('logout',[AuthController:: class,'logout']);




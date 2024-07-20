<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Client\HomeController;
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
    return view('welcome');
});

Route::resource('admin/products', ProductController::class);

Route::resource('admin/category', CategorieController::class);

Route::resource('client/', HomeController::class);

Route::get('/client', [HomeController::class, 'index'])->name('client.index');
Route::get('/client/shop', [HomeController::class, 'shop'])->name('client.shop');
Route::get('/client/{product}/show', [HomeController::class, 'show'])->name('client.show');
Route::post('/add-cart', [CartController::class,'add'])->name('cart.add');
Route::get('/cart', [CartController::class,'index'])->name('cart.index');
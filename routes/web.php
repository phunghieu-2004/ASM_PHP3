<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdminMiddleWare;
use App\Models\Product;
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
})->name('welcome');

Route::resource('admin/products', ProductController::class);


Route::resource('admin/category', CategorieController::class);
Route::resource('admin/users', UserController::class);

Route::resource('client/', HomeController::class);

Route::get('/client', [HomeController::class, 'index'])->name('client.index');
Route::get('/client/shop', [HomeController::class, 'shop'])->name('client.shop');
Route::get('/client/{product}/show', [HomeController::class, 'show'])->name('client.show');
//
Route::post('/add-cart', [CartController::class,'add'])->name('cart.add');
Route::get('/cart', [CartController::class,'index'])->name('cart.index');
Route::get('/cart/delete/{id}', [CartController::class,'delete'])->name('cart.delete');
Route::get('/cart/update/{id}', [CartController::class,'update'])->name('cart.update');
Route::get('/cart/clear', [CartController::class,'clear'])->name('cart.clear');

Route::group(['prefix' => 'order'], function() {
    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('order.checkout');
    Route::post('/checkout', [CheckoutController::class, 'post_checkout']);
    Route::get('/verify/{token}', [CheckoutController::class, 'verify'])->name('order.verify');

});



//login
Route::get('auth/login', [LoginController::class, 'index'])->name('login');
Route::post('auth/login', [LoginController::class, 'login'])->name('login');
Route::get('auth/logout', [LoginController::class, 'logout'])->name('logout');




Route::get('auth/register', [RegisterController::class, 'index'])->name('register');
Route::post('auth/register', [RegisterController::class, 'register'])->name('register');
Route::get('auth/verify/{token}', [LoginController::class, 'verify'])->name('verify');

//coupon
Route::post('/check-coupon', [CartController::class, 'check_coupon']);
Route::get('/insert-coupon', [CouponController::class, 'insert_coupon'])->name('insert_coupon');
Route::get('/list-coupon', [CouponController::class, 'list_coupon']);
Route::post('/insert-coupon-code', [CouponController::class, 'insert_coupon_code']);
Route::delete('/delete-coupon/{id}', [CouponController::class,'delete'])->name('delete-coupon');


Route::get('/admin',function(){
    $data = Product::query()->get();
   return view('admin.products.index',compact('data'));
})->middleware([CheckAdminMiddleWare::class])->name('admin');

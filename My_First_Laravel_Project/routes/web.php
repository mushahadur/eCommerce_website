<?php

use App\Http\Controllers\TrackingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('shop-category/', [HomeController::class, 'shopCategory'])->name('shop-category');
Route::get('product-details/', [HomeController::class, 'productDetails'])->name('product-details');


Route::get('login/', [HomeController::class, 'login'])->name('login');
Route::get('contact/', [HomeController::class, 'contact'])->name('contact');


Route::get('blog/', [BlogController::class, 'blog'])->name('blog');
Route::get('single-blog/', [BlogController::class, 'singleBlog'])->name('single-blog');


Route::get('tracking/', [TrackingController::class, 'tracking'])->name('tracking');
Route::get('confirmation/', [TrackingController::class, 'confirmation'])->name('confirmation');
Route::get('checkout/', [TrackingController::class, 'checkout'])->name('checkout');
Route::get('cart/', [TrackingController::class, 'cart'])->name('cart');
Route::get('elements/', [TrackingController::class, 'elements'])->name('elements');
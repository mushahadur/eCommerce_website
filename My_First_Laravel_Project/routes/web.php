<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\DashboardController;
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


Route::get('/login-register', [HomeController::class, 'login'])->name('login-register');
Route::get('contact/', [HomeController::class, 'contact'])->name('contact');


Route::get('blog/', [BlogController::class, 'blog'])->name('blog');
Route::get('single-blog/', [BlogController::class, 'singleBlog'])->name('single-blog');


Route::get('tracking/', [TrackingController::class, 'tracking'])->name('tracking');
Route::get('confirmation/', [TrackingController::class, 'confirmation'])->name('confirmation');
Route::get('checkout/', [TrackingController::class, 'checkout'])->name('checkout');
Route::get('cart/', [TrackingController::class, 'cart'])->name('cart');
Route::get('elements/', [TrackingController::class, 'elements'])->name('elements');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    //Category Routes
    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('addCategory');
    Route::post('/add-category', [CategoryController::class, 'createCategory'])->name('createCategory');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manageCategory');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('editCategory');
    Route::post('/update-category/{id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');


    //subCategory Routes
    Route::get('/add-subCategory', [SubCategoryController::class, 'addSubCategory'])->name('addSubCategory');
    Route::post('/add-subCategory', [SubCategoryController::class, 'createSubCategory'])->name('createSubCategory');
    Route::get('/manage-subCategory', [SubCategoryController::class, 'manageSubCategory'])->name('manageSubCategory');
    Route::get('/edit-subCategory/{id}', [SubCategoryController::class, 'editSubCategory'])->name('editSubCategory');
    Route::post('/update-subCategory/{id}', [SubCategoryController::class, 'updateSubCategory'])->name('updateSubCategory');
    Route::get('/delete-subCategory/{id}', [SubCategoryController::class, 'deleteSubCategory'])->name('deleteSubCategory');

});

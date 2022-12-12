<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UnitController;
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


    //SubCategory Routes
    Route::get('/add-subCategory', [SubCategoryController::class, 'addSubCategory'])->name('addSubCategory');
    Route::post('/add-subCategory', [SubCategoryController::class, 'createSubCategory'])->name('createSubCategory');
    Route::get('/manage-subCategory', [SubCategoryController::class, 'manageSubCategory'])->name('manageSubCategory');
    Route::get('/edit-subCategory/{id}', [SubCategoryController::class, 'editSubCategory'])->name('editSubCategory');
    Route::post('/update-subCategory/{id}', [SubCategoryController::class, 'updateSubCategory'])->name('updateSubCategory');
    Route::get('/delete-subCategory/{id}', [SubCategoryController::class, 'deleteSubCategory'])->name('deleteSubCategory');


    //Brand Routes
    Route::get('/add-brand', [BrandController::class, 'addBrand'])->name('addBrand');
    Route::post('/add-brand', [BrandController::class, 'createBrand'])->name('createBrand');
    Route::get('/manage-brand', [BrandController::class, 'manageBrand'])->name('manageBrand');
    Route::get('/edit-brand/{id}', [BrandController::class, 'editBrand'])->name('editBrand');
    Route::post('/update-brand/{id}', [BrandController::class, 'updateBrand'])->name('updateBrand');
    Route::get('/delete-brand/{id}', [BrandController::class, 'deleteBrand'])->name('deleteBrand');


    //Unit Routes
    Route::get('/add-unit', [UnitController::class, 'addUnit'])->name('addUnit');
    Route::post('/add-unit', [UnitController::class, 'createUnit'])->name('createUnit');
    Route::get('/manage-unit', [UnitController::class, 'manageUnit'])->name('manageUnit');
    Route::get('/edit-unit/{id}', [UnitController::class, 'editUnit'])->name('editUnit');
    Route::post('/update-unit/{id}', [UnitController::class, 'updateUnit'])->name('updateUnit');
    Route::get('/delete-unit/{id}', [UnitController::class, 'deleteUnit'])->name('deleteUnit');


    //Product Routes
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('addProduct');
    Route::post('/add-product', [ProductController::class, 'createProduct'])->name('createProduct');
    Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manageProduct');
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('editProduct');
    Route::post('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
    Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

});

<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::get('/article', [BlogController::class, 'index'])->name('article');
Route::get('/detail-article/{article:slug}', [BlogController::class, 'show'])->name('detail-article');

Route::get('/customers', [CustomerController::class, 'index'])->name('customers');

Route::get('/contact', [HomeController::class, 'indexContact'])->name('contact');

Route::post('contact',[FormController::class, 'store'])->name('store');

Route::get('/history', [HomeController::class, 'history'])->name('history');

Route::get('/vision-mission', [HomeController::class, 'visimisi'])->name('vision-mission');

Route::get('/organization', [HomeController::class, 'organisasi'])->name('organization');

Route::get('/category-product/{categories:slug}', [ProductController::class, 'categoryProduct'])->name('category-product');
Route::get('/all-products', [ProductController::class, 'index'])->name('all-products');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('detail-product');

Route::get('/products', function () {
    return view('pages.product.products');
})->name('products');

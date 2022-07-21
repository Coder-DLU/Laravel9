<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Router Product
Route::get('/product/index', [App\Http\Controllers\ProductController::class, 'index'])->name('product-index');
Route::get('/product/add', [App\Http\Controllers\ProductController::class, 'add'])->name('product-add');
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product-store');
Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product-edit');
Route::post('/product/update', [App\Http\Controllers\ProductController::class, 'update'])->name('product-update');
Route::get('/product/delete{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('product-delete');

<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\userpagecontroller;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('dashboard', 'index')->name('dashboard');
// route::redirect('/','product');
route::get('product/detail/{id}', function ($id) {
    return view('products.detail', ['product' => Product::findOr($id)]);
});
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::controller(userpagecontroller::class)->group(function () {
    Route::get('/','index')->name('index.user');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

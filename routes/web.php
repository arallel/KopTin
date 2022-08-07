<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
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
route::redirect('/','product');
route::get('product/detail/{id}', function ($id) {
    return view('products.detail', ['product' => Product::findOr($id)]);
});
Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);


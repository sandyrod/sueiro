<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Users;
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
    return view('home');
});
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/home', 'home')->name('home');
Route::view('/request', 'request')->name('request');
Route::view('/contact', 'contact')->name('contact');
Route::view('/orders', 'orders')->name('orders');
Route::view('/product', 'product')->name('product');
//Route::view('/product-list', 'product-list')->name('product_list');


Route::post('/suscribe', [App\Http\Controllers\NewsletterController::class, 'store'])->name('suscribe');
Auth::routes(['verify' => true]);

Route::get('/category',        [App\Http\Controllers\HomeController::class, 'category'])->name('category');


/* Route::get('/products',        [App\Http\Controllers\HomeController::class, 'products'])->name('products'); */
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/remittances',     [App\Http\Controllers\HomeController::class, 'remittances'])->name('remittances');
Route::get('/order-history',   [App\Http\Controllers\HomeController::class, 'order_history'])->name('order-history');
Route::get('/quality',         [App\Http\Controllers\HomeController::class, 'quality'])->name('quality');
Route::get('/purchase-history',[App\Http\Controllers\HomeController::class, 'purchase_history'])->name('purchase_history');
Route::get('/cotizador',        [App\Http\Controllers\HomeController::class, 'cotizador'])->name('cotizador');

Route::post('contact',[App\Http\Livewire\Contact::class, 'store'])->name('contact.store');
Route::post('quality',[App\Http\Livewire\Quality::class, 'store'])->name('quality.store');

Route::middleware([
    'auth:sanctum',
    'verified',
])
->group(function () {
    Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
    Route::get('/favorites',       [App\Http\Controllers\HomeController::class, 'favorites'])->name('favorites');
    Route::get('/shopping',        [App\Http\Controllers\HomeController::class, 'shopping'])->name('shopping');
    Route::get('/setting',        [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');
    Route::get('/tango', [App\Http\Controllers\HomeController::class, 'api'])->name('tango');
    Route::get('/tangoprice', [App\Http\Controllers\HomeController::class, 'price'])->name('tangoprice');
    Route::get('/tangopedido', [App\Http\Controllers\HomeController::class, 'pedido'])->name('tangopedido');
    Route::get('/price_dolar', [App\Http\Controllers\HomeController::class, 'price_dolar'])->name('price_dolar');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
});
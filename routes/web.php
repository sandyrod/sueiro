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
    return view('home');
});
Route::view('/nosotros', 'nosotros');
Route::view('/home', 'home');
Route::view('/request', 'request');
Route::view('/contact', 'contact');
Route::view('/orders', 'orders');
Route::view('/product', 'product');
Route::view('/product-list', 'product-list');


Route::post('/suscribe', [App\Http\Controllers\NewsletterController::class, 'store'])->name('suscribe');
Route::get('/tango', [App\Http\Controllers\HomeController::class, 'api'])->name('tango');
Route::get('/tangoprice', [App\Http\Controllers\HomeController::class, 'price'])->name('tangoprice');

Auth::routes();

Route::get('/category',        [App\Http\Controllers\HomeController::class, 'category'])->name('category');


/* Route::get('/products',        [App\Http\Controllers\HomeController::class, 'products'])->name('products'); */
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/remittances',     [App\Http\Controllers\HomeController::class, 'remittances'])->name('remittances');
Route::get('/order-history',   [App\Http\Controllers\HomeController::class, 'order_history'])->name('order-history');
Route::get('/quality',         [App\Http\Controllers\HomeController::class, 'quality'])->name('quality');
Route::get('/purchase-history',[App\Http\Controllers\HomeController::class, 'purchase_history'])->name('purchase_history');
Route::get('/favorites',       [App\Http\Controllers\HomeController::class, 'favorites'])->name('favorites');
Route::get('/shopping',        [App\Http\Controllers\HomeController::class, 'shopping'])->name('shopping');

Route::get('/cotizador',        [App\Http\Controllers\HomeController::class, 'cotizador'])->name('cotizador');

Route::post('contact',[App\Http\Livewire\Contact::class, 'store'])->name('contact.store');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\WebshopController;

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

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/webshop', [WebshopController::class, 'index'])->name('webshop.index');
Route::get('/webshop/{item}', [WebshopController::class, 'show'])->name('webshop.show');

Route::get('/shopping-cart', [ShoppingCartController::class, 'index'])->name('shopping-cart.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

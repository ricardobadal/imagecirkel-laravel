<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

//Register & Login Routes
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//HomeController Routes
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/cart', [HomeController::class, 'cart'])->name('home.cart');

// UserController Routes
Route::get('users', [UserController::class, 'index'])->name('users.index'); //view all users
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show'); //view single user
Route::get('users/{id}/edit', [UserController::class, 'update'])->name('users.edit'); //view edit user
//Route::get('users/{id}/delete', [UserController::class]);

//Testing Resource Product CRUD Routes (use php artisan route:list to view created routes)
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
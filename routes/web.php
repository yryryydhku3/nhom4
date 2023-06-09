<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\UriController;
use App\Http\Controllers\UserRegistration;
use Illuminate\Http\Reques;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product/index', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/showproduct', [ProductController::class, 'index1'])->name('products.index1');
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'postlogin'])->name('postlogin');

Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout'])->name('logout');




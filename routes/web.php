<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthrController;

 
//Authr
Route::group(['middleware' => 'guest'], function () {
Route::get('/register', [AuthrController::class, 'register'])->name('register');
Route::post('/register', [AuthrController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthrController::class, 'login'])->name('login');
Route::post('/login', [AuthrController::class, 'loginPost'])->name('login');
});


//product
Route::group(['middleware' => 'auth'], function () {
Route::resource('/product', \App\Http\Controllers\ProductController::class);
Route::get('/', [ProductController::class, 'index'])->name('index');
Route::delete('/logout', [AuthrController::class, 'logout'])->name('logout');
Route::get('/home', [ProductController::class, 'home'])->name('home');
Route::post('/create', [ProductController::class, 'create'])->name('create');
Route::get('/update', [ProductController::class, 'update'])->name('update');
Route::get('/edit/{gm}', [ProductController::class, 'edit'])->name('edit');
Route::get('/delete/{gm}', [ProductController::class, 'delete'])->name('delete');
});
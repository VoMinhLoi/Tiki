<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CatalogProductController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\ProductController;
use App\Models\Catalog;
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



Route::group(['prefix'=>'/'],function(){
    Route::get('', [CatalogController::class,'index'])->name('home');
    // Route::get('', [ProductController::class,'index']); không thể 
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});

Route::group(['prefix'=>'/detail/{product}'],function(){
    Route::get('', [ProductController::class,'detail'])->name('product.detail');
    Route::post('/login', [AuthController::class,'login'])->name('login');
});

Route::get('/formLogin', [AuthController::class,'formLogin'])->name('formLogin');
Route::post('/formLogin', [AuthController::class,'login'])->name('loginNoProduct');

Route::group(['middleware' => 'userLogin'], function() {
    Route::get('/cart',[CartController::class,'cart'])->name('cart');
});



Route::get('/register',[AuthController::class,'formRegister'])->name('formRegister');
Route::post('/register',[AuthController::class,'register'])->name('register');


Route::get('/auth/google',[AuthController::class,'redirectToGoogle']);
// Route::get('/auth/google/callback', 'AuthController@handleGoogleCallback');
Route::get('/auth/google/callback', [AuthController::class,'handleGoogleCallback']);


//Admin
Route::get('/ad',[ManageController::class,'index'])->name('admin');
Route::post('/admin',[ManageController::class,'insert'])->name('add');
Route::get('/admin/update/{brand}',[ManageController::class,'updateForm'])->name('updateForm');
Route::post('/admin/update/{brand}',[ManageController::class,'update'])->name('update');
Route::get('/admin/{brand}',[ManageController::class,'delete'])->name('delete');
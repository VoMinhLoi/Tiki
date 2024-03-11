<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CatalogProductController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    Route::post('', [CatalogController::class,'search'])->name('search');
    Route::put('', [ProductController::class,'filter'])->name('filter');
    // Route::get('', [ProductController::class,'index']); không thể 
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    Route::get('logoutAdmin',[AuthController::class,'logoutAdmin'])->name('logoutAdmin');
});

Route::group(['prefix'=>'/detail/{product}'],function(){
    Route::get('', [ProductController::class,'detail'])->name('product.detail');
});
Route::post('/login', [AuthController::class,'login'])->name('login');

Route::get('/formLogin', [AuthController::class,'formLogin'])->name('formLogin');
Route::post('/formLogin', [AuthController::class,'loginAdmin'])->name('loginAdmin');





Route::get('/register',[AuthController::class,'formRegister'])->name('formRegister');
Route::post('/register',[AuthController::class,'register'])->name('register');


Route::get('/auth/google',[AuthController::class,'redirectToGoogle']);
// Route::get('/auth/google/callback', 'AuthController@handleGoogleCallback');
Route::get('/auth/google/callback', [AuthController::class,'handleGoogleCallback']);

Route::group(['middleware' => 'userLogin'], function() {
    Route::get('/cart',[CartController::class,'cart'])->name('cart');
    Route::post('/cart',[CartController::class,'addCart'])->name('addCart');
    Route::post('/deliveryForm',[CartController::class,'addCartToDelivery'])->name('addCartToDelivery');
    Route::put('/cart/{cart}',[CartController::class,'updateCart'])->name('updateCart');
    Route::get('/cart/{cart}',[CartController::class,'deleteCart'])->name('deleteCart');

    
    Route::get('/deliveryForm/{cart}',[CartController::class,'deliveryForm'])->name('deliveryForm');
    Route::put('/deliveryForm/{cart}',[CartController::class,'updateCart2'])->name('updateCart2');
    Route::get('/orderInterface',[CartController::class,'orderInterface'])->name('orderInterface');
    Route::get('/orderInterface/{cart}',[CartController::class,'received'])->name('received');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile/{user}', [UserController::class, 'updateProfile'])->name('updateProfile');
});

//Admin

Route::group(['middleware'=> 'adminLogin'], function () {
    Route::group(['prefix'=>'/ad'],function(){
        Route::get('',[ManageController::class,'index'])->name('admin');
        Route::post('',[ManageController::class,'insertBrand'])->name('addBrand');
        Route::get('/catalog',[ManageController::class,'catalog'])->name('catalog');
        Route::post('/catalog',[ManageController::class,'insertCatalog'])->name('addCatalog');
        Route::get('/catalog/{catalog}',[ManageController::class,'deleteCatalog'])->name('deleteCatalog');
    
    
        Route::get('/product',[ManageController::class,'product'])->name('product');
        Route::get('/product/{product}',[ManageController::class,'deleteProduct'])->name('deleteProduct');
        Route::post('/product',[ManageController::class,'insertProduct'])->name('addProduct');
        Route::get('/user',[ManageController::class,'user'])->name('user');
        Route::get('/order',[ManageController::class,'order'])->name('order');
        Route::get('/user/{user}',[ManageController::class,'deleteUser'])->name('deleteUser');
        Route::post('/user',[ManageController::class,'addUser'])->name('addUser');
    });
    
    Route::group(['prefix'=> '/admin'],function(){
        Route::get('/update/{brand}',[ManageController::class,'updateFormBrand'])->name('updateFormBrand');
        Route::post('/update/{brand}',[ManageController::class,'updateBrand'])->name('updateBrand');
        Route::get('/{brand}',[ManageController::class,'deleteBrand'])->name('deleteBrand');
    });
});



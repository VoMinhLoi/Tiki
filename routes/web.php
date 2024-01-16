<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CatalogProductController;
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
});
Route::get('/', [CatalogController::class,'index']);
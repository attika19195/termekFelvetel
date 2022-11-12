<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, "home"])->name("home");
Route::get('/categories/{category}/manufacturers', [ProductController::class, "manufacturersOfCategory"])->name("manufacturers");
Route::post('/product/add', [ProductController::class, "add"])->name("products.add");



<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('master');
// });

Route::view("/login", "login");

Route::post("/login",[UserController::class, 'login']);
Route::get("/",[productController::class, 'index']);
Route::get("/detail/{id}",[productController::class, 'detail']);
Route::get("/search",[productController::class, 'search']);
Route::get("/cart",[productController::class, 'cart']);
Route::get("/logout",[productController::class, 'logout']);
Route::post("/add_to_cart",[productController::class, 'addToCart']);
Route::get("/remove_from_cart/{id}",[productController::class, 'removeFromCart']);

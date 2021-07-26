<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;

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

Route::view('/', 'login')->middleware("guest");
Route::post('/login', [AuthController::class, "login"])->middleware("guest");

Route::view('/home', 'home')->middleware("auth");

Route::post("/banner/store", [BannerController::class, "store"])->middleware("auth");
Route::post("/banner/update", [BannerController::class, "update"])->middleware("auth");
Route::post("/banner/delete", [BannerController::class, "delete"])->middleware("auth");
Route::get("/banner/fetch", [BannerController::class, "fetch"])->middleware("auth");

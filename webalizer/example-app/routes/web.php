<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

// use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
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

Route::get("/", [DemoController::class,"index"]);
Route::get("/about", [DemoController::class,"about"]);
Route::get("/courses", [DemoController::class,"courses"]);

Route::resource("photo", PhotoController::class);
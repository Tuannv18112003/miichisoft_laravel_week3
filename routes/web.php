<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, "index"])->name("home");

Route::prefix("/user")->name("user.")->group(function() {
    Route::get("/register", [UserController::class, "register"]);
    Route::post("/register", [UserController::class, "storeUser"])->name('register');
    Route::get("/login", [UserController::class, "loginForm"])->name("loginForm");
    Route::post("/login", [UserController::class, "login"])->name('login');
});

Route::prefix("/admin")->name("admin.")->group(function() {
    Route::get("/register", [AdminController::class, "register"]);
    Route::post("/register", [AdminController::class, "storeUser"])->name('register');
    Route::get("/login", [AdminController::class, "loginForm"])->name("loginForm");
    Route::post("/login", [AdminController::class, "login"])->name('login');
});

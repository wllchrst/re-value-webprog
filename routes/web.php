<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get("", [AuthController::class, "showLoginForm"]); // Root akan menampilkan halaman login
Route::get("/home", [HomeController::class, "getHomePage"])->name("home");
Route::get("/profile", [ProfileController::class, 'showProfilePage'])->name("profile");

// Rute autentikasi user
Route::prefix("user")->group(function () {
    // Halaman Register (GET) dan proses register (POST)
    Route::get("/register", [AuthController::class, "showRegisterForm"])->name("user.register.form");
    Route::post("/register", [AuthController::class, "register"])->name("user.register");

    // Halaman Login (GET) dan proses login (POST)
    Route::get("/login", [AuthController::class, "showLoginForm"])->name("user.login.form"); // Menampilkan form login
    Route::post("/login", [AuthController::class, "login"])->name("user.login"); // Memproses login

    // Proses logout (POST)
    Route::post("/logout", [AuthController::class, "logout"])->name("user.logout");

    // Update profil user (POST)
    Route::post("/update", [ProfileController::class, "updateUser"])->name("user.update");
});

// Rute untuk produk
Route::prefix("product")->group(function () {
    Route::get("", [ProductController::class, "getPage"])->name("product.getPage");
    Route::post('/store', [ProductController::class, "store"])->name("product.store");
    Route::get("/{id}", [ProductController::class, 'getDetail'])->name("product.detail");
    Route::get("/buy/{id}", [ProductController::class, 'buy'])->name("product.buy");
});

// Rute untuk item
Route::prefix("item")->group(function () {
    Route::get("", [ItemController::class, "getPage"])->name("item.getPage");
    Route::post('/store', [ItemController::class, "store"])->name("item.store");
    Route::get("/{id}", [ItemController::class, 'getDetail'])->name("item.detail");
    Route::get("/buy/{id}", [ItemController::class, 'buy'])->name("item.buy");
});

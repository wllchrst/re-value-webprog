<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get("", [AuthController::class, "showLoginForm"]);
Route::get("/home", [HomeController::class, "getHomePage"])->name("home");
Route::get("/profile", [ProfileController::class, 'showProfilePage'])->name("profile");

Route::prefix("user")->group(function () {
    // get pages
    Route::get("/register", [AuthController::class, "showRegisterForm"])->name("user.register");

    Route::post("/login", [AuthController::class, "login"])->name("user.login");
    Route::post("/register", [AuthController::class, "register"])->name("user.register");
    Route::post("/logout", [AuthController::class, "logout"])->name("user.logout");
    Route::post("/update", [ProfileController::class, "updateUser"])->name("user.update");
});

Route::prefix("product")->group(function () {
    Route::get("", [ProductController::class, "getPage"])->name("product.getPage");
    Route::post('/store', [ProductController::class, "store"])->name("product.store");
});

Route::prefix("item")->group(function () {
    Route::get("", [ItemController::class, "getPage"])->name("item.getPage");
    Route::post('/store', [ItemController::class, "store"])->name("item.store");
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get("", [AuthController::class, "showLoginForm"]);
Route::get("/home", [HomeController::class, "getHomePage"])->name("home");

Route::prefix("user")->group(function() {
    // get pages
    Route::get("/register", [AuthController::class, "showRegisterForm"])->name("user.register");

    Route::post("/login", [AuthController::class, "login"])->name("user.login");
    Route::post("/register", [AuthController::class,"register"])->name("user.register");
    Route::post("/logout", [AuthController::class, "logout"])->name("user.logout");
});

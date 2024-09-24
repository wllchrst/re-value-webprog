<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get("", [AuthController::class, "showLoginForm"]);

Route::prefix("user")->group(function() {
    // get pages
    Route::get("/register", [AuthController::class, "showRegisterForm"])->name("user.register");

    Route::post("/login", [AuthController::class, "login"])->name("user.login");
    Route::post("/register", [AuthController::class,"register"])->name("user.register");
});
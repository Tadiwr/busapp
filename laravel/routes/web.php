<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ClientAuthController;

Route::get('/', function () {

    if(auth()->user() == null) {
        return view('index');
    } else {
        if (auth()->user()->usertype == "ADMIN") {
            return redirect("/admin");
        } else {
            return redirect("/booking");
        }
    }

});

Route::get("/logout", function () {

    if (auth()->user()->usertype == "ADMIN") {
        Log::log("Admin User logged out", auth()->user()->id);
    } else {
        Log::log("Student logged out", auth()->user()->id);
    }

    auth()->logout();
    return redirect("/");
});

Route::prefix(("/admin"))->group(function () {

    // Show the login page "/admin/login"
    Route::get("/login", [AdminAuthController::class, "showLoginPage"]);
    // Get a post from a login

    Route::post("/login", [AdminAuthController::class, "login"])->name("login");


    Route::get("/", [AdminController::class, "index"])->middleware(["auth"]);

    Route::get("/logs", [LogController::class, "index"])->middleware(["auth"]);

});

Route::get("/booking", function () {

    if (auth()->user() == null) {
        return redirect("/");
    }

    return view("booking.index");
});

// "/auth/clients/login"

Route::post("/auth/clients/login",[ClientAuthController::class,"login"]);

Route::get("/auth/clients/register", [ClientAuthController::class, "showRegistrationPage"]);
Route::post("/auth/clients/register", [ClientAuthController::class, "register"]);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

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

use Inertia\Inertia;

Route::prefix('auth')->group(function() {
    Route::middleware('guest')->group(function() {
        Route::get("/login", [AuthController::class, 'loginView'])->name('login');
        Route::post("/login", [AuthController::class, 'login']);
        Route::get("/register", [AuthController::class, 'registerView']);
        Route::post("/register", [AuthController::class, 'register']);
    });
});

Route::middleware('auth')->group(function() {
    Route::post("/auth/logout", [AuthController::class, 'logout']);

    Route::get("/me/password-reset", [ProfileController::class, 'showPasswordReset']);
    Route::post("/me/password-reset", [ProfileController::class, 'resetPassword']);
    Route::get("/me/general", [ProfileController::class, 'showGeneralInfo']);
    Route::get("/", [HomeController::class, 'index']);
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function() {
    Route::post("/users", [UserController::class, 'store']);
    Route::get("/users", [UserController::class, 'index']);
    Route::put("/users/{id}", [UserController::class, 'update']);
});

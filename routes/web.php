<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes(); 

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::prefix('tasks')->name('tasks')->group(function() {
        Route::post('/', [TaskController::class, 'store'])->name('.store');
        Route::match(['put', 'patch'], '{id}', [TaskController::class, 'update'])->name('.update');
        Route::delete('{id}', [TaskController::class, 'destroy'])->name('.destroy');
    });
});

Route::middleware(['auth', 'user-access:admin,member'])->group(function () {
    Route::prefix('activities')->name('activities')->group(function() {
        Route::match(['put', 'patch'], '{id}', [ActivityController::class, 'createOrUpdate'])->name('.create-or-update');
    });
});
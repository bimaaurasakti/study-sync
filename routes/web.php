<?php

use App\Http\Controllers\HomeController;
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
    Route::post('/tasks', [HomeController::class, 'storeTask'])->name('tasks.store');
    Route::match(['put', 'patch'], '{id}', [ItemCategoryController::class, 'update'])->name('.update');
});
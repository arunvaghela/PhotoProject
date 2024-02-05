<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [PageController::class, 'home']);

Route::prefix('admin')->group(function () {
    // Define your admin routes here
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/form', [AdminController::class, 'form'])->name('admin.form');
    // Add more routes as needed
});

<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
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
Route::get('/service/{id}', [PageController::class, 'services'])->name('service');

Route::prefix('admin')->group(function () {
    // Define your admin routes here

    Route::get('/', [SliderController::class, 'index'])->name('admin.slider');
    Route::get('create', [SliderController::class, 'create'])->name('admin.create');
    Route::post('store', [SliderController::class, 'store'])->name('admin.store');
    Route::get('{id}/edit', [SliderController::class, 'edit'])->name('admin.edit');
    Route::put('{id}', [SliderController::class, 'update'])->name('admin.update');
    Route::delete('{id}', [SliderController::class, 'destroy'])->name('admin.destroy');

    Route::get('/services', [ServiceController::class, 'index'])->name('admin.services');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

});

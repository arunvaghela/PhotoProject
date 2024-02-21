<?php

use App\Http\Controllers\PortfolioController;
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
Route::get('/about', [PageController::class, 'about']);
Route::get('/service', [PageController::class, 'service']);
Route::get('/service/{id}', [PageController::class, 'services'])->name('service');
Route::get('/portfolio', [PageController::class, 'portfolio']);
Route::get('/portfolio/{id}', [PageController::class, 'portfolios'])->name('portfolio');
Route::get('/contact', [PageController::class, 'contact']);

Route::prefix('admin')->group(function () {
    // Define your admin routes here
    Auth::routes();

    Route::get('/', [SliderController::class, 'index'])->middleware('auth')->name('admin.slider');
    Route::get('create', [SliderController::class, 'create'])->middleware('auth')->name('admin.create');
    Route::post('store', [SliderController::class, 'store'])->middleware('auth')->name('admin.store');
    Route::get('{id}/edit', [SliderController::class, 'edit'])->middleware('auth')->name('admin.edit');
    Route::put('{id}', [SliderController::class, 'update'])->middleware('auth')->name('admin.update');
    Route::delete('{id}', [SliderController::class, 'destroy'])->middleware('auth')->name('admin.destroy');

    Route::get('/services', [ServiceController::class, 'index'])->middleware('auth')->name('admin.services');
    Route::get('/services/create', [ServiceController::class, 'create'])->middleware('auth')->name('admin.services.create');
    Route::post('/services/store', [ServiceController::class, 'store'])->middleware('auth')->name('admin.services.store');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->middleware('auth')->name('admin.services.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->middleware('auth')->name('admin.services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->middleware('auth')->name('admin.services.destroy');

    Route::get('/portfolio', [PortfolioController::class, 'index'])->middleware('auth')->name('admin.portfolio');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->middleware('auth')->name('admin.portfolio.create');
    Route::post('/portfolio/store', [PortfolioController::class, 'store'])->middleware('auth')->name('admin.portfolio.store');
    Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->middleware('auth')->name('admin.portfolio.edit');
    Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->middleware('auth')->name('admin.portfolio.update');
    Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->middleware('auth')->name('admin.portfolio.destroy');

});

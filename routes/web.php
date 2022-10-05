<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/movie/{movie:uuid}', 'detail')->name('detail');
    Route::get('/coming-soon', 'comingSoon')->name('soon');
});
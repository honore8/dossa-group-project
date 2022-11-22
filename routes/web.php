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
    Route::name('front.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/nos-realisations ', 'realization')->name('realization');
        Route::get('/nos-appartements ', 'appartement')->name('appartement');
        Route::get('/nos-plans ', 'plan')->name('plan');
        Route::get('/contact ', 'contact')->name('contact');
        Route::get('/qui-sommes-nous ', 'who')->name('who');
    });
});

Route::controller(AdminController::class)->group(function () {
    Route::name('admin.')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/ajouter-publication', 'addPost')->name('add.post');
    });
    });
});

<?php

use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [LoginController::class, 'create'])->name('index');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['prefix' => 'panel'], function () {
        Route::get('/', [DashboardController::class, 'create'])->name('create');
    });

    Route::group(['prefix' => 'colaboradores'], function () {
        Route::get('/', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
    });

    Route::group(['prefix' => 'cobranza'], function () {
        Route::get('/', [CotizacionController::class, 'create'])->name('create');
        Route::get('/list', [CotizacionController::class, 'index'])->name('list');
        Route::post('/store', [CotizacionController::class, 'store'])->name('store');
    });

});
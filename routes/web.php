<?php

/**
 * Rota Web
 */

use App\Http\Controllers\Web\WebController;

/**
 * Rota Admin
 */

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminSystemController;
use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\DashController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {
    Route::get('/', [WebController::class, 'home'])->name('home');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin Routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    /**
     * Formulário de Login
     */
    Route::get('/', [AuthController::class, 'ShowLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.do');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    /**
     * END Formulário de Login
     */
    Route::get('/dash', [DashController::class, 'index'])->name('dash');
    Route::get('/crm', [AdminSystemController::class, 'index'])->name('index');

    Route::get('/companies', [AdminSystemController::class, 'index'])->name('index');
    Route::post('/companies/store', [AdminSystemController::class, 'store'])->name('store');
});

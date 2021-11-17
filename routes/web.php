<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminSystemController;
use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});




Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
 /**
     * Formulário de Login
     */
    Route::get('/', [AuthController::class, 'ShowLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.do');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    /**
     * END Formulário de Login
     */
     Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/crm', [AdminSystemController::class, 'index'])->name('index');

    Route::resource('/companies', CompaniesController::class);
    Route::get('/companies', [AdminSystemController::class, 'index'])->name('index');
    Route::post('/companies/store', [AdminSystemController::class, 'store'])->name('store');

});

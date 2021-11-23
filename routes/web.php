<?php

/**
 * Rota Web
 */

use App\Http\Controllers\Web\WebController;

/**
 * Rota Admin
 */

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CampaignsController;
use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\ContractsController;
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
    Route::group(['middleware' => ['auth', 'auth.unique.user']], function () {
        Route::get('/dash', [DashController::class, 'index'])->name('dash');

        Route::get('profile/{id}', [AuthController::class, 'edit'])->name('edit');
        Route::post('profile/update', [AuthController::class, 'update'])->name('profile.update');
        /**
         * Rotas de empresas
         */
        Route::group(['prefix' => 'companies'], function () {
            Route::get('/', [CompaniesController::class, 'index'])->name('companies.index');
            Route::get('/create', [CompaniesController::class, 'create'])->name('companies.create');
            Route::get('edit/{uuid}', [CompaniesController::class, 'edit'])->name('edit');
            Route::post('edit/update', [CompaniesController::class, 'update'])->name('edit.update');
            Route::get('inactive/{id}', [CompaniesController::class, 'inactive'])->name('inactive.status');
            Route::post('/store', [CompaniesController::class, 'store'])->name('companies.store');
        });
        /**
         * END empresa    */

        //Inicio Rotas de campanha
        Route::group(['prefix' => 'campaigns'], function () {
            Route::get('/', [CampaignsController::class, 'index'])->name('campaigns.index');
            Route::get('/create', [CampaignsController::class, 'create'])->name('campaigns.create');
            Route::get('edit/{uuid}', [CampaignsController::class, 'edit'])->name('edit');
            Route::post('edit/update', [CampaignsController::class, 'update'])->name('edit.update');
            Route::post('/store', [CampaignsController::class, 'store'])->name('campaigns.store');
        });
        // Final Rotas de campanha

         /**
         * Rotas de contratos
         */
        Route::group(['prefix' => 'contracts'], function () {
            Route::get('/', [ContractsController::class, 'index'])->name('contracts.index');
            Route::get('/create', [ContractsController::class, 'create'])->name('contracts.create');
            Route::post('/store', [ContractsController::class, 'store'])->name('contracts.store');
        });
        /**
         * END contratos    */
    });
});

<?php

use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminproductController;

use Illuminate\Support\Facades\Route;
Route::name('admin.')->group(function(){
    Route::get('admin/login', [AdminloginController::class, 'login'])->name('login');
    Route::post('admin/do-login', [AdminloginController::class, 'doLogin'])->name('do.login');
    Route::middleware('auth:admins')->group(function(){
        Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('admin/logout', [AdminloginController::class, 'Logout'])->name('logout');
        Route::name('product.')->prefix('admin/products')->controller(AdminproductController::class)->group(function(){
        Route::get('/','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('save','save')->name('save');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::get('delete/{id}','delete')->name('delete');
    });

    });
});

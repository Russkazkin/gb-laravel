<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'welcome'])->name('home');

Route::resource('category', CategoryController::class);
Route::resource('news', NewsController::class);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', AdminController::class)->name('index');
    Route::resource('news', AdminNewsController::class);
    Route::resource('category', AdminCategoryController::class);
    Route::resource('dashboard', DashboardController::class);
});

require __DIR__.'/auth.php';

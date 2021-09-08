<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\Admin\SourceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'welcome'])->name('home');

Route::resource('category', CategoryController::class);
Route::resource('news', NewsController::class);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', AdminController::class)->name('index');
    Route::resource('user', UserController::class)->middleware(['admin', 'super']);
    Route::patch('/user/{user}/admin', [UserController::class, 'admin'])->name('user.admin')->middleware(['admin', 'super']);
    Route::resource('news', AdminNewsController::class)->middleware(['admin']);
    Route::resource('category', AdminCategoryController::class)->middleware(['admin']);
    Route::resource('source', SourceController::class)->middleware(['admin']);
    Route::resource('dashboard', DashboardController::class)->parameters(['dashboard' => 'user']);
    Route::get('/parser', ParserController::class)->name('parser');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => 'guest', 'prefix' => 'auth', 'as' => 'auth.'], function() {
    Route::get('/redirect/{social}', [SocialController::class, 'redirect'])->name('redirect');
    Route::get('/callback/{social}', [SocialController::class, 'callback'])->name('callback');
});

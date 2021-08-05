<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'welcome']);

Route::resource('category', CategoryController::class);

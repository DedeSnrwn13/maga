<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');

    Route::get('/details/{article_news:slug}', [FrontController::class, 'details'])->name('details');

    Route::get('category/{category:slug}', [FrontController::class, 'category'])->name('category');

    Route::get('/author/{author:slug}', [FrontController::class, 'author'])->name('author');

    Route::get('/search', [FrontController::class, 'search'])->name('search');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/articles', [ArticleController::class, 'index']);
    Route::get('/articles/{article}', [ArticleController::class, 'show']);
    
    Route::get('/admin', [AdminArticleController::class, 'index']);
    Route::get('/admin/articles', [AdminArticleController::class, 'list']);
    Route::get('/admin/articles/create', [AdminArticleController::class, 'create']);
    
    Route::post('/admin/articles', [ArticleController::class, 'store']);
    Route::get('/admin/articles/{article}/edit', [ArticleController::class, 'edit']);

    Route::put('/admin/articles/{article}', [ArticleController::class, 'update']);
    Route::delete('/admin/articles/{article}', [ArticleController::class, 'destroy']);
});


Auth::routes();

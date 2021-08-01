<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Editor\ArticleController;

Route::redirect('', 'editor/articles');

Route::resource('articles', ArticleController::class)->names('articles');

Route::post('articles/{article}/status', [ArticleController::class, 'status'])->name('articles.status');
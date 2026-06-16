<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Articles;

Route::get('/', function () {
    $articles = Articles::all();

    return view('pages.dashboard', compact('articles'));
});

Route::get('/artikel', function () {
    return view('pages.artikel');
});

Route::get('/article', [ArticleController::class, 'articles.show']);
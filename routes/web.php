<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GuestController;

Route::get('/', [GuestController::class, 'index'])->name('dashboard');

Route::get('/information', function () {
    return view('pages.information');
})->name('information');

Route::get('/artikel', function () {
    return view('pages.artikel');
});


Route::get('/articles/{slug}', [ArticleController::class, 'show'])
    ->name('articles.show');

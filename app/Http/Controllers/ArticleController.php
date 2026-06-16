<?php

namespace App\Http\Controllers;

use App\Models\Articles;

class ArticleController extends Controller
{
    public function show($slug)
    {
        $article = Articles::where('slug', $slug)->firstOrFail();

        $article->increment('views');

        return view('articles.show', compact('article'));
    }
}

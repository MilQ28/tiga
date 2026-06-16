<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Articles::latest()->get();

        return view('pages.dashboard', compact('articles'));
    }
}

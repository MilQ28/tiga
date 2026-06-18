<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Categories;


class GuestController extends Controller
{
    public function index()
    {
        $articles = Articles::where('status', 'published')
            ->latest()
            ->get();

        $spotlight = Articles::orderByDesc('views')->first();

        return view('pages.dashboard', compact('articles', 'spotlight'));
    }

    public function information()
    {
        $articleCount = Articles::where('status', 'published')->count();

        $categoryCount = Categories::count();

        $totalViews = Articles::where('status', 'published')
            ->sum('views');

        return view('pages.information', compact(
            'articleCount',
            'categoryCount',
            'totalViews'
        ));
    }
}

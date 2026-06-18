<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;


class GuestController extends Controller
{
    public function index()
    {
        $articles = Articles::where('status', 'published')
            ->latest()
            ->get();

        return view('pages.dashboard', compact('articles'));
    }
}

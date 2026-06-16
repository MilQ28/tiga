@extends('layouts.app')

@section('title')
    Home Page
@endsection

@section('content')
    <div>
        <h1>Articles</h1>
        <div>
            @foreach ($articles as $article)
                <a href="{{ route('articles.show', $article->slug) }}" class="card shadow-sm mb-4">
                    <div class="card-header">
                        {{ $article->title }}
                    </div>
                    <div class="card-body">
                        {{ \Illuminate\Support\Str::limit($article->content, 100) }}
                    </div>
                    <div>
                        {{ $article->views }}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection

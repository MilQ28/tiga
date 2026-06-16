@extends('layouts.app')

@section('title')
    Home Page
@endsection

@section('content')
    <div>
        <h1>Articles</h1>
        <div>
            @foreach ($articles as $article)
                <div class="card shadow-sm mb-4">
                    <div class="card-header">
                        {{ $article->title }}
                    </div>
                    <div class="card-body">
                        {{ $article->content }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

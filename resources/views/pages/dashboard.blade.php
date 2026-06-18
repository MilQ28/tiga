@extends('layouts.app')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="pt-18 mx-auto max-w-7xl">
        <h1 class="text-xl font-bold">Articles</h1>
        <div class="grid grid-cols-3 mt-4 ">
            @foreach ($articles as $article)
                <a href="{{ route('articles.show', $article->slug) }}" class="shadow-sm mb-4 bg-slate-200 max-w-sm rounded-sm p-4 border-2">
                    <div>
                        {{ $article->title }}
                    </div>
                    <div>
                        {{{ $article->status }}}
                    </div>
                    <div>
                        {!! \Illuminate\Support\Str::limit($article->content, 50) !!}
                    </div>
                    <div>
                        {{ $article->views }}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection

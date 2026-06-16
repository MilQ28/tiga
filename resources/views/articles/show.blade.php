@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold mb-6">
        Artikel Terbaru
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        @foreach ($articles as $article)

            <div class="bg-white border rounded-lg shadow hover:shadow-lg transition p-5">

                <h2 class="text-xl font-bold mb-2">
                    {{ $article->title }}
                </h2>

                <p class="text-gray-600 text-sm mb-3">
                    {{ \Illuminate\Support\Str::limit($article->content, 100) }}
                </p>

                <div class="text-xs text-gray-500 mb-3">
                    Views: {{ $articles->views }}
                </div>

                <a href="/artikel/{{ $article->slug }}"
                   class="text-blue-600 hover:underline">
                    Baca selengkapnya →
                </a>

            </div>

        @endforeach

    </div>
</div>
@endsection
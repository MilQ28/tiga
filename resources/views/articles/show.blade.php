@extends('layouts.app')

@section('content')
    <a href="/">Back?</a>
    <div class="max-w-7xl mx-auto px-6 py-10">

        <h1 class="text-3xl -bolfontd mb-6">
            {{ $article->title }}
        </h1>

        <hr>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white p-5">

                <article class="text-gray-600 text-sm mb-3 prose prose-lg porse-table:border-2 porse-table:border-black max-w-none min-w-6xl">
                    {!! $article->content !!}
                </article>

                <div class="text-xs text-gray-500 mb-3">
                    Views: {{ $article->views }}
                </div>

            </div>
        </div>
    @endsection

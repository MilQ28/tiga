@extends('layouts.app')

@section('title')
    Home Page
@endsection

@section('content')

    <div class="min-h-screen bg-slate-100">

        <div class="pt-24 mx-auto max-w-7xl px-5 pb-10">


            {{-- Spotlight --}}
            @if ($spotlight)
                <section class="bg-slate-900 text-white rounded-2xl p-8 shadow-xl">

                    <div class="flex justify-between items-start">

                        <div>

                            <span class="text-sm text-orange-400 font-semibold">
                                Hot Article
                            </span>


                            <h1 class="mt-3 text-3xl font-bold">
                                {{ $spotlight->title }}
                            </h1>


                            <p class="mt-3 text-gray-300 max-w-3xl line-clamp-2">
                                {{ Str::limit(strip_tags($spotlight->content), 180) }}
                            </p>

                        </div>

                    </div>


                    <div class="mt-6 flex items-center justify-between">

                        <span class="text-sm text-gray-400">
                            {{ $spotlight->views }} views
                        </span>


                        <a href="{{ route('articles.show', $spotlight->slug) }}"
                            class="bg-white text-black px-5 py-2 rounded-lg hover:bg-gray-200 transition">

                            Read Article

                        </a>

                    </div>

                </section>
            @endif



            {{-- Articles --}}
            <section class="mt-10">

                <h2 class="text-2xl font-bold mb-5">
                    More Articles
                </h2>


                @if ($articles->count())
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">


                        @foreach ($articles as $article)
                            <a href="{{ route('articles.show', $article->slug) }}"
                                class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition">


                                <h3 class="text-xl font-bold text-slate-900">
                                    {{ $article->title }}
                                </h3>


                                <p class="mt-3 text-gray-600 line-clamp-3">
                                    {{ Str::limit(strip_tags($article->content), 150) }}
                                </p>


                                <div class="mt-5 text-sm text-gray-500">
                                    {{ $article->views }} views
                                </div>


                            </a>
                        @endforeach


                    </div>
                @else
                    <p>
                        No articles available.
                    </p>
                @endif


            </section>


        </div>

    </div>

@endsection

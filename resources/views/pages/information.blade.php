@extends('layouts.app')

@section('title')
    Information
@endsection

@section('content')
    <div class="min-h-screen bg-slate-100">

        <div class="max-w-7xl mx-auto px-5 py-24">


            {{-- Introduction --}}
            <section class="bg-slate-900 text-white rounded-2xl p-8 shadow-lg">

                <h1 class="text-4xl font-bold">
                    About This Article Platform
                </h1>

                <p class="mt-4 text-gray-300 max-w-3xl">
                    Website ini merupakan platform berbagi artikel yang menyediakan
                    berbagai informasi, pengetahuan, dan tulisan menarik dalam
                    berbagai kategori.
                </p>

            </section>



            {{-- About --}}
            <section class="mt-10 bg-white rounded-2xl p-6 shadow">

                <h2 class="text-2xl font-bold">
                    About
                </h2>

                <p class="mt-3 text-gray-600">
                    Platform ini dibuat untuk memudahkan pengguna dalam membaca,
                    mencari, dan membagikan informasi melalui artikel digital.
                    Setiap artikel dapat berisi berita, edukasi, tutorial,
                    maupun pengalaman.
                </p>

            </section>



            {{-- Features --}}
            <section class="mt-10">

                <h2 class="text-2xl font-bold mb-5">
                    Features
                </h2>


                <div class="grid md:grid-cols-3 gap-5">


                    <div class="bg-white rounded-xl p-5 shadow">

                        <h3 class="font-bold text-lg">
                            Article Collection
                        </h3>

                        <p class="mt-2 text-gray-600">
                            Membaca berbagai artikel dengan kategori yang tersedia.
                        </p>

                    </div>


                    <div class="bg-white rounded-xl p-5 shadow">

                        <h3 class="font-bold text-lg">
                            Easy Reading
                        </h3>

                        <p class="mt-2 text-gray-600">
                            Tampilan sederhana agar pengguna nyaman membaca artikel.
                        </p>

                    </div>


                    <div class="bg-white rounded-xl p-5 shadow">

                        <h3 class="font-bold text-lg">
                            Article Management
                        </h3>

                        <p class="mt-2 text-gray-600">
                            Pengelolaan artikel dilakukan dengan sistem yang terstruktur.
                        </p>

                    </div>


                </div>

            </section>



            {{-- Statistics --}}
            <section class="mt-10 bg-white rounded-2xl p-6 shadow">

                <h2 class="text-2xl font-bold">
                    Platform Statistics
                </h2>


                <div class="grid md:grid-cols-3 gap-5 mt-5 text-center">

                    <div>
                        <h3 class="text-3xl font-bold">
                            {{ $articleCount }}
                        </h3>
                        <p class="text-gray-500">
                            Articles
                        </p>
                    </div>


                    <div>
                        <h3 class="text-3xl font-bold">
                            {{ $categoryCount }}
                        </h3>
                        <p class="text-gray-500">
                            Categories
                        </p>
                    </div>


                    <div>
                        <h3 class="text-3xl font-bold">
                            {{ $totalViews }}
                        </h3>
                        <p class="text-gray-500">
                            Total Views
                        </p>
                    </div>

                </div>

            </section>



            {{-- Contact --}}
            <section class="mt-10 bg-slate-900 text-white rounded-2xl p-6">

                <h2 class="text-2xl font-bold">
                    Contact
                </h2>

                <p class="mt-3 text-gray-300">
                    For questions or suggestions, contact our team through:
                </p>

                <p class="mt-2">
                    Email: {{ auth()->user()->email }}
                </p>

            </section>


        </div>

    </div>
@endsection

@include('footer')

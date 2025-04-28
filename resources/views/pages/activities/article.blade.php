@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <!-- Hero Section -->
    <section class="relative h-[500px] w-full">
        <img src="{{ asset('assets/images/banner/banner-article.webp') }}" alt="Articles" class="object-cover brightness-50 w-full h-full">
        <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
            <h1 class="mb-4 text-4xl font-bold md:text-5xl">Articles & Resources</h1>
            <p class="max-w-2xl text-lg">Informative content to guide you on your spiritual journey</p>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="bg-white py-16">
        <div class="container px-4 mx-auto md:px-6">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($articles as $article)
                <x-card class="overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative h-48">
                        <img src="{{ $article['image'] ?? '/images/article-placeholder.jpg' }}" alt="{{ $article['title'] }}" class="object-cover w-full h-full">
                        <div class="absolute left-2 top-2 rounded-full bg-emerald-600 px-3 py-1 text-xs font-medium text-white">
                            {{ $article['category'] }}
                        </div>
                    </div>
                    <x-card.header>
                        <x-card.title>{{ $article['title'] }}</x-card.title>
                        <x-card.description>{{ $article['excerpt'] }}</x-card.description>
                    </x-card.header>
                    <x-card.content>
                        <div class="flex items-center gap-4 text-sm text-gray-500">
                            <div class="flex items-center gap-1">
                                <i class="fa-regular fa-calendar text-emerald-600"></i>
                                <span>{{ $article['date'] }}</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i class="fa-regular fa-user text-emerald-600"></i>
                                <span>{{ $article['author'] }}</span>
                            </div>
                        </div>
                    </x-card.content>
                    <x-card.footer>
                        <a href="/articles/{{ $article['slug'] }}" class="w-full inline-flex items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                            Read More <i class="fa-solid fa-arrow-right ml-2 text-emerald-600"></i>
                        </a>
                    </x-card.footer>
                </x-card>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <div class="flex gap-2">
                    <button class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 disabled:opacity-50" disabled>
                        Previous
                    </button>
                    <button class="inline-flex items-center rounded-md border border-emerald-600 bg-emerald-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-emerald-700">
                        1
                    </button>
                    <button class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                        2
                    </button>
                    <button class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                        3
                    </button>
                    <button class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

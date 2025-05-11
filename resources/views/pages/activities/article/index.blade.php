@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[500px] w-full">
            <img src="{{ asset('storage/' . $banner->image_path) }}" alt="Articles"
                class="object-cover brightness-50 w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl">{{ $banner->title }}</h1>
                <p class="max-w-2xl text-lg">{{ $banner->subtitle }}</p>
            </div>
        </section>

        <!-- Articles Section -->
        <section class="bg-white py-16">
            <div class="container px-4 mx-auto md:px-6">
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($articles as $article)
                        <x-card class="overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="relative h-48">
                                <img src="{{ asset('storage/' . $article->cover_image) ?? '/images/article-placeholder.jpg' }}"
                                    alt="{{ $article->title }}" class="object-cover w-full h-full">
                            </div>
                            <x-card.header class="min-h-40">
                                <x-card.title>{{ $article->title }}</x-card.title>
                                <x-card.description>{{ Str::limit(strip_tags($article->content), 200, '...') }}</x-card.description>
                            </x-card.header>
                            <x-card.content>
                                <div class="flex items-center gap-4 text-sm text-gray-500">
                                    <div class="flex items-center gap-1">
                                        <i class="fa-regular fa-calendar text-emerald-600"></i>
                                        <span>{{ Carbon\Carbon::parse($article->created_at)->format('d M Y') }}</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <i class="fa-regular fa-user text-emerald-600"></i>
                                        <span>Administrator</span>
                                    </div>
                                </div>
                            </x-card.content>
                            <x-card.footer>
                                <a href="{{ route('fe.activities.article-detail', $article->slug) }}"
                                    class="w-full inline-flex items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                                    Read More <i class="fa-solid fa-arrow-right ml-2 text-emerald-600"></i>
                                </a>
                            </x-card.footer>
                        </x-card>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection

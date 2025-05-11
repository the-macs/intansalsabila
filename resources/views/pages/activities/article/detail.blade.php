@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[500px] w-full">
            <img src="{{ asset($article->cover_image) }}" alt="Articles" class="object-cover brightness-50 w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl">{{ $article->title }}</h1>
                <p class="max-w-2xl text-lg">
                    <i class="fa fa-fw fa-clock"></i>
                    {{ Carbon\Carbon::parse($article->created_at)->format('d M Y') }}
                </p>
            </div>
        </section>
        <!-- Articles Section -->
        <section class="bg-white pb-16 pt-8">
            <div class="flex flex-col px-4 mx-auto md:px-6 justify-center items-center">
                <article class="prose">
                    {!! $article->content !!}
                </article>
                <a href="{{ route('fe.activities.article') }}"
                    class="flex items-center gap-2 mr-4 mt-10 px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                    <i class="fas fa-arrow-left fa-sm"></i>
                    Back to Articles
                </a>
            </div>
        </section>
    </div>
@endsection

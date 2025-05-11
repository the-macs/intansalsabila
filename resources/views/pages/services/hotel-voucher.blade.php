@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <!-- Hero Section -->
    <section class="relative h-[300px] w-full">
        <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-slate-600">
            <h1 class="mb-4 text-4xl font-bold md:text-5xl">{{ $banner->title }}</h1>
            <p class="max-w-2xl text-lg">{{ $banner->subtitle }}</p>
        </div>
    </section>

    <!-- hotel Images -->
    <section class="bg-white">
        <div class="px-4 md:px-6">
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 items-center justify-center">
                @foreach ($hotels as $hotel)
                <img src="{{ asset('storage/' . $hotel->image_path) }}" alt="{{ basename($hotel->name) }}" title="{{ $hotel->name }}" class="w-full transition-transform duration-300 group-hover:scale-110 p-14" />
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection

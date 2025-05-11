@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[500px] w-full">
            <img src="{{ asset($banner->image_path) }}" alt="Gallery"
                class="absolute h-full w-full object-cover brightness-50">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl">{{ $banner->title }}</h1>
                <p class="max-w-2xl text-lg">{{ $banner->subtitle }}</p>
            </div>
        </section>

        <!-- Gallery Galleries Section -->
        <section class="bg-white py-16">
            <div class="container px-4 md:px-6 mx-auto">
                <div class="mb-8 text-center">
                    <h2 class="text-3xl font-bold">Galeri Foto</h2>
                    <p class="mt-2 text-gray-500">Pilih koleksi untuk melihat semua foto</p>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($galleries as $gallery)
                        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-sm">
                            <div class="relative h-48">
                                <img src="{{ asset($gallery->images[0]) }}" alt="{{ $gallery->title }}"
                                    class="h-full w-full object-cover transition-transform duration-300 hover:scale-105">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold">{{ $gallery->title }}</h3>
                                <p class="mt-2 text-gray-600">{{ $gallery->description }}</p>

                                <div class="mt-4 flex flex-col space-y-2 text-sm">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-calendar-days text-emerald-600 w-4"></i>
                                        <span>{{ $gallery->date }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-map-marker-alt text-emerald-600 w-4"></i>
                                        <span>{{ $gallery->location }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-image text-emerald-600 w-4"></i>
                                        <span>{{ $gallery->imageCount }} photos</span>
                                    </div>
                                </div>

                                <a href="{{ route('fe.activities.gallery-detail', $gallery['slug']) }}"
                                    class="mt-6 inline-flex w-full items-center justify-center rounded-md bg-emerald-600 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                                    View Collection
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection

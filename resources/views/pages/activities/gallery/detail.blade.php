@extends('layouts.app')

@section('content')
    {{-- @dd($gallery) --}}
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[500px] w-full">
            <img src="{{ asset($gallery->images[0]) }}" alt="{{ $gallery->title }}"
                class="object-cover brightness-50 w-full h-full" />
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl">{{ $gallery->title }}</h1>
                <p class="max-w-2xl text-lg">{{ $gallery->description }}</p>
            </div>
        </section>

        <!-- Gallery Info -->
        <section class="bg-white py-8">
            <div class="container px-4 md:px-6">
                <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0">
                    <a href="{{ route('fe.activities.gallery') }}"
                        class="flex items-center gap-2 mr-4 px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                        <i class="fas fa-arrow-left fa-sm"></i>
                        Back to Collections
                    </a>

                    <div class="flex items-center gap-6">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-calendar-day text-emerald-600"></i>
                            <span>{{ $gallery['date'] }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-map-marker-alt text-emerald-600"></i>
                            <span>{{ $gallery['location'] }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-image text-emerald-600"></i>
                            <span>{{ count($gallery['images']) }} photos</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Images -->
        <section class="bg-white py-8">
            <div class="px-4 md:px-6">
                <!-- Center the grid by using flex with justify-center -->
                <div
                    class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 items-center justify-center">
                    @foreach ($gallery['images'] as $index => $image)
                        <div x-data="{ open: false }" key="{{ $index }}">
                            <div class="group relative cursor-pointer overflow-hidden rounded-lg" @click="open = true">
                                <img src="{{ asset($image) }}" alt="{{ $gallery['title'] . ' - ' . $index }}"
                                    class="h-64 w-full object-cover transition-transform duration-300 group-hover:scale-110" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <p class="text-center text-white">View Image</p>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4"
                                @click.away="open = false">
                                <div class="relative w-full max-w-3xl">
                                    <button @click="open = false"
                                        class="absolute -top-10 right-0 text-white hover:text-gray-200">
                                        <i class="fas fa-times fa-lg"></i>
                                    </button>
                                    <div class="relative h-[60vh] bg-gray-800">
                                        <img src="{{ asset($image) }}" alt="{{ $gallery['title'] . ' - ' . $index }}"
                                            class="object-contain w-full h-full" />
                                    </div>
                                    @if (isset($image['caption']))
                                        <p class="mt-2 text-center text-white">{{ $image['caption'] }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection

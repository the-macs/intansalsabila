@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[400px] w-full">
            <img src="{{ asset('storage/' . $banner->image_path) }}" alt="Hajj Packages"
                class="object-cover brightness-50 w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl">{{ $banner->title }}</h1>
                <p class="max-w-2xl text-lg">{{ $banner->subtitle }}</p>
            </div>
        </section>

        <!-- Packages Section -->
        @foreach ($hajj_packages as $h_pack)
            <section class="container mx-auto px-4 py-8 bg-white">
                <div class="flex flex-col md:flex-row gap-6">
                    <!-- Image Column -->
                    <div class="w-full md:w-2/5 flex justify-center md:justify-end md:items-start">
                        <img src="{{ asset('storage/' . $h_pack->brochure) }}" alt="Hajj Package"
                            class="w-full max-w-[300px] md:max-w-[350px] h-auto rounded-lg shadow-lg object-cover"
                            width="725" height="1024" loading="lazy">
                    </div>

                    <!-- Content Column -->
                    <div class="w-full md:w-3/5 space-y-4">
                        <h2 class="text-3xl font-bold text-gray-800">{{ $h_pack->title }}</h2>

                        <p class="text-lg text-gray-600">Keberangkatan : {{ $h_pack->embarkation }}</p>

                        <h2 class="text-2xl font-bold text-primary-600 mb-3">Harga Mulai : {{ $h_pack->starting_price }}
                        </h2>

                        <p class="text-lg font-semibold text-gray-600">{{ $h_pack->sub_info }}</p>

                        <!-- Accordion -->
                        <div class="space-y-2">
                            <!-- Detail Paket -->
                            <div x-data="{ open: true }" class="border border-gray-200 rounded-lg overflow-hidden">
                                <button @click="open = !open"
                                    class="w-full px-4 py-3 text-left bg-gray-50 hover:bg-gray-100 transition-colors flex items-center justify-between">
                                    <div class="flex items-center">
                                        <span x-show="!open" class="mr-2">▶</span>
                                        <span x-show="open" class="mr-2">▼</span>
                                        <span class="font-medium text-sm">DETAIL PAKET</span>
                                    </div>
                                </button>
                                <div x-show="open" x-collapse class="px-4 py-3 bg-white space-y-2">
                                    {!! $h_pack->detail_package !!}
                                </div>
                            </div>

                            <!-- Paket Termasuk -->
                            @if ($h_pack->incl_package)
                                <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                                    <button @click="open = !open"
                                        class="w-full px-4 py-3 text-left bg-gray-50 hover:bg-gray-100 transition-colors flex items-center justify-between">
                                        <div class="flex items-center">
                                            <span x-show="!open" class="mr-2">▶</span>
                                            <span x-show="open" class="mr-2">▼</span>
                                            <span class="font-medium text-sm">PAKET TERMASUK</span>
                                        </div>
                                    </button>
                                    <div x-show="open" x-collapse class="px-4 py-3 bg-white">
                                        {!! $h_pack->incl_package !!}
                                    </div>
                                </div>
                            @endif

                            <!-- Paket Tidak Termasuk -->
                            @if ($h_pack->excl_package)
                                <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                                    <button @click="open = !open"
                                        class="w-full px-4 py-3 text-left bg-gray-50 hover:bg-gray-100 transition-colors flex items-center justify-between">
                                        <div class="flex items-center">
                                            <span x-show="!open" class="mr-2">▶</span>
                                            <span x-show="open" class="mr-2">▼</span>
                                            <span class="font-medium text-sm">PAKET TIDAK TERMASUK</span>
                                        </div>
                                    </button>
                                    <div x-show="open" x-collapse class="px-4 py-3 bg-white">
                                        {!! $h_pack->excl_package !!}
                                    </div>
                                </div>
                            @endif

                            <!-- Perlengkapan -->
                            @if ($h_pack->incl_equipment)
                                <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                                    <button @click="open = !open"
                                        class="w-full px-4 py-3 text-left bg-gray-50 hover:bg-gray-100 transition-colors flex items-center justify-between">
                                        <div class="flex items-center">
                                            <span x-show="!open" class="mr-2">▶</span>
                                            <span x-show="open" class="mr-2">▼</span>
                                            <span class="font-medium text-sm">PERLENGKAPAN</span>
                                        </div>
                                    </button>
                                    <div x-show="open" x-collapse class="px-4 py-3 bg-white">
                                        {!! $h_pack->incl_equipment !!}
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Button -->
                        <div class="pt-4">
                            <a href="http://wa.me/{{ $company_info->whatsapp }}" target="_blank"
                                class="inline-block px-6 py-2 bg-green-500 text-black font-semibold rounded-lg hover:bg-green-600 transition-colors text-center items-start">
                                <i class="fa-brands fa-whatsapp text-lg"></i>
                                Klik Untuk Daftar
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection

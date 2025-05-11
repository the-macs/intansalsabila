@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[400px] w-full">
            <img src="{{ asset($banner->image_path) }}" alt="About Us" class="object-cover brightness-50 w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl">{{ $banner->title }}</h1>
                <p class="max-w-2xl text-lg">{{ $banner->subtitle }}</p>
            </div>
        </section>

        <!-- Our Story -->
        <section class="bg-white py-16">
            <div class="container px-4 md:px-6 mx-auto">
                <div class="grid gap-12 grid-cols-1 md:grid-cols-2">
                    <div class="flex justify-center items-center h-full">
                        <img src="{{ asset($company_info->company_logo['main_logo']) }}"
                            alt="{{ basename($company_info->company_logo['main_logo']) }}" title="{{ $company_info->name }}"
                            class="object-contain w-[75%] h-auto">
                    </div>

                    <div class="flex flex-col justify-center">
                        <div class="prose">
                            {!! $company_info->about_us !!}
                        </div>
                        <a data-fancybox data-type="pdf"
                            class="bg-intan-secondary hover:bg-intan-primary transition-all duration-200 text-white font-bold py-2 px-4 rounded mt-4"
                            href="{{ asset('storage/' . $company_info->company_profile) }}">Lihat Profil
                            Perusahaan</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Commitment -->
        <section class="bg-slate-50 py-16">
            <div class="container px-4 md:px-6 mx-auto">
                <div class="mb-12 text-center">
                    <h2 class="mb-2 text-3xl font-bold">Komitmen Kami</h2>
                    <p class="mx-auto max-w-2xl text-gray-500">Prinsip yang memandu semua yang kami lakukan</p>
                </div>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2">
                    {{-- Visi --}}
                    <x-card>
                        <x-card.content class="flex flex-col p-6">
                            <h2 class="mb-6 text-2xl font-bold">Visi</h2>
                            <div class="space-y-4">
                                <div class="prose flex space-x-4">
                                    {!! $company_info->vision !!}
                                </div>
                            </div>
                        </x-card.content>
                    </x-card>

                    {{-- Misi --}}
                    <x-card>
                        <x-card.content class="flex flex-col p-6">
                            <h2 class="mb-6 text-2xl font-bold">Misi</h2>
                            <div class="prose space-y-4">
                                {!! $company_info->mission !!}
                            </div>
                        </x-card.content>
                    </x-card>
                </div>
            </div>
        </section>

        <!-- Legality -->
        <section class="bg-white py-16">
            <div class="container px-4 md:px-6 mx-auto">
                <div class="mb-12 text-center">
                    <h2 class="mb-2 text-3xl font-bold">Legalitas</h2>
                    <p class="mx-auto max-w-2xl text-gray-500">
                        Kami secara resmi diakui secara legal oleh otoritas terkait
                    </p>
                </div>
                <div class="legality-slider">
                    @foreach ($certifications as $certification)
                        <div class="flex">
                            <img src="{{ asset('storage/' . $certification->image_path) }}" alt="{{ $certification->name }}"
                                class="max-w-14 sm:max-w-38 object-contain mx-auto">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection

@push('body-scripts')
    <script>
        $('.legality-slider').slick({
            centerMode: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>

    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
@endpush

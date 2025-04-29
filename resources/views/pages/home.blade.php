@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[500px] w-full">
            <img src="{{ asset('assets/images/banner/banner-home.webp') }}" alt="Kaaba in Mecca"
                class="object-cover object-bottom brightness-50 w-full h-full bg-slate-500">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl lg:text-6xl">Your Journey to Sacred Lands</h1>
                <p class="mb-8 max-w-2xl text-lg md:text-xl">
                    Experience the spiritual journey of a lifetime with our premium Hajj and Umrah packages
                </p>
                <div class="flex flex-col gap-4 sm:flex-row">
                    <a href="/packages/umrah"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg text-lg px-6 py-3 text-center">
                        Explore Umrah Packages
                    </a>
                    <a href="/packages/hajj"
                        class="border border-white text-white hover:bg-white/10 font-medium rounded-lg text-lg px-6 py-3 text-center">
                        View Hajj Packages
                    </a>
                </div>
            </div>
        </section>

        <!-- Featured Packages -->
        <section class="bg-white py-16">
            <div class="container px-4 md:px-6 mx-auto">
                <div class="mb-12 text-center">
                    <h2 class="mb-2 text-3xl font-bold md:text-4xl">Paket Haji / Umrah</h2>
                    <p class="mx-auto max-w-2xl text-gray-500">
                        Pilih dari paket kami yang dirancang dengan cermat untuk memenuhi kebutuhan dan preferensi Anda
                    </p>
                </div>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 item justify-center lg:max-w-3/4 mx-auto">
                    <!-- Umrah Package -->
                    <x-card class="overflow-hidden w-1/2">
                        <div class="relative">
                            <img src="{{ asset('assets/images/package/umrah/' . $latest_umrah_package['brochure']) }}"
                                alt="Umrah Package" class="object-cover h-full">
                        </div>
                        <x-card.header>
                            <x-card.title>{{ $latest_umrah_package['title'] }}</x-card.title>
                            <x-card.description>Keberangkatan:
                                {{ $latest_umrah_package['embarkation'] }}</x-card.description>
                        </x-card.header>
                        <x-card.content>
                            <div class="mb-4 space-y-2">
                                {!! $latest_umrah_package['detail_package'] !!}
                            </div>
                        </x-card.content>
                        <x-card.footer>
                            <a href="{{ route('fe.packages.umrah') }}"
                                class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg px-4 py-2 text-center block">
                                View Details
                            </a>
                        </x-card.footer>
                    </x-card>

                    <!-- Hajj Package -->
                    <x-card class="overflow-hidden">
                        <div class="relative">
                            <img src="{{ asset('assets/images/package/haji/' . $latest_hajj_package['brochure']) }}"
                                alt="Umrah Package" class="object-cover w-full h-full">
                        </div>
                        <x-card.header>
                            <x-card.title>{{ $latest_hajj_package['title'] }}</x-card.title>
                            <x-card.description>{{ $latest_hajj_package['sub_info'] }}</x-card.description>
                        </x-card.header>
                        <x-card.content>
                            <div class="mb-4 space-y-2">
                                {!! $latest_hajj_package['detail_package'] !!}
                            </div>
                        </x-card.content>
                        <x-card.footer>
                            <a href="{{ route('fe.packages.hajj') }}"
                                class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg px-4 py-2 text-center block mt-auto">
                                View Details
                            </a>
                        </x-card.footer>
                    </x-card>

                </div>
            </div>
        </section>

        <section id="services" class="py-16 bg-slate-50">
            <div class="container mx-auto px-4">
                <div class="text-center animate-fade-in-down">
                    <h2 class="text-3xl font-bold mb-4">Mengapa Memilih Kami</h2>
                    <p class="text-lg text-gray-600 mb-12">Banyak penyedia layanan Umrah dan Haji Khusus. <br> Apa perbedaan
                        kami?</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div class="animate-fade-in-down">
                        <div
                            class="flex items-start bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex-shrink-0 mr-6">
                                <img class="w-16 h-16 object-contain" src="{{ asset('assets/images/icon/lifebuoy.png') }}"
                                    alt="20 Tahun Berdiri">
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">20 Tahun Berdiri</h3>
                                <p class="text-gray-600">Pembimbing yang sudah berpengalaman menjadikan ibadah Anda semakin
                                    khusyu'</p>
                            </div>
                        </div>
                    </div>

                    <div class="animate-fade-in-down">
                        <div
                            class="flex items-start bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex-shrink-0 mr-6">
                                <img class="w-16 h-16 object-contain" src="{{ asset('assets/images/icon/pie.png') }}"
                                    alt="Semua Kebutuhan">
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Semua Kebutuhan</h3>
                                <p class="text-gray-600">Sendiri atau berkelompok, jauh atau dekat, semua bisa kami
                                    akomodasi</p>
                            </div>
                        </div>
                    </div>

                    <div class="animate-fade-in-down">
                        <div
                            class="flex items-start bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex-shrink-0 mr-6">
                                <img class="w-16 h-16 object-contain" src="{{ asset('assets/images/icon/clock.png') }}"
                                    alt="Cepat Tanggap">
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Cepat Tanggap</h3>
                                <p class="text-gray-600">Layanan yang cepat dan sesuai dengan kebutuhan travel Anda</p>
                            </div>
                        </div>
                    </div>

                    <div class="animate-fade-in-down">
                        <div
                            class="flex items-start bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex-shrink-0 mr-6">
                                <img class="w-16 h-16 object-contain" src="{{ asset('assets/images/icon/gadget.png') }}"
                                    alt="Mudah Diakses">
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Mudah Diakses</h3>
                                <p class="text-gray-600">Sistem informasi pemesanan yang bisa Anda akses di mana saja dan
                                    kapan saja</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="bg-white py-16">
            <div class="container px-4 md:px-6 mx-auto">
                <div class="mb-12 text-center">
                    <h2 class="mb-2 text-3xl font-bold md:text-4xl">Testimoni</h2>
                    <p class="mx-auto max-w-2xl text-gray-500">
                        Baca tentang pengalaman orang-orang yang telah bepergian bersama kami
                    </p>
                </div>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <x-card class="bg-slate-50">
                        <x-card.content class="pt-6">
                            <div class="flex flex-col gap-4">
                                <div class="flex">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </div>
                                <p class="italic">
                                    "Al-Baraka made my Umrah journey smooth and spiritually fulfilling. The accommodations
                                    were
                                    excellent, and the guides were knowledgeable and helpful."
                                </p>
                                <div class="flex items-center gap-4">
                                    <div class="relative h-12 w-12 overflow-hidden rounded-full">
                                        <img src="/placeholder.svg" alt="Ahmed" class="object-cover w-full h-full">
                                    </div>
                                    <div>
                                        <p class="font-semibold">Ahmed Hassan</p>
                                        <p class="text-sm text-gray-500">Dubai, UAE</p>
                                    </div>
                                </div>
                            </div>
                        </x-card.content>
                    </x-card>

                    <x-card class="bg-slate-50">
                        <x-card.content class="pt-6">
                            <div class="flex flex-col gap-4">
                                <div class="flex">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </div>
                                <p class="italic">
                                    "My Hajj experience with Al-Baraka was beyond expectations. Everything was
                                    well-organized, and the
                                    staff was attentive to our needs throughout the journey."
                                </p>
                                <div class="flex items-center gap-4">
                                    <div class="relative h-12 w-12 overflow-hidden rounded-full">
                                        <img src="/placeholder.svg" alt="Fatima" class="object-cover w-full h-full">
                                    </div>
                                    <div>
                                        <p class="font-semibold">Fatima Ali</p>
                                        <p class="text-sm text-gray-500">Abu Dhabi, UAE</p>
                                    </div>
                                </div>
                            </div>
                        </x-card.content>
                    </x-card>

                    <x-card class="bg-slate-50">
                        <x-card.content class="pt-6">
                            <div class="flex flex-col gap-4">
                                <div class="flex">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </div>
                                <p class="italic">
                                    "I've traveled with several Hajj providers, but Al-Baraka stands out for their attention
                                    to detail
                                    and exceptional service. Highly recommended!"
                                </p>
                                <div class="flex items-center gap-4">
                                    <div class="relative h-12 w-12 overflow-hidden rounded-full">
                                        <img src="/placeholder.svg" alt="Mohammed" class="object-cover w-full h-full">
                                    </div>
                                    <div>
                                        <p class="font-semibold">Mohammed Rahman</p>
                                        <p class="text-sm text-gray-500">Sharjah, UAE</p>
                                    </div>
                                </div>
                            </div>
                        </x-card.content>
                    </x-card>
                </div>
            </div>
        </section>
    </div>
@endsection

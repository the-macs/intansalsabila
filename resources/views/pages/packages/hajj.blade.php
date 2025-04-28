@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[400px] w-full">
            <img src="{{ asset('assets/images/banner/banner-hajj.webp') }}" alt="Hajj Packages"
                class="object-cover brightness-50 w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl">Hajj Packages</h1>
                <p class="max-w-2xl text-lg">Embark on the journey of a lifetime with our comprehensive Hajj packages</p>
            </div>
        </section>

        <!-- Packages Section -->
        @foreach ($hajj_packages as $h_pack)
            <section class="container mx-auto px-4 py-8 bg-white">
                <div class="flex flex-col md:flex-row gap-6">
                    <!-- Image Column - Made smaller by flex -->
                    <div class="w-full md:w-2/5 flex justify-center md:justify-end md:items-start">
                        <img src="{{ asset('assets/images/package/haji/' . $h_pack['brochure']) }}" alt="Hajj Package"
                            class="w-full max-w-[300px] md:max-w-[350px] h-auto rounded-lg shadow-lg object-cover"
                            width="725" height="1024" loading="lazy">
                    </div>

                    <!-- Content Column - Made larger by flex -->
                    <div class="w-full md:w-3/5 space-y-4">
                        <h2 class="text-3xl font-bold text-gray-800">{{ $h_pack['title'] }}</h2>

                        <p class="text-lg text-gray-600">Keberangkatan : {{ $h_pack['embarkation'] }}</p>

                        <h2 class="text-2xl font-bold text-primary-600 mb-3">Harga Mulai : {{ $h_pack['starting_price'] }}
                        </h2>

                        <p class="text-lg font-semibold text-gray-600">{{ $h_pack['sub_info'] }}</p>

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
                                    {!! $h_pack['detail_package'] !!}
                                </div>
                            </div>

                            <!-- Paket Termasuk -->
                            @empty(!$h_pack['incl_package'])
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
                                        {!! $h_pack['incl_package'] !!}
                                    </div>
                                </div>
                            @endempty

                            <!-- Paket Tidak Termasuk -->
                            @empty(!$h_pack['excl_package'])
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
                                        {!! $h_pack['excl_package'] !!}
                                    </div>
                                </div>
                            @endempty

                            <!-- Perlengkapan -->
                            @empty(!$h_pack['incl_equipment'])
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
                                        {!! $h_pack['incl_equipment'] !!}
                                    </div>
                                </div>
                            @endempty
                        </div>

                        <!-- Button -->
                        <div class="pt-4">
                            <a href="http://wa.me/6289680882790" target="_blank"
                                class="inline-block px-6 py-2 bg-green-500 text-black font-semibold rounded-lg hover:bg-green-600 transition-colors text-center items-start">
                                <i class="fa-brands fa-whatsapp text-lg"></i>
                                Klik Untuk Daftar
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach

        <!-- Hajj Information Section -->
        <section class="bg-gray-50 py-16">
            <div class="container px-4 mx-auto md:px-6">
                <div class="mb-12 text-center">
                    <h2 class="mb-2 text-3xl font-bold">Tentang Haji</h2>
                    <p class="mx-auto max-w-2xl text-gray-600">
                        Memahami makna dan syarat-syarat haji suci
                    </p>
                </div>
                <div class="grid gap-8 md:grid-cols-2">
                    <div>
                        <h3 class="mb-4 text-xl font-semibold">Apa itu Haji?</h3>
                        <p class="mb-4 text-gray-700">
                            Haji (Bahasa Arab: حج‎; transliterasi: Hajj) adalah rukun (tiang agama) Islam yang kelima
                            setelah syahadat, salat, zakat dan puasa. Menunaikan ibadah haji adalah bentuk ritual tahunan
                            yang dilaksanakan kaum muslim sedunia yang mampu (material, fisik, dan keilmuan).
                        </p>
                        <p class="text-gray-700">
                            Penunaian tersebut adalah dengan berkunjung dan melaksanakan beberapa kegiatan di beberapa
                            tempat di Arab Saudi pada suatu waktu yang dikenal sebagai musim haji (bulan Zulhijah). Hal ini
                            berbeda dengan ibadah umrah yang bisa dilaksanakan sewaktu-waktu.
                        </p>
                    </div>
                    <div>
                        <h3 class="mb-4 text-xl font-semibold">Persyaratan Haji</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                <span class="text-gray-700">Menjadi seorang muslim</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                <span class="text-gray-700">Sudah dewasa/baligh (telah mencapai pubertas)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                <span class="text-gray-700">Berakal sehat</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                <span class="text-gray-700">Bebas (bukan budak)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                <span class="text-gray-700">Mempunyai kemampuan fisik untuk melakukan perjalanan</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                <span class="text-gray-700">Mempunyai kemampuan finansial untuk melaksanakan haji</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                <span class="text-gray-700">Bagi wanita, memiliki mahram (wali laki-laki) untuk menemani
                                    mereka</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

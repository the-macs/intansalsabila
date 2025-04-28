@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[400px] w-full">
            <img src="{{ asset('assets/images/banner/banner-about-us.webp') }}" alt="About Us"
                class="object-cover brightness-50 w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl">Tentang Kami</h1>
                <p class="max-w-2xl text-lg">Mitra terpercaya Anda untuk layanan haji dan umrah sejak 1994</p>
            </div>
        </section>

        <!-- Our Story -->
        <section class="bg-white py-16">
            <div class="container px-4 md:px-6 mx-auto">
                <div class="grid gap-12 grid-cols-1  md:grid-cols-2">
                    <div class="flex justify-center items-center h-full">
                        <img src="{{ asset('assets/images/logo/logo-full.webp') }}" alt="PT Intan Salsabila"
                            class=" object-center w-[75%] h-[75%]">

                    </div>

                    <div class="flex flex-col justify-center">
                        <h2 class="mb-6 text-3xl font-bold">PT. INTAN SALSABILA</h2>

                        <div class="space-y-4">
                            <p>
                                PT. Intan Salsabila yang berdiri sejak tahun 1994 dengan izin Penyelenggara Perjalanan
                                Ibadah Umrah: SK. Mentri Agama RI No. U.26 Tahun 2020 dan izin Penyelenggara Ibadah Haji
                                Khusus: SK. Mentri Agama RI No. PHU/HK.3090/IX/2009 Tahun 2018, ingin mengambil bagian dalam
                                terselenggaranya ibadah yang nyaman, aman dan terpercaya dan tentunya sesuai dengan tuntunan
                                Allah SWT dan sunnah Nabi Muhammad SAW.
                            </p>
                            <p>Intan Salsabila merupakan badan usaha jasa pariwisata berdasarkan perizinan yang diterbitkan
                                oleh lembaha pemerintah yang berwenang meliputi usaha-usaha:
                            </p>
                            <ul class="list-disc">
                                <li>Operator Tour & Travel Domestik & Internasional</li>
                                <li>Agent Penjualan Tiket Pesawat Domestik & Internasional</li>
                            </ul>
                            <h3 class="text-xl font-semibold">Ijin Usaha</h3>
                            <p>
                                Sebagai bentuk profesionalisme, Intan Tour telah mendapat ijin dan keanggotaan berikut:
                            </p>
                            <ul class="list-disc">
                                <li>Umrah: Izin MENAG No.D/777/Tahun 2013</li>
                                <li>Haji Khusus: Izin MENAG No. PHU/HK.3090/IX/2009</li>
                                <li>IATA: 15306023</li>
                                <li>BPW: 682/D.2/BPW/VII/96</li>
                                <li>HIMPUH: 089/HIMPUH/2010</li>
                            </ul>
                        </div>
                        <a data-fancybox data-type="pdf"
                            class="bg-intan-secondary hover:bg-intan-primary transition-all duration-200 text-white font-bold py-2 px-4 rounded mt-4"
                            href="{{ asset('assets/images/company-profile/company-profile-2025.pdf') }}">Lihat Profil
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
                                <div class="flex space-x-4">
                                    <p>Menjadi penyelenggara perjalanan Umrah dan Haji Khusus yang mampu memberikan
                                        bimbingan Ibadah yang sesuai Al Qur'an dan Sunnah, dikelola secara professional dan
                                        amanah sehingga dapat memberikan pelayanan sempurna kepada setiap Jama'ah.</p>
                                </div>
                            </div>
                        </x-card.content>
                    </x-card>
                    {{-- Misi --}}
                    <x-card>
                        <x-card.content class="flex flex-col p-6">
                            <h2 class="mb-6 text-2xl font-bold">Misi</h2>
                            <div class="space-y-4">
                                <div class="flex flex-col space-x-4">
                                    <p>Untuk mewujudkan visi tersebut, kami mempunyai 3 misi berikut:<br /></p>

                                    <ul class="list-disc ms-4">
                                        <li class="text-justify">Memberikan bimbingan manasik yang sesuai dengan Al-Qur'an
                                            dan Sunnah juga membimbing kaum muslimin & muslimah agar dapat memahami dan
                                            mengamalkan agama Islam dalam kehidupan sehari-hari.</li>
                                        <li class="text-justify">Memberikan pelayanan maksimal dengan merealisasikan prinsip
                                            dasar service excellence yang berkomitmen terhadap kualitas mutu, kinerja, dan
                                            professionalisme.</li>
                                        <li class="text-justify">Senantiasa meningkatkan upaya pengembangan kualitas sumber
                                            daya manusia, sistem, sarana dan prasarana serta teknologi yang dimiliki.</li>
                                    </ul>
                                </div>
                            </div>
                        </x-card.content>
                    </x-card>

                </div>
            </div>
        </section>

        <!-- Company Profile -->
        {{-- <section class="bg-white py-16">
            <div class="container px-4 md:px-6 mx-auto">
                <div class="mb-12 text-center">
                    <h2 class="mb-2 text-3xl font-bold">Profil Perusahaan</h2>
                    <p class="mx-auto max-w-2xl text-gray-500">
                        Kami secara resmi diakui secara legal oleh otoritas terkait
                    </p>
                </div>
                <div class="legality-slider">
                    @for ($i = 1; $i <= 30; $i++)
                        <div class="flex">
                            <a href="{{ asset('assets/images/company-profile/' . $i . '.jpg') }}" data-fancybox
                                data-caption="{{ $i . 'Compro' }}">
                                <img src="{{ asset('assets/images/company-profile/' . $i . '.jpg') }}"
                                    alt="{{ $i . 'Compro' }}" class="max-w-14 sm:max-w-38 object-contain mx-auto">
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </section> --}}

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
                    <div class="flex">
                        <img src="{{ asset('assets/images/certification/himpuh.png') }}" alt="Legalitas HIMPUH"
                            class="max-w-14 sm:max-w-38 object-contain mx-auto">
                    </div>
                    <div class="flex">
                        <img src="{{ asset('assets/images/certification/sisko-patuh.png') }}" alt="Sisko Patuh"
                            class="max-w-14 sm:max-w-38 object-contain mx-auto">
                    </div>
                    <div class="flex">
                        <img src="{{ asset('assets/images/certification/iata.png') }}" alt="IATA"
                            class="max-w-14 sm:max-w-38 object-contain mx-auto">
                    </div>
                    <div class="flex">
                        <img src="{{ asset('assets/images/certification/asita.png') }}"
                            alt="Association of Indonesia Tours & Travel Agency"
                            class="max-w-14 sm:max-w-38 object-contain mx-auto">
                    </div>
                    <div class="flex">
                        <img src="{{ asset('assets/images/certification/kemenag.png') }}" alt="Kementrian Agama"
                            class="max-w-14 sm:max-w-38 object-contain mx-auto">
                    </div>
                    <div class="flex">
                        <img src="{{ asset('assets/images/certification/kan-lspr.png') }}"
                            alt="Komite Akreditasi Nasional - LSPR" class="max-w-14 sm:max-w-38 object-contain mx-auto">
                    </div>
                    <div class="flex">
                        <img src="{{ asset('assets/images/certification/tims-bpw.png') }}" alt="TiMS - BPW"
                            class="max-w-14 sm:max-w-38 object-contain mx-auto">

                    </div>
                    <div class="flex">
                        <img src="{{ asset('assets/images/certification/kan-lssm.png') }}"
                            alt="Komite Akreditasi Nasional - LSSM" class="max-w-14 sm:max-w-38 object-contain mx-auto">
                    </div>
                    <div class="flex">
                        <img src="{{ asset('assets/images/certification/tims-qms.png') }}" alt="TiMS - QMS"
                            class="max-w-14 sm:max-w-38 object-contain mx-auto">
                    </div>
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

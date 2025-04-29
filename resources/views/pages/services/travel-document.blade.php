@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[70px] w-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-slate-600">
            </div>
        </section>

        <!-- Airline Images -->
        <section class="pt-10 pb-24">
            <div class="container mx-auto px-4">
                <div class="text-center animate-fade-in-down">
                    <h1 class="mb-14 text-4xl font-bold md:text-5xl text-slate-600">Dokumen Travel</h1>

                    <div class="max-w-4xl mx-auto">
                        <p class="text-lg mb-4">Layanan untuk mendapatkan berbagai dokumen yang diwajibkan (visa umrah) oleh
                            Kementrian Haji Kerajaan Arab Saudi untuk para jamaah umrah</p>
                        <p class="text-lg mb-4">Provider Visa PT.Intan Salsabila yang merupakan perwakilan resmi satu -
                            satunya dari Muasasah Anjum yang mengeluarkan visa umrah menyediakan visa umrah dengan Mofa
                            cepat.</p>
                        <p class="text-lg mb-4">Untuk informasi agar dapat menggunakan layanan ini, dapat menghubungi kami
                            di kantor atau email kami sebagai berikut:
                            <a href="mailto:visa@intansalsabila.com"
                                class="text-blue-600 hover:text-blue-800">visa@intansalsabilia.com</a> /
                            <a href="mailto:intansalsabila.visa@gmail.com"
                                class="text-blue-600 hover:text-blue-800">intansalsabila.visa@gmail.com</a>
                        </p>
                        <p class="text-lg mb-4">atau via whatsapp kami sebagai berikut:
                            <a href="https://api.whatsapp.com/send?phone=6287778500808&amp;text=Assalamualaikum%20..%20mau%20menanyakan%20harga%20visa%20umrah?%20"
                                target="_blank"
                                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 mt-4">
                                CS Visa umrah
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

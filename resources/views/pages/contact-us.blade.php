@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <!-- Hero Section -->
    <section class="relative h-[400px] w-full">
        <img src="{{ asset('assets/images/banner/banner-contact-us.webp') }}" alt="Contact Us" class="object-cover object-bottom brightness-50 w-full h-full">
        <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
            <h1 class="mb-4 text-4xl font-bold md:text-5xl">Kontak</h1>
            <p class="max-w-2xl text-lg">Informasi untuk menghubungi kami</p>
        </div>
    </section>

    <!-- Contact Form and Map -->
    <section class="bg-gray-50 py-16">
        <div class="container px-4 mx-auto">
            <div class="grid gap-8 md:grid-cols-2">
                <!-- Phone Card -->
                <x-card>
                    <x-card.content class="flex flex-col p-6">
                        <h2 class="mb-6 text-2xl font-bold">Hubungi Kami</h2>

                        <div class="space-y-4">
                            <div class="flex space-x-4">
                                <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                    <i class="fa-solid fa-phone mt-1 text-intan-secondary"></i>
                                    <p class="text-sm sm:text-base"> Phone</p>
                                </div>
                                <div class="flex flex-1 text-sm sm:text-base">
                                    <p>(+62) 21 8370 5341</p>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                    <i class="fa-solid fa-fax mt-1 text-intan-secondary"></i>
                                    <p class="text-sm sm:text-base"> Fax</p>
                                </div>
                                <div class="flex flex-1 text-sm sm:text-base">
                                    <p>(+62) 21 8370 5342</p>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                    <i class="fa-solid fa-envelope text-intan-secondary mt-1"></i>
                                    <p class="text-sm sm:text-base"> Email</p>
                                </div>
                                <div class="flex flex-1 text-sm sm:text-base">
                                    <p>
                                        intansalsabila.travel@gmail.com<br />
                                        umrahajj.intansalsabila@yahoo.com
                                    </p>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                    <i class="fa-solid fa-map-marker-alt text-intan-secondary mt-1"></i>
                                    <p class="text-sm sm:text-base"> Address</p>
                                </div>
                                <div class="flex flex-1 text-sm sm:text-base">
                                    <p>Jl. Tebet Barat Dalam Raya No. 55 C Jakarta 12810 - Indonesia</p>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                    <i class="fa-solid fa-clock text-intan-secondary mt-1"></i>
                                    <p class="text-sm sm:text-base"> Jam Kerja</p>
                                </div>
                                <div class="flex flex-1 text-sm sm:text-base flex-col">
                                    <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                                    <p>Saturday: 10:00 AM - 2:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </x-card.content>
                </x-card>
                <!-- Map -->
                <div class="flex flex-col">
                    <h2 class="mb-6 text-2xl font-bold">Our Location</h2>
                    <div class="w-full overflow-hidden rounded-lg bg-white">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1904006438267!2d106.84501627623708!3d-6.238617693749638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3bdd93e2dc7%3A0xc639d165405175fc!2sJl.%20Tebet%20Barat%20Dalam%20Raya%20No.55%2C%20RT.6%2FRW.4%2C%20Tebet%20Bar.%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012810!5e0!3m2!1sen!2sid!4v1745205265838!5m2!1sen!2sid" class="w-full h-[400px] border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

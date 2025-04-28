@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[400px] w-full">
            <img src="{{ asset('assets/images/banner/banner-tour-package.jpg') }}" alt="Contact Us"
                class="object-cover object-bottom brightness-50 w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl">Paket Tour</h1>
                <p class="max-w-2xl text-lg">Tur Paket dalam dan luar negri</p>
            </div>
        </section>

        <!-- Contact Form and Map -->
        <section class="py-12">
            <div class="container mx-auto px-4">
                <!-- International Tours -->
                <div class="mb-16">
                    <div class="text-center animate-fade-in-down">
                        <h2 class="text-3xl font-bold mb-8">Tour Wisata Luar Negeri</h2>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <!-- Bangkok Packages -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold mb-4">BANGKOK</h4>
                                <p class="text-lg mb-2">Bangkok 3 Days 2 Night</p>
                                <p class="text-lg mb-2">Bangkok 4 Days 3 Night</p>
                                <p class="text-lg mb-2">Pattaya-Bangkok 3 Days 2 Night</p>
                                <p class="text-lg mb-2">Pattaya-Bangkok 5 Days 4 Night</p>
                                <p class="text-lg mb-2">Chiangmai 3 Days 2 Night</p>
                                <p class="text-lg mb-2">Phuket-Chiangmai 4 Days 3 Night</p>
                                <p class="text-lg">Bangkok-Pattaya-Phuket 6 Days 5 Night</p>
                            </div>

                            <!-- Itinerary -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold mb-4">ITENARY 4 DAYS 3 NIGHT</h4>
                                <div class="text-left">
                                    <ul class="list-disc pl-5 space-y-2">
                                        <li>Day 1 Arrival / Bangkok (No meal)</li>
                                        <ul class="list-disc pl-5 mt-2 space-y-1">
                                            <li>Meet and transfer from Bangkok Airport to hotel in Bangkok</li>
                                            <li>Acc. at hotel in Bangkok</li>
                                        </ul>
                                        <li>Day 2 Bangkok / Full Day (Breakfast, Lunch)</li>
                                        <ul class="list-disc pl-5 mt-2 space-y-1">
                                            <li>American Breakfast at hotel</li>
                                            <li>Sightseeing through China town and visit Golden Buddha Temple, then take a
                                                ferry boat across the Chaophya river to visit Temple of dawn (Wat Arun)</li>
                                            <li>Lunch at local restaurant, then visit Gems factory, Bee farm &amp; leather
                                                shop</li>
                                            <li>Shopping at MBK shopping complex that you can enjoy a variety of food by
                                                your own account</li>
                                            <li>Visit Asiatique night market and standby until 10.00 PM only</li>
                                            <li>Acc. at hotel in Bangkok</li>
                                        </ul>
                                        <li>Day 3 Bangkok / Departure (Breakfast)</li>
                                        <ul class="list-disc pl-5 mt-2 space-y-1">
                                            <li>American Breakfast at hotel</li>
                                            <li>Transfer to airport for departure</li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>

                            <!-- Hotels -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold mb-4">HOTEL</h4>
                                <p class="text-lg mb-1">Bintang 3</p>
                                <p class="mb-4">Dynasty, Chayon Sathorn / The Seasons / Huamark, Ecotel / Bangkok Centre /
                                    Baiyoke Boutique</p>

                                <p class="text-lg mb-1">Bintang 4</p>
                                <p class="mb-4">MA hotel / Prince Palace / Twin Towers / Centre Point Pratunam / Centara
                                    Watergate Pavilion / Glow Pratunam / Berkeley Pratunam / Centre Point Chidlom</p>

                                <p class="text-lg mb-1">Bintang 5</p>
                                <p>Grande Centre Point Rajdamri / Hua Chang Heritage</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Domestic Tours -->
                <div class="my-16">
                    <div class="text-center animate-fade-in-down">
                        <h2 class="text-3xl font-bold mb-8">Tour Wisata Dalam Negeri</h2>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <!-- Lombok Pink Beach -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold mb-2">LOMBOK PINK BEACH</h4>
                                <h3 class="text-lg font-medium mb-3">PINK "TANGSI" BEACH LOMBOK TOUR</h3>
                                <p class="text-lg">Pantai yang terkenal akan pasir pantainya yang berwarna pink. Pantai
                                    Tangsi ini berlokasi di Lombok Timur bagian selatan. Tepatnya pada kecamatan Jerowaru,
                                    Desa Temeak. Pantai Tangsi memiliki jarak sekitar 80 km (+ 3 jam) dari Mataram</p>
                            </div>

                            <!-- Komodo Flores -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold mb-2">KOMODO FLORES</h4>
                                <h3 class="text-lg font-medium mb-3">2 Days 1 Night</h3>
                                <div class="text-left">
                                    <ul class="list-disc pl-5 space-y-2">
                                        Transfer and tours as per the itinerary.
                                        <li>Full board meals (1x Breakfast, 1x Lunch and 1 x Dinner)</li>
                                        <li>Private charter Boat trip</li>
                                        <li>Entrance fees</li>
                                        <li>Ranger fee</li>
                                        <li>Mineral water, morning and afternoon tea – coffee plus snack during the trip on
                                            the boat</li>
                                        <li>English speaking guide</li>
                                        <li>Boat anchorage</li>
                                        <li>Refreshment and Porter</li>
                                        <li>Snorkeling gear, Conservation fund at Komodo National Park</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Lombok Daily -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold mb-4">LOMBOK DAILY</h4>
                                <p class="text-lg mb-2">Mataram City Tour – Half Day</p>
                                <p class="text-lg">Holy Mount Pengsong &amp; Home Industries Tour – Half Day</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

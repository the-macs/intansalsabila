@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <!-- Hero Section -->
    <section class="relative h-[500px] w-full">
        <img src="{{ asset('assets/images/banner/banner-home.webp') }}" alt="Kaaba in Mecca" class="object-cover object-bottom brightness-50 w-full h-full bg-slate-500">
        <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
            <h1 class="mb-4 text-4xl font-bold md:text-5xl lg:text-6xl">Your Journey to Sacred Lands</h1>
            <p class="mb-8 max-w-2xl text-lg md:text-xl">
                Experience the spiritual journey of a lifetime with our premium Hajj and Umrah packages
            </p>
            <div class="flex flex-col gap-4 sm:flex-row">
                <a href="/packages/umrah" class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg text-lg px-6 py-3 text-center">
                    Explore Umrah Packages
                </a>
                <a href="/packages/hajj" class="border border-white text-white hover:bg-white/10 font-medium rounded-lg text-lg px-6 py-3 text-center">
                    View Hajj Packages
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-white py-16">
        <div class="container px-4 md:px-6 mx-auto">
            <div class="mb-12 text-center">
                <h2 class="mb-2 text-3xl font-bold md:text-4xl">Our Services</h2>
                <p class="mx-auto max-w-2xl text-gray-500">
                    We provide comprehensive services to make your spiritual journey comfortable and memorable
                </p>
            </div>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <x-card>
                    <x-card.header>
                        <x-card.title class="flex items-center gap-2">
                            <x-icons.plane class="h-5 w-5 text-emerald-600" />
                            <i class="fa-solid fa-plane"></i>

                            Travel Arrangements
                        </x-card.title>
                    </x-card.header>
                    <x-card.content>
                        <p>Complete travel arrangements including flights, visas, and transportation in Saudi Arabia.</p>
                    </x-card.content>
                </x-card>

                <x-card>
                    <x-card.header>
                        <x-card.title class="flex items-center gap-2">
                            <i class="fa-solid fa-map-location-dot"></i>
                            Accommodation
                        </x-card.title>
                    </x-card.header>
                    <x-card.content>
                        <p>Premium hotel accommodations in Mecca and Medina, close to the holy sites.</p>
                    </x-card.content>
                </x-card>

                <x-card>
                    <x-card.header>
                        <x-card.title class="flex items-center gap-2">
                            {{-- <x-icon-users class="h-5 w-5 text-emerald-600" /> --}}
                            Guided Tours
                        </x-card.title>
                    </x-card.header>
                    <x-card.content>
                        <p>Experienced guides to assist you throughout your journey and religious rituals.</p>
                    </x-card.content>
                </x-card>
            </div>
        </div>
    </section>

    <!-- Featured Packages -->
    <section class="bg-slate-50 py-16">
        <div class="container px-4 md:px-6 mx-auto">
            <div class="mb-12 text-center">
                <h2 class="mb-2 text-3xl font-bold md:text-4xl">Featured Packages</h2>
                <p class="mx-auto max-w-2xl text-gray-500">
                    Choose from our carefully designed packages to suit your needs and preferences
                </p>
            </div>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Umrah Package -->
                <x-card class="overflow-hidden">
                    <div class="relative h-48">
                        <img src="/placeholder.svg" alt="Umrah Package" class="object-cover w-full h-full">
                    </div>
                    <x-card.header>
                        <x-card.title>Economy Umrah Package</x-card.title>
                        <x-card.description>10 Days | Mecca & Medina</x-card.description>
                    </x-card.header>
                    <x-card.content>
                        <div class="mb-4 space-y-2">
                            <div class="flex items-center gap-2">
                                {{-- <x-icon-calendar-days class="h-4 w-4 text-emerald-600" /> --}}
                                <span class="text-sm">Available year-round</span>
                            </div>
                            <div class="flex items-center gap-2">
                                {{-- <x-icon-clock class="h-4 w-4 text-emerald-600" /> --}}
                                <span class="text-sm">10 days, 9 nights</span>
                            </div>
                            <div class="flex items-center gap-2">
                                {{-- <x-icon-star class="h-4 w-4 text-emerald-600" /> --}}
                                <span class="text-sm">3-star accommodations</span>
                            </div>
                        </div>
                        <div class="text-xl font-bold text-emerald-600">$1,999 per person</div>
                    </x-card.content>
                    <x-card.footer>
                        <a href="/packages/umrah" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg px-4 py-2 text-center block">
                            View Details
                        </a>
                    </x-card.footer>
                </x-card>

                <!-- Hajj Package -->
                <x-card class="overflow-hidden">
                    <div class="relative h-48">
                        <img src="/placeholder.svg" alt="Hajj Package" class="object-cover w-full h-full">
                    </div>
                    <x-card.header>
                        <x-card.title>Standard Hajj Package</x-card.title>
                        <x-card.description>15 Days | Complete Hajj Journey</x-card.description>
                    </x-card.header>
                    <x-card.content>
                        <div class="mb-4 space-y-2">
                            <div class="flex items-center gap-2">
                                {{-- <x-icon-calendar-days class="h-4 w-4 text-emerald-600" /> --}}
                                <span class="text-sm">Hajj season only</span>
                            </div>
                            <div class="flex items-center gap-2">
                                {{-- <x-icon-clock class="h-4 w-4 text-emerald-600" /> --}}
                                <span class="text-sm">15 days, 14 nights</span>
                            </div>
                            <div class="flex items-center gap-2">
                                {{-- <x-icon-star class="h-4 w-4 text-emerald-600" /> --}}
                                <span class="text-sm">4-star accommodations</span>
                            </div>
                        </div>
                        <div class="text-xl font-bold text-emerald-600">$5,999 per person</div>
                    </x-card.content>
                    <x-card.footer>
                        <a href="/packages/hajj" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg px-4 py-2 text-center block">
                            View Details
                        </a>
                    </x-card.footer>
                </x-card>

                <!-- Premium Package -->
                <x-card class="overflow-hidden">
                    <div class="relative h-48">
                        <img src="/placeholder.svg" alt="Premium Package" class="object-cover w-full h-full">
                    </div>
                    <x-card.header>
                        <x-card.title>Premium Umrah Package</x-card.title>
                        <x-card.description>14 Days | Luxury Experience</x-card.description>
                    </x-card.header>
                    <x-card.content>
                        <div class="mb-4 space-y-2">
                            <div class="flex items-center gap-2">
                                {{-- <x-icon-calendar-days class="h-4 w-4 text-emerald-600" /> --}}
                                <span class="text-sm">Available year-round</span>
                            </div>
                            <div class="flex items-center gap-2">
                                {{-- <x-icon-clock class="h-4 w-4 text-emerald-600" /> --}}
                                <span class="text-sm">14 days, 13 nights</span>
                            </div>
                            <div class="flex items-center gap-2">
                                {{-- <x-icon-star class="h-4 w-4 text-emerald-600" /> --}}
                                <span class="text-sm">5-star luxury accommodations</span>
                            </div>
                        </div>
                        <div class="text-xl font-bold text-emerald-600">$3,499 per person</div>
                    </x-card.content>
                    <x-card.footer>
                        <a href="/packages/umrah" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg px-4 py-2 text-center block">
                            View Details
                        </a>
                    </x-card.footer>
                </x-card>
            </div>
            <div class="mt-8 text-center">
                <a href="/packages" class="border border-gray-300 hover:bg-gray-50 font-medium rounded-lg px-6 py-3 text-center inline-flex items-center gap-2">
                    View All Packages
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="bg-white py-16">
        <div class="container px-4 md:px-6 mx-auto">
            <div class="mb-12 text-center">
                <h2 class="mb-2 text-3xl font-bold md:text-4xl">What Our Pilgrims Say</h2>
                <p class="mx-auto max-w-2xl text-gray-500">
                    Read about the experiences of those who have traveled with us
                </p>
            </div>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <x-card class="bg-slate-50">
                    <x-card.content class="pt-6">
                        <div class="flex flex-col gap-4">
                            <div class="flex">
                                @for($i = 0; $i < 5; $i++) <i class="fa-solid fa-star"></i> @endfor
                            </div>
                            <p class="italic">
                                "Al-Baraka made my Umrah journey smooth and spiritually fulfilling. The accommodations were
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
                                @for($i = 0; $i
                                < 5; $i++) <i class="fa-solid fa-star"></i>
                                    @endfor
                            </div>
                            <p class="italic">
                                "My Hajj experience with Al-Baraka was beyond expectations. Everything was well-organized, and the
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
                                @for($i = 0; $i
                                < 5; $i++) <i class="fa-solid fa-star"></i>
                                    @endfor
                            </div>
                            <p class="italic">
                                "I've traveled with several Hajj providers, but Al-Baraka stands out for their attention to detail
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


    <!-- CTA Section -->
    <section class="bg-emerald-900 py-16 text-white">
        <div class="container px-4 md:px-6 mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="mb-4 text-3xl font-bold md:text-4xl">Ready to Begin Your Spiritual Journey?</h2>
                <p class="mb-8 max-w-2xl text-emerald-100">
                    Contact us today to book your Hajj or Umrah package or to get more information about our services.
                </p>
                <div class="flex flex-col gap-4 sm:flex-row">
                    <a href="/contact" class="bg-white text-emerald-900 hover:bg-emerald-100 font-medium rounded-lg text-lg px-6 py-3 text-center">
                        Contact Us
                    </a>
                    <a href="/packages" class="border border-white text-white hover:bg-white/10 font-medium rounded-lg text-lg px-6 py-3 text-center">
                        Explore Packages
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection

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
                <h1 class="mb-14 text-4xl font-bold md:text-5xl text-slate-600">{{ $banner->title }}</h1>

                <div class="prose max-w-4xl mx-auto">
                    {!! $travel_document->description !!}
                    <a href="https://api.whatsapp.com/send?phone={{ $company_info->whatsapp }}&amp;text=Assalamualaikum%20..%20mau%20menanyakan%20harga%20visa%20umrah?%20" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 mt-4">
                        CS Visa umrah
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

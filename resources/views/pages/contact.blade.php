@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="relative h-[400px] w-full">
            <img src="{{ asset('storage/' . $banner->image_path) }}" alt="Contact Us"
                class="object-cover object-bottom brightness-50 w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl">{{ $banner->title }}</h1>
                <p class="max-w-2xl text-lg">{{ $banner->subtitle }}</p>
            </div>
        </section>

        <!-- Contact Form and Map -->
        <section class="bg-gray-50 py-16">
            <div class="container px-4 mx-auto space-y-6">
                <div class="grid gap-8 md:grid-cols-2">
                    <!-- Phone Card -->
                    <x-card>
                        <x-card.content class="flex flex-col p-6">
                            <h2 class="mb-6 text-2xl font-bold">Hubungi Kami</h2>

                            <div class="space-y-4">
                                <div class="flex space-x-4">
                                    <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                        <i class="fa-solid fa-phone mt-1 text-intan-secondary"></i>
                                        <p class="text-sm sm:text-base"> Telepon</p>
                                    </div>
                                    <div class="flex flex-1 text-sm sm:text-base">
                                        <p>
                                            @foreach ($company_info->phone as $phone)
                                                {{ $phone['number'] }}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="flex space-x-4">
                                    <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                        <i class="fa-solid fa-fax mt-1 text-intan-secondary"></i>
                                        <p class="text-sm sm:text-base"> Faks</p>
                                    </div>
                                    <div class="flex flex-1 text-sm sm:text-base">
                                        <p>
                                            @foreach ($company_info->fax as $fax)
                                                {{ $fax['number'] }}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="flex space-x-4">
                                    <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                        <i class="fa-solid fa-envelope text-intan-secondary mt-1"></i>
                                        <p class="text-sm sm:text-base"> Email</p>
                                    </div>
                                    <div class="flex flex-1 text-sm sm:text-base">
                                        <p>
                                            @foreach ($company_info->email as $email)
                                                {{ $email['address'] }}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="flex space-x-4">
                                    <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                        <i class="fa-solid fa-map-marker-alt text-intan-secondary mt-1"></i>
                                        <p class="text-sm sm:text-base"> Alamat</p>
                                    </div>
                                    <div class="flex flex-1 text-sm sm:text-base">
                                        <p>{{ $company_info->address }}</p>
                                    </div>
                                </div>
                                <div class="flex space-x-4">
                                    <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                        <i class="fa-solid fa-clock text-intan-secondary mt-1"></i>
                                        <p class="text-sm sm:text-base"> Jam Kerja</p>
                                    </div>
                                    <div class="flex flex-1 text-sm sm:text-base flex-col">
                                        @foreach ($company_info->working_hours as $workingHour)
                                            <p>{{ $workingHour['day'] }}: {{ $workingHour['hours'] }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </x-card.content>
                    </x-card>
                    <!-- Map -->
                    <div class="flex flex-col">
                        <h2 class="mb-6 text-2xl font-bold">Kantor Pusat</h2>
                        <div class="w-full overflow-hidden rounded-lg bg-white">
                            <iframe src="{{ $company_info->map_embed }}" class="w-full h-[400px] border-0"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2 mt-8">
                    <!-- Branch Office -->
                    @foreach ($branches as $branch)
                        <x-card>
                            <x-card.content class="flex flex-col p-6">
                                <h2 class="mb-6 text-2xl font-bold">{{ $branch->location }}</h2>

                                <div class="space-y-4">
                                    @if ($branch->pic)
                                        <div class="flex space-x-4">
                                            <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                                <i class="fa-solid fa-user text-intan-secondary mt-1"></i>
                                                <p class="text-sm sm:text-base">{{ $branch->pic }}</p>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="flex space-x-4">
                                        <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                            <i class="fa-solid fa-map-marker-alt text-intan-secondary mt-1"></i>
                                            <p class="text-sm sm:text-base"> Alamat</p>
                                        </div>
                                        <div class="flex flex-1 text-sm sm:text-base">
                                            <p>{{ $branch->address }}</p>
                                        </div>
                                    </div>
                                    <div class="flex space-x-4">
                                        <div class="flex min-w-25 sm:min-w-32 space-x-2 items-start">
                                            <i class="fa-solid fa-phone mt-1 text-intan-secondary"></i>
                                            <p class="text-sm sm:text-base"> Telepon</p>
                                        </div>
                                        <div class="flex flex-1 text-sm sm:text-base">
                                            <p>{{ $branch->phone }}</p>
                                        </div>
                                    </div>
                                </div>
                            </x-card.content>
                        </x-card>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection

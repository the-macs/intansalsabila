<header class="sticky top-0 z-50 w-full bg-intan-secondary">
    <x-topbar />
    <div class="container flex h-16 items-center justify-between px-4 md:px-6 mx-auto">
        <a href="/" class="flex items-center gap-2">
            <img src="{{ asset('storage/' . $company_info->company_logo['alt_logo']) }}" alt="Logo"
                class="w-full max-w-10">
            {{-- <img src="{{ asset('assets/images/logo/logo-text.webp') }}" alt="Logo" class="w-full max-w-15"> --}}
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex md:gap-4 text-white items-center">
            <a href="{{ route('fe.home') }}"
                class="text-sm font-medium duration-200 rounded px-3 py-2 {{ request()->routeIs('fe.home') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                Beranda
            </a>

            <a href="{{ route('fe.about-us') }}"
                class="text-sm font-medium duration-200 rounded px-3 py-2 {{ request()->routeIs('fe.about-us') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                Tentang Kami
            </a>

            {{-- Paket Umrah/Haji Dropdown --}}
            @php
                $isHajjUmrahActive = request()->routeIs('fe.packages.hajj') || request()->routeIs('fe.packages.umrah');
            @endphp
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center p-0 text-sm font-medium duration-200 rounded px-3 py-2 focus:outline-none cursor-pointer {{ $isHajjUmrahActive ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                    Paket Umrah/Haji &nbsp;
                    <i class="fa-solid fa-chevron-down text-x cursor-pointer"></i>
                </button>
                <div x-show="open" @click.away="open = false"
                    class="absolute left-1/2 transform -translate-x-1/2 mt-5 w-48 shadow-lg bg-[#17175f] ring-opacity-5 z-50">
                    <a href="{{ route('fe.packages.hajj') }}"
                        class="block px-4 py-2 text-sm duration-200 {{ request()->routeIs('fe.packages.hajj') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                        Paket Haji
                    </a>
                    <a href="{{ route('fe.packages.umrah') }}"
                        class="block px-4 py-2 text-sm duration-200 {{ request()->routeIs('fe.packages.umrah') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                        Paket Umrah
                    </a>
                </div>
            </div>

            {{-- Layanan --}}
            @php
                // $isServiceActive = request()->routeIs('fe.packages.hajj') || request()->routeIs('fe.packages.umrah');
            @endphp
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center p-0 text-sm font-medium duration-200 rounded px-3 py-2 focus:outline-none cursor-pointer {{ request()->routeIs('fe.services.*') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                    Layanan &nbsp;
                    <i class="fa-solid fa-chevron-down text-x cursor-pointer"></i>
                </button>
                <div x-show="open" @click.away="open = false"
                    class="absolute left-1/2 transform -translate-x-1/2 mt-5 w-48 shadow-lg bg-[#17175f] ring-opacity-5 z-50">
                    <a href="{{ route('fe.services.airline-ticket') }}"
                        class="block px-4 py-2 text-sm duration-200 {{ request()->routeIs('fe.services.airline-ticket') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                        Tiket Pesawat
                    </a>
                    <a href="{{ route('fe.services.hotel-voucher') }}"
                        class="block px-4 py-2 text-sm duration-200 {{ request()->routeIs('fe.services.hotel-voucher') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                        Voucher Hotel
                    </a>
                    <a href="{{ route('fe.services.travel-document') }}"
                        class="block px-4 py-2 text-sm duration-200 {{ request()->routeIs('fe.services.travel-document') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                        Dokumen Travel
                    </a>
                </div>
            </div>


            {{-- Kegiatan Dropdown --}}
            @php
                $isActivityActive = request()->routeIs('fe.activity.*');
            @endphp
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center p-0 text-sm font-medium duration-200 rounded px-3 py-2 focus:outline-none cursor-pointer {{ $isActivityActive ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                    Kegiatan &nbsp;
                    <i class="fa-solid fa-chevron-down text-x cursor-pointer"></i>
                </button>
                <div x-show="open" @click.away="open = false"
                    class="absolute left-1/2 transform -translate-x-1/2 mt-5 w-48 shadow-lg bg-[#17175f] ring-opacity-5 z-50">
                    <a href="https://himpuh.or.id/blog/kategori/2/berita" target="_blank"
                        class="flex px-4 py-2 text-sm duration-200 hover:bg-intan-secondary">
                        <img src="{{ asset('storage/uploads/certifications/himpuh.png') }}" alt="Legalitas HIMPUH"
                            class="h-5 object-contain pr-1" />&nbsp;HIMPUH Artikel
                    </a>
                    <a href="{{ route('fe.activities.article') }}"
                        class="block px-4 py-2 text-sm duration-200 {{ request()->routeIs('fe.activities.article') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                        Artikel
                    </a>
                    <a href="{{ route('fe.activities.gallery') }}"
                        class="block px-4 py-2 text-sm duration-200 {{ request()->routeIs('fe.activities.gallery') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                        Galeri
                    </a>
                </div>
            </div>

            <a href="{{ route('fe.contact') }}"
                class="text-sm font-medium duration-200 rounded px-3 py-2 {{ request()->routeIs('fe.contact') ? 'bg-intan-secondary' : 'hover:bg-intan-secondary' }}">
                Kontak
            </a>

            <a href="https://kemenag.go.id/" target="_blank"
                class="flex text-sm font-medium px-3 py-2 bg-emerald-600 rounded hover:bg-intan-secondary duration-200 text-gray-200 animate-pulse">
                <img src="{{ asset('storage/uploads/certifications/kemenag.png') }}" alt="Kementrian Agama"
                    class="h-5 w-auto object-contain">&nbsp;
                Kemenag
            </a>
        </nav>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = true"
            class="lg:hidden p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-emerald-500">
            <i class="fa-solid fa-bars text-2xl text-white cursor-pointer"></i>
            <span class="sr-only">Toggle navigation menu</span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
        x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"
        class="fixed inset-y-0 right-0 z-50 w-full max-w-sm bg-intan-secondary shadow-lg lg:hidden" x-cloak>
        <div class="flex justify-end p-4">
            <button @click="mobileMenuOpen = false"
                class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-emerald-500 cursor-pointer text-white">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="grid gap-2 px-6 py-4">
            <a href="{{ route('fe.home') }}"
                class="flex w-full items-center py-2 text-lg font-semibold {{ request()->routeIs('fe.home') ? 'text-emerald-600' : 'text-white' }}">
                Beranda
            </a>
            <a href="{{ route('fe.about-us') }}"
                class="flex w-full items-center py-2 text-lg font-semibold {{ request()->routeIs('fe.about-us') ? 'text-emerald-600' : 'text-white' }}">
                Tentang Kami
            </a>

            <div class="py-2">
                <div
                    class="text-lg font-semibold {{ request()->routeIs('fe.packages.*') ? 'text-emerald-600' : 'text-white' }}">
                    Paket Haji/Umrah
                </div>
                <div class="ml-4 mt-2 grid gap-2">
                    <a href="{{ route('fe.packages.hajj') }}"
                        class="text-sm {{ request()->routeIs('fe.packages.hajj') ? 'text-emerald-600' : 'text-white' }}">
                        Paket Haji
                    </a>
                    <a href="{{ route('fe.packages.umrah') }}"
                        class="text-sm {{ request()->routeIs('fe.packages.umrah') ? 'text-emerald-600' : 'text-white' }}">
                        Paket Umrah
                    </a>
                </div>
            </div>

            <div class="py-2">
                <div
                    class="text-lg font-semibold {{ request()->routeIs('fe.services.*') ? 'text-emerald-600' : 'text-white' }}">
                    Layanan
                </div>
                <div class="ml-4 mt-2 grid gap-2">
                    <a href="{{ route('fe.services.airline-ticket') }}"
                        class="text-sm {{ request()->routeIs('fe.services.airline-ticket') ? 'text-emerald-600' : 'text-white' }}">
                        Tiket Pesawat
                    </a>
                    <a href="{{ route('fe.services.hotel-voucher') }}"
                        class="text-sm {{ request()->routeIs('fe.services.hotel-voucher') ? 'text-emerald-600' : 'text-white' }}">
                        Voucher Hotel
                    </a>
                    <a href="{{ route('fe.services.travel-document') }}"
                        class="text-sm {{ request()->routeIs('fe.services.travel-document') ? 'text-emerald-600' : 'text-white' }}">
                        Dokumen Travel
                    </a>
                </div>
            </div>

            <div class="py-2">
                <div
                    class="text-lg font-semibold {{ request()->routeIs('fe.activities.*') ? 'text-emerald-600' : 'text-white' }}">
                    Kegiatan
                </div>
                <div class="ml-4 mt-2 grid gap-2">
                    <a href="https://himpuh.or.id/blog/kategori/2/berita" target="_blank"
                        class="text-sm text-white flex">
                        <img src="{{ asset('storage/uploads/certifications/himpuh.png') }}" alt="Legalitas HIMPUH"
                            class="h-5 object-contain" />&nbsp;HIMPUH Artikel
                    </a>
                    <a href="{{ route('fe.activities.article') }}"
                        class="text-sm {{ request()->routeIs('fe.activities.article') ? 'text-emerald-600' : 'text-white' }}">
                        Artikel
                    </a>
                    <a href="{{ route('fe.activities.gallery') }}"
                        class="text-sm {{ request()->routeIs('fe.activities.gallery') ? 'text-emerald-600' : 'text-white' }}">
                        Galeri
                    </a>
                </div>
            </div>
            <a href="{{ route('fe.contact') }}"
                class="flex w-full items-center py-2 text-lg font-semibold {{ request()->routeIs('fe.contact') ? 'text-emerald-600' : 'text-white' }}">
                Kontak
            </a>
            <a href="https://kemenag.go.id/" target="_blank"
                class="flex w-full items-center py-2 text-lg font-semibold py-2 text-emerald-400">
                <img src="{{ asset('storage/uploads/certifications/kemenag.png') }}" alt="Kementrian Agama"
                    class="h-5 w-auto object-contain">&nbsp;
                Kemenag
            </a>
        </div>
    </div>
</header>

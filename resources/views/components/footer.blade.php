<footer class="bg-intan-secondary text-white">
    <div class="container px-4 py-12 mx-auto md:px-6">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            <!-- Company Info -->
            <div class="grid gap-8 grid-cols-1">
                <div>
                    <a href="/" class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/logo/logo-full.webp') }}" alt="Al-Baraka Logo"
                            class=" px-1 py-2.5 w-16">
                    </a>
                    <p class="mt-4 text-sm text-emerald-100">
                        Mitra terpercaya Anda untuk layanan haji dan umrah sejak 1994
                    </p>
                </div>
                <div>
                    <h3 class="mb-4 text-lg font-semibold">Follow Us</h3>
                    <div class="flex items-center gap-4">
                        <a href="https://www.instagram.com/intansalsabilaofficial/" target="_blank"
                            class="rounded-full bg-intan-primary px-2 py-1 hover:bg-emerald-700">
                            <i class="fa-brands fa-instagram"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                        <a href="https://www.facebook.com/intansalsabilaofficial" target="_blank"
                            class="rounded-full bg-intan-primary px-2 py-1 hover:bg-emerald-700">
                            <i class="fa-brands fa-facebook"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://www.tiktok.com/@intansalsabilaofficial?_t=ZS-8vuRzhTczCq&_r=1" target="_blank"
                            class="rounded-full bg-intan-primary px-2 py-1 hover:bg-emerald-700">
                            <i class="fa-brands fa-tiktok"></i>
                            <span class="sr-only">Tiktok</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="mb-4 text-lg font-semibold">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="{{ route('fe.home') }}/" class="hover:underline">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('fe.about-us') }}" class="hover:underline">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('fe.packages.hajj') }}" class="hover:underline">Paket Haji</a>
                    </li>
                    <li>
                        <a href="{{ route('fe.packages.umrah') }}" class="hover:underline">Paket Umrah</a>
                    </li>
                    <li>
                        <a href="{{ route('fe.activities.article') }}" class="hover:underline">Artikel</a>
                    </li>
                    <li>
                        <a href="/gallery" class="hover:underline">Galeri</a>
                    </li>
                    <li>
                        <a href="{{ route('fe.contact-us') }}" class="hover:underline">Kontak</a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="mb-4 text-lg font-semibold">Contact Us</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-map-location-dot pt-0.5"></i>
                        <span>Jl. Tebet Barat Dalam Raya No. 55 C Jakarta 12810 - Indonesia</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="flex space-x-2 items-center">
                            <i class="fa-solid fa-phone"></i>
                            <p> (+62) 21 8370 5341</p>
                        </div>
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="flex space-x-2 items-center">
                            <i class="fa-solid fa-fax"></i>
                            <p>(+62) 21 8370 5342</p>

                        </div>
                    </li>
                    <li class="flex items-center gap-2">
                        <a class="flex space-x-2 items-center" href="https://wa.me/6287778500808">
                            <i class="fa-brands fa-whatsapp"></i>
                            <p> (+62) 8777 8500 808</p>
                        </a>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-envelope pt-0.5"></i>
                        <div class="flex flex-col">
                            <span>intansalsabila.travel@gmail.com</span>
                            <span>umrahajj.intansalsabila@yahoo.com</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Legality -->
            <div>
                <h3 class="mb-4 text-lg font-semibold">Legalitas</h3>
                <div class="grid grid-cols-3 gap-2 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-5 xl:grid-cols-5">
                    {{-- @foreach (range(1, 10) as $index) --}}
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/certification/himpuh.png') }}" alt="Legalitas HIMPUH"
                            class="h-16 w-auto object-contain">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/certification/sisko-patuh.png') }}" alt="Sisko Patuh"
                            class="h-16 w-auto object-contain">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/certification/iata.png') }}" alt="IATA"
                            class="h-16 w-auto object-contain">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/certification/asita.png') }}"
                            alt="Association of Indonesia Tours & Travel Agency" class="h-16 w-auto object-contain">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/certification/kemenag.png') }}" alt="Kementrian Agama"
                            class="h-16 w-auto object-contain">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/certification/kan-lspr.png') }}"
                            alt="Komite Akreditasi Nasional - LSPR" class="h-16 w-auto object-contain">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/certification/tims-bpw.png') }}" alt="TiMS - BPW"
                            class="h-16 w-auto object-contain">

                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/certification/kan-lssm.png') }}"
                            alt="Komite Akreditasi Nasional - LSSM" class="h-16 w-auto object-contain">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/certification/tims-qms.png') }}" alt="TiMS - QMS"
                            class="h-16 w-auto object-contain">
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="mt-12 border-t pt-6 text-center text-sm">
            <p>© {{ date('Y') }} Intan Salsabila Layanan Haji & Umrah. All rights reserved.</p>
        </div>
    </div>
</footer>

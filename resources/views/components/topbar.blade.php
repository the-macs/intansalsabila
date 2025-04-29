<div class="bg-gray-800 text-white py-2 text-sm">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center justify-between gap-y-2">
            <!-- Left Section - Contact & Clocks -->
            <div class="flex flex-wrap items-center gap-x-4 gap-y-1">
                <!-- Phone -->
                <div class="flex items-center whitespace-nowrap">
                    <i class="fas fa-phone-alt mr-1.5 text-xs"></i>
                    <span>(+62) 21 8370 5341</span>
                </div>

                <!-- Jakarta Time -->
                <div class="flex items-center">
                    <div class="w-5 h-3.5 bg-[url('https://flagcdn.com/id.svg')] bg-cover mr-1.5"></div>
                    <span id="id-watch" class="whitespace-nowrap">--:--:--</span>
                </div>

                <!-- Saudi Time -->
                <div class="flex items-center">
                    <div class="w-5 h-3.5 bg-[url('https://flagcdn.com/sa.svg')] bg-cover mr-1.5"></div>
                    <span id="sa-watch" class="whitespace-nowrap">--:--:--</span>
                </div>
            </div>

            <!-- Right Section - Social & Links -->
            <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                <!-- Social Icons -->
                <div class="flex items-center space-x-4">
                    <a href="https://www.instagram.com/intansalsabilaofficial/" target="_blank"
                        class="hover:text-pink-400">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/intansalsabilaofficial" target="_blank"
                        class="hover:text-blue-400">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.tiktok.com/@intansalsabilaofficial?_t=ZS-8vuRzhTczCq&_r=1" target="_blank"
                        class="hover:text-black">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('body-scripts')
    <script>
        $(document).ready(function() {
            function updateClocks() {
                // Jakarta Time
                const jakartaTime = new Date().toLocaleString("en-US", {
                    timeZone: "Asia/Jakarta",
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false
                }).replace(/AM|PM/g, '').trim();
                $('#id-watch').text(jakartaTime);

                // Saudi Time
                const saudiTime = new Date().toLocaleString("en-US", {
                    timeZone: "Asia/Riyadh",
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false
                }).replace(/AM|PM/g, '').trim();
                $('#sa-watch').text(saudiTime);
            }

            // Update immediately and every second
            updateClocks();
            setInterval(updateClocks, 1000);
        });
    </script>
@endpush

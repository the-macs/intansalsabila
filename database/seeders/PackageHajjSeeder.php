<?php

namespace Database\Seeders;

use App\Models\PackageHajj;
use Illuminate\Database\Seeder;

class PackageHajjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackageHajj::create([
            "title" => "Haji Khusus",
            "brochure" => "uploads/packages/haji/haji-khusus-2025.jpeg",
            "embarkation" => "1446 H / 2025 M",
            "starting_price" => "USD 15.500,-",
            "sub_info" => "Program Arbain",
            "detail_package" => "<p><strong>Package Price</strong></p><p>USD 15.500 For Quad<br>USD 16.500 For Triple<br>USD 17.500 For Double</p><p><strong>Fasilitas Hotel Bintang Lima</strong></p><p>Makkah : Movenpick Hajar/Pullman Zam zam/Setaraf<br>Medina : Millennium Aqeeq/Leader Al Muna kareem/Setaraf<br>Wisma : Transit<br>Maktab : VIP</p>",
            "incl_package" => null,
            "excl_package" => null,
            "incl_equipment" => null,
            "sort_order" => 2,
            "is_active" => 1,
            "created_at" => "2025-05-10 00:18:48",
            "updated_at" => "2025-05-10 00:40:30"
        ]);

        PackageHajj::create([
            "title" => "Haji Furoda",
            "brochure" => "uploads/packages/haji/haji-furoda-2025.jpeg",
            "embarkation" => "1446 H / 2025 M",
            "starting_price" => "USD 28.000,-",
            "sub_info" => "Langsung Berangkat",
            "detail_package" => "<p><strong>Package Price</strong></p><p>USD 28.000 For Quad<br>USD 29.000 For Triple<br>USD 30.000 For Double</p><p><strong>Fasilitas Hotel Bintang Lima</strong></p><p>Makkah : Movenpick Hajar/Pullman Zam zam/Setaraf<br>Medina : Millennium Aqeeq/Leader Al Muna kareem/Setaraf<br>Wisma : Transit<br>Maktab : VIP</p>",
            "incl_package" => null,
            "excl_package" => null,
            "incl_equipment" => null,
            "sort_order" => 1,
            "is_active" => 1,
            "created_at" => "2025-05-10 00:19:16",
            "updated_at" => "2025-05-10 00:40:24"
        ]);
    }
}

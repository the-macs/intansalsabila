<?php

namespace Database\Seeders;

use App\Models\PackageUmrah;
use Illuminate\Database\Seeder;

class PackageUmrahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackageUmrah::create([
            "title" => "Umrah Desember (9 Hari)",
            "brochure" => "uploads/packages/umrah/umrah-10-desember-2025.jpg",
            "embarkation" => "10 Desember 2025",
            "starting_price" => "Rp. 39.000.000,-",
            "detail_package" => "<p><strong>Paket Quard : Rp. 39 Jt</strong><br>Makkah : Pullman ZamZam/Setaraf (*5)<br>Madinah : Grand Plaza/Setaraf (*4)</p><p><strong>Paket Triple : Rp. 40,5 Jt</strong><br>Makkah : Pullman ZamZam/Setaraf (*5)<br>Madinah : Grand Plaza/Setaraf (*4)</p><p><strong>Paket Double : Rp. 43,5 Jt</strong><br>Makkah : Pullman ZamZam/Setaraf (*5)<br>Madinah : Grand Plaza/Setaraf (*4)</p>",
            "incl_package" => "<p>- Tiket Pesawat Ekonomi PP<br>- Free Kereta Cepat<br>- Hotel &amp; Akomodasi<br>- Makan 3x Sehari (Fullboard)<br>- Transportasi di Arab Saudi<br>- Visa Umrah<br>- Ziarah &amp; City Tour Sesuai program<br>- Muthowif<br>- Handling Saudi<br>- Asuransi Perjalanan<br>- Perlengkapan Umrah<br>- Air Zam-zam</p>",
            "excl_package" => "<p>- Tiket Domestik + Handling<br>- Biaya Kelebihan Bagasi<br>- Biaya Pembuatan Paspor<br>- Vaksin Meningitis<br>- Tour &amp; Transportasi diluar Paket<br>- Biaya Keperluan Pribadi</p>",
            "incl_equipment" => "<p>- Koper Besar<br>- Koper Kabin<br>- Tas Paspor<br>- Tas Ransel<br>- Seragam (Baju Koko, Batik Haji)<br>- Kain Ihrom<br>- Sabuk Ihrom<br>- Mukena dan Bergo (Wanita)<br>- Kantong bantu dan kantong sandal<br>- Buku Doa<br>- Buku Panduan Umroh<br>- ID Card jemaah<br>- Syal</p>",
            "sort_order" => 1,
            "is_active" => 1,
        ]);
    }
}

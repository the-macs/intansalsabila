<?php

namespace Database\Seeders;

use App\Models\BranchOffice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BranchOffice::create([
            'location' => 'Cabang Labuan Bajo',
            'pic' => 'PT Intan Salsabila - Ibu Erly',
            'address' => 'Jalan Gabriel Gampur, Pertigaan Patung Komodo, Labuan Bajo, Manggarai Barat, NTT',
            'phone' => '0813 3982 1404'
        ]);
        BranchOffice::create([
            'location' => 'Perwakilan Kota Blitar',
            'pic' => NULL,
            'address' => 'Jalan Cemara Ruko 78J RT 02/03 (Depan Hotel Gita Puri), Kelurahan Rembang, Sanan Wetan , Kota Blitar Jawa Timur 66136',
            'phone' => '0813 3516 0899'
        ]);
        BranchOffice::create([
            'location' => 'Perwakilan RTG Depok',
            'pic' => 'Ibu Fitri',
            'address' => 'Ruko Villa Rizki Ilhami 2 Jln Raihan No RC 3A, Sawangan Lama, Kec BojongSari, Kota Depok Jawa barat 16518',
            'phone' => '0813 8102 3833'
        ]);
        BranchOffice::create([
            'location' => 'Perwakilan Bandung',
            'pic' => 'Ibu Heni',
            'address' => 'Jalan Mars No. 26 Margahayu Raya Kel. Manjahlega, Kec. Rancasari Kota Bandung',
            'phone' => '0822 1662 2477'
        ]);
    }
}

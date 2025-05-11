<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certification::create(['name' => 'HIMPU 089/HIMPUH/2010', 'image_path' => 'uploads/certifications/himpuh.png',    'sort_order' => 1]);
        Certification::create(['name' => 'Sisko Patuh', 'image_path' => 'uploads/certifications/sisko-patuh.png',    'sort_order' => 2]);
        Certification::create(['name' => 'IATA-Accridated Travel Agent', 'image_path' => 'uploads/certifications/iata.png',    'sort_order' => 3]);
        Certification::create(['name' => 'ASITA', 'image_path' => 'uploads/certifications/asita.png',    'sort_order' => 4]);
        Certification::create(['name' => 'KEMENAG', 'image_path' => 'uploads/certifications/kemenag.png',    'sort_order' => 5]);
        Certification::create(['name' => 'KAN-LSPr-121-IDN', 'image_path' => 'uploads/certifications/kan-lspr.png',    'sort_order' => 6]);
        Certification::create(['name' => 'TiMS/BPW-23.29001', 'image_path' => 'uploads/certifications/tims-bpw.png',    'sort_order' => 7]);
        Certification::create(['name' => 'KAN-LSSM-045-IDN', 'image_path' => 'uploads/certifications/kan-lssm.png',    'sort_order' => 8]);
        Certification::create(['name' => 'QMS-TiMS/3921621', 'image_path' => 'uploads/certifications/tims-qms.png',    'sort_order' => 9]);
    }
}

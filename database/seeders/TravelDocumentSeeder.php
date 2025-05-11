<?php

namespace Database\Seeders;

use App\Models\TravelDocument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TravelDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TravelDocument::create(['description' => '<h3>Layanan untuk mendapatkan berbagai dokumen yang diwajibkan (visa umrah) oleh Kementrian Haji Kerajaan Arab Saudi untuk para jamaah umrah</h3><h3>Provider Visa PT.Intan Salsabila yang merupakan perwakilan resmi satu - satunya dari Muasasah Anjum yang mengeluarkan visa umrah menyediakan visa umrah dengan Mofa cepat.</h3><h3>Untuk informasi agar dapat menggunakan layanan ini, dapat menghubungi kami di kantor atau email kami sebagai berikut: <a href=""mailto:visa@intansalsabila.com""><span style=""text-decoration: underline;"">visa@intansalsabilia.com</span></a> / <a href=""mailto:intansalsabila.visa@gmail.com""><span style=""text-decoration: underline;"">intansalsabila.visa@gmail.com</span></a></h3><h3>atau via whatsapp kami sebagai berikut:</h3>']);
    }
}

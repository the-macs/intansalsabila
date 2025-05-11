<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'slug' => 'home',
            'title' => 'Amalkan Panggilan Bersama PT Intan Salsabila',
            'subtitle' => 'Temukan makna sejati ibadah dalam perjalanan spiritual seumur hidup dengan layanan haji dan umrah premium kami.',
            'image_path' => 'uploads/banner/banner-home.webp'
        ]);
        Banner::create([
            'slug' => 'about-us',
            'title' => 'Tentang Kami',
            'subtitle' => 'Mitra terpercaya Anda untuk layanan haji dan umrah sejak 1994',
            'image_path' => 'uploads/banner/banner-about-us.webp'
        ]);
        Banner::create([
            'slug' => 'contact',
            'title' => 'Kontak',
            'subtitle' => 'Hubungi kami untuk informasi lebih lanjut',
            'image_path' => 'uploads/banner/banner-contact.webp'
        ]);
        Banner::create([
            'slug' => 'package-hajj',
            'title' => 'Paket Haji',
            'subtitle' => 'Pilihlah paket haji yang kami rancang dengan cermat sesuai dengan kebutuhan dan anggaran Anda',
            'image_path' => 'uploads/banner/banner-hajj.webp'
        ]);
        Banner::create([
            'slug' => 'package-umrah',
            'title' => 'Paket Umrah',
            'subtitle' => 'Pilihlah paket umrah yang kami rancang dengan cermat sesuai dengan kebutuhan dan anggaran Anda',
            'image_path' => 'uploads/banner/banner-umrah.webp'
        ]);
        Banner::create([
            'slug' => 'service-airline',
            'title' => 'Tiket Pesawat',
            'subtitle' => 'Intan Tour adalah anggota IATA dan agen dari berbagai maskapai domestik dan internasional',
            'image_path' => NULL
        ]);
        Banner::create([
            'slug' => 'service-hotel',
            'title' => 'Voucher Hotel',
            'subtitle' => 'Kami dapat melakukan reservasi untuk Anda di hotel berikut',
            'image_path' => NULL
        ]);
        Banner::create([
            'slug' => 'activity-article',
            'title' => 'Artikel',
            'subtitle' => 'Konten informatif untuk memandu Anda dalam perjalanan spiritual Anda',
            'image_path' => 'uploads/banner/banner-article-v1.webp'
        ]);
        Banner::create([
            'slug' => 'activity-gallery',
            'title' => 'Galeri',
            'subtitle' => 'Jelajahi koleksi foto kegiatan kami',
            'image_path' => 'uploads/banner/banner-gallery.webp'
        ]);
    }
}

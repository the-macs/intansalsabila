<?php

namespace Database\Seeders;

use App\Models\CompanyInfo;
use Illuminate\Database\Seeder;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyInfo::create([
            "name" => "PT Intan Salsabila",
            "address" => "Jl. Tebet Barat Dalam Raya No. 55 C Jakarta 12810 - Indonesia",
            "whatsapp" => "6287778500808",
            "phone" => json_decode("[{\"number\": \"021 8370 5341\"}]", true),
            "fax" => json_decode("[{\"number\": \"021 8370 5342\"}]", true),
            "email" => json_decode("[{\"address\": \"intansalsabila.travel@gmail.com\"}, {\"address\": \"umrahajj.intansalsabila@yahoo.com\"}]", true),
            "working_hours" => json_decode("[{\"day\": \"Senin - Jumat\", \"hours\": \"09:00 - 17:00\"}, {\"day\": \"Sabtu\", \"hours\": \"09:00 - 13:00\"}]", true),
            "instagram" => "https://www.instagram.com/intansalsabilaofficial/",
            "facebook" => "https://www.facebook.com/intansalsabilaofficial",
            "tiktok" => "https://www.tiktok.com/@intansalsabilaofficial",
            "vision" => "<p>Menjadi penyelenggara perjalanan Umrah dan Haji Khusus yang mampu memberikan bimbingan Ibadah yang sesuai Al Qur'an dan Sunnah, dikelola secara professional dan amanah sehingga dapat memberikan pelayanan sempurna kepada setiap Jama'ah.</p>",
            "mission" => "<p>Untuk mewujudkan visi tersebut, kami mempunyai 3 misi berikut:</p><ul><li>Memberikan bimbingan manasik yang sesuai dengan Al-Qur'an dan Sunnah juga membimbing kaum muslimin &amp; muslimah agar dapat memahami dan mengamalkan agama Islam dalam kehidupan sehari-hari.</li><li>Memberikan pelayanan maksimal dengan merealisasikan prinsip dasar service excellence yang berkomitmen terhadap kualitas mutu, kinerja, dan professionalisme.</li><li>Senantiasa meningkatkan upaya pengembangan kualitas sumber daya manusia, sistem, sarana dan prasarana serta teknologi yang dimiliki.</li></ul>",
            "company_logo" => json_decode("{\"icon\": \"uploads/logo/logo-icon.webp\", \"alt_logo\": \"uploads/logo/logo-w-border.webp\", \"main_logo\": \"uploads/logo/logo-full.webp\"}", true),
            "regulation" => json_decode("{\"hajj\": \"uploads/regulation/WhatsApp Image 2025-05-11 at 07.47.35.jpeg\", \"umrah\": \"uploads/regulation/WhatsApp Image 2025-05-11 at 07.46.53.jpeg\"}", true),
            "company_profile" => "uploads/file/01JTSB4V7GC18Q3PSJYAWQ2890.pdf",
            "map_embed" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1904006438267!2d106.84501627623708!3d-6.238617693749638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3bdd93e2dc7%3A0xc639d165405175fc!2sJl.%20Tebet%20Barat%20Dalam%20Raya%20No.55%2C%20RT.6%2FRW.4%2C%20Tebet%20Bar.%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012810!5e0!3m2!1sen!2sid!4v1745205265838!5m2!1sen!2sid",
            "about_us" => "<h2>PT. INTAN SALSABILA</h2><p><strong>PT. Intan Salsabila</strong> yang berdiri sejak tahun 1994 dengan izin Penyelenggara Perjalanan Ibadah Umrah: SK. Mentri Agama RI No. U.26 Tahun 2020 dan izin Penyelenggara Ibadah Haji Khusus: SK. Mentri Agama RI No. PHU/HK.3090/IX/2009 Tahun 2018, ingin mengambil bagian dalam terselenggaranya ibadah yang nyaman, aman dan terpercaya dan tentunya sesuai dengan tuntunan Allah SWT dan sunnah Nabi Muhammad SAW.</p><p>Intan Salsabila merupakan badan usaha jasa pariwisata berdasarkan perizinan yang diterbitkan oleh lembaha pemerintah yang berwenang meliputi usaha-usaha:</p><ul><li>Operator Tour &amp; Travel Domestik &amp; Internasional</li><li>Agent Penjualan Tiket Pesawat Domestik &amp; Internasional</li></ul><h3>Ijin Usaha</h3><p>Sebagai bentuk profesionalisme, Intan Tour telah mendapat ijin dan keanggotaan berikut:</p><ul><li>Umrah: Nomor U.26 Tahun 2020</li><li>Haji Khusus: Nomo 589 Tahun 2021</li><li>Kemenkum HAM: AHU-0055112.AH.01.02 Tahun 2023</li><li>HIMPUH: 089/HIMPUH/2010</li><li>NIB: 0220302221018</li><li>IATA: 15-0 8221 1 &amp; 15-3 1084 2</li><li>ASITA: 0461/VIII/DPP/97</li><li>SNI ISO: 9001:2015 QMS<ul><li>Reg. No.: QMS-TiMS/3900622</li></ul></li><li>BPW: TiMS/BPW-23/29001/LSPr/IX/023<ul><li>LSPr-121-IDN</li></ul></li></ul>",
        ]);
    }
}

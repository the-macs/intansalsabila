<?php

$basic_equipment = '
    <p>
        - Koper Besar<br>
        - Koper Kabin<br>
        - Tas Paspor<br>
        - Tas Ransel<br>
        - Seragam (Baju Koko, Batik Haji)<br>
        - Kain Ihrom<br>
        - Sabuk Ihrom<br>
        - Mukena dan Bergo (Wanita)<br>
        - Kantong bantu dan kantong sandal<br>
        - Buku Doa<br>
        - Buku Panduan Umroh<br>
        - ID Card jemaah<br>
        - Syal
    </p>
';

return [
    'packages' => [
        'umrah' => [
            [
                'id' => 1,
                'brochure' => 'umrah-10-desember-2025.jpg',
                'title' => "Umrah Desember (9 Hari)",
                'embarkation' => '10 Desember 2025',
                'starting_price' => 'Rp. 39.000.000,-',
                'detail_package' => '
                <p>
                    <b>Paket Quard : Rp. 39 Jt</b>
                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                    <br>Madinah : Grand Plaza/Setaraf (*4)
                </p>
                <p>
                    <b>Paket Triple : Rp. 40,5 Jt</b>
                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                    <br>Madinah : Grand Plaza/Setaraf (*4)
                </p>
                <p><b>Paket Double : Rp. 43,5 Jt</b>
                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                    <br>Madinah : Grand Plaza/Setaraf (*4)
                </p>',
                'incl_package' => '
                <p>
                    - Tiket Pesawat Ekonomi PP<br/>
                    - Free Kereta Cepat<br/>
                    - Hotel & Akomodasi<br/>
                    - Makan 3x Sehari (Fullboard)<br/>
                    - Transportasi di Arab Saudi<br/>
                    - Visa Umrah<br/>
                    - Ziarah & City Tour Sesuai program<br/>
                    - Muthowif<br/>
                    - Handling Saudi<br/>
                    - Asuransi Perjalanan<br/>
                    - Perlengkapan Umrah<br/>
                    - Air Zam-zam<br/>
                </p>
            ',
                'excl_package' => '
                <p>
                    - Tiket Domestik + Handling<br/>
                    - Biaya Kelebihan Bagasi<br/>
                    - Biaya Pembuatan Paspor<br/>
                    - Vaksin Meningitis<br/>
                    - Tour & Transportasi diluar Paket<br/>
                    - Biaya Keperluan Pribadi<br/>
                </p>
            ',
                'incl_equipment' => $basic_equipment,
            ],
            [
                'id' => 2,
                'brochure' => 'umrah-08-november-2025.jpg',
                'title' => "Umrah Plus Turki (12 Hari)",
                'embarkation' => '08 November 2025',
                'starting_price' => 'Rp. 42.500.000,-',
                'detail_package' => '<p>
                                    <b>Paket Quard : Rp. 42,5 Jt</b>
                                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                                    <br>Madinah : Grand Plaza/Setaraf (*4)
                                    <br>Istanbul : Mercure (*4)
                                    <br>Bursa : Gonlu Ferah (*4)
                                </p>
                                <p>
                                    <b>Paket Triple : Rp. 44 Jt</b>
                                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                                    <br>Madinah : Grand Plaza/Setaraf (*4)
                                    <br>Istanbul : Mercure (*4)
                                    <br>Bursa : Gonlu Ferah (*4)
                                </p>
                                <p><b>Paket Double : Rp. 46,5 Jt</b>
                                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                                    <br>Madinah : Grand Plaza/Setaraf (*4)
                                    <br>Istanbul : Mercure (*4)
                                    <br>Bursa : Gonlu Ferah (*4)
                                </p>',
                'incl_package' => '
                <p>
                    - Tiket Pesawat Ekonomi PP<br/>
                    - Free Kereta Cepat<br/>
                    - Hotel & Akomodasi<br/>
                    - Makan 3x Sehari (Fullboard)<br/>
                    - Transportasi di Arab Saudi & Turky<br/>
                    - Visa Umrah<br/>
                    - Ziarah & City Tour Sesuai program<br/>
                    - Muthowif<br/>
                    - Handling Saudi<br/>
                    - Asuransi Perjalanan<br/>
                    - Perlengkapan Umrah<br/>
                    - Air Zam-zam<br/>               
                </p>
            ',
                'excl_package' => '
                <p>
                    - Tiket Domestik + Handling<br/>
                    - Tips di Turky<br/>
                    - Biaya Kelebihan Bagasi<br/>
                    - Biaya Pembuatan Paspor<br/>
                    - Vaksin Meningitis<br/>
                    - Tour & Transportasi diluar Paket<br/>
                    - Biaya Keperluan Pribadi<br/>
                </p>
            ',
                'incl_equipment' => $basic_equipment,
            ],
            [
                'id' => 3,
                'brochure' => 'umrah-01-oktober-2025.jpg',
                'title' => "Umrah Reguler (9 Hari)",
                'embarkation' => '01 Oktober 2025',
                'starting_price' => 'Rp. 38.000.000,-',
                'detail_package' => '
                <p>
                    <b>Paket Quard : Rp. 38 Jt</b>
                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                    <br>Madinah : Grand Plaza/Setaraf (*4)
                </p>
                <p>
                    <b>Paket Triple : Rp. 39,5 Jt</b>
                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                    <br>Madinah : Grand Plaza/Setaraf (*4)
                </p>
                <p>
                    <b>Paket Double : Rp. 42,5 Jt</b>
                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                    <br>Madinah : Grand Plaza/Setaraf (*4)
                </p>',
                'incl_package' => '
                <p>
                    - Tiket Pesawat Ekonomi PP<br/>
                    - Free Kereta Cepat<br/>
                    - Hotel & Akomodasi<br/>
                    - Makan 3x Sehari (Fullboard)<br/>
                    - Transportasi di Arab Saudi<br/>
                    - Visa Umrah<br/>
                    - Ziarah & City Tour Sesuai program<br/>
                    - Muthowif<br/>
                    - Handling Saudi<br/>
                    - Asuransi Perjalanan<br/>
                    - Perlengkapan Umrah<br/>
                    - Air Zam-zam<br/>        
                </p>
            ',
                'excl_package' => '
                <p>
                    - Tiket Domestik + Handling<br/>
                    - Biaya Kelebihan Bagasi<br/>
                    - Biaya Pembuatan Paspor<br/>
                    - Vaksin Meningitis<br/>
                    - Tour & Transportasi diluar Paket<br/>
                    - Biaya Keperluan Pribadi<br/>
                </p>
            ',
                'incl_equipment' => $basic_equipment,
            ],
            [
                'id' => 4,
                'brochure' => 'umrah-oktober-2025.jpg',
                'title' => "Umrah Reguler (9 Hari)",
                'embarkation' => 'Oktober 2025',
                'starting_price' => 'Rp. 29.500.000,-',
                'detail_package' => '
                <p>
                    <b>Paket Quard : Rp. 29,5 Jt</b>
                    <br>Makkah : Snood Ajyad/Setaraf (*3)
                    <br>Madinah : ODST Al Madinah/Setaraf (*3)
                </p>
                <p>
                    <b>Paket Triple : Rp. 30,5 Jt</b>
                    <br>Makkah : Snood Ajyad/Setaraf (*3)
                    <br>Madinah : ODST Al Madinah/Setaraf (*3)
                </p>
                <p>
                    <b>Paket Double : Rp. 32,5 Jt</b>
                    <br>Makkah : Snood Ajyad/Setaraf (*3)
                    <br>Madinah : ODST Al Madinah/Setaraf (*3)
                </p>',
                'incl_package' => '
                <p>
                    - Tiket Pesawat Ekonomi PP<br/>
                    - Hotel & Akomodasi<br/>
                    - Makan 3x Sehari (Fullboard)<br/>
                    - Transportasi di Arab Saudi<br/>
                    - Visa Umrah<br/>
                    - Ziarah & City Tour Sesuai program<br/>
                    - Muthowif<br/>
                    - Handling Saudi<br/>
                    - Asuransi Perjalanan<br/>
                    - Perlengkapan Umrah<br/>
                    - Air Zam-zam<br/>
                </p>
            ',
                'excl_package' => '
                <p>
                    - Tiket Domestik + Handling<br/>
                    - Biaya Kelebihan Bagasi<br/>
                    - Biaya Pembuatan Paspor<br/>
                    - Vaksin Meningitis<br/>
                    - Tour & Transportasi diluar Paket<br/>
                    - Biaya Keperluan Pribadi<br/>
                </p>
            ',
                'incl_equipment' => $basic_equipment,
            ],
            [
                'id' => 5,
                'brochure' => 'umrah-30-agustus-2025.jpg',
                'title' => "Umrah Maulid (9 Hari)",
                'embarkation' => '30 Agustus 2025',
                'starting_price' => 'Rp. 38.000.000,-',
                'detail_package' => '<p>
                                    <b>Paket Quard : Rp. 38 Jt</b>
                                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                                    <br>Madinah : Grand Plaza/Setaraf (*4)
                                </p>
                                <p>
                                    <b>Paket Triple : Rp. 39,5 Jt</b>
                                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                                    <br>Madinah : Grand Plaza/Setaraf (*4)
                                </p>
                                <p><b>Paket Double : Rp. 42,5 Jt</b>
                                    <br>Makkah : Pullman ZamZam/Setaraf (*5)
                                    <br>Madinah : Grand Plaza/Setaraf (*4)
                                </p>',
                'incl_package' => '
                <p>
                    - Tiket Pesawat Ekonomi PP<br/>
                    - Free Kereta Cepat<br/>
                    - Hotel & Akomodasi<br/>
                    - Makan 3x Sehari (Fullboard)<br/>
                    - Transportasi di Arab Saudi<br/>
                    - Visa Umrah<br/>
                    - Ziarah & City Tour Sesuai program<br/>
                    - Muthowif<br/>
                    - Handling Saudi<br/>
                    - Asuransi Perjalanan<br/>
                    - Perlengkapan Umrah<br/>
                    - Air Zam-zam
                </p>
            ',
                'excl_package' => '
                <p>
                    - Tiket Domestik + Handling<br />
                    - Biaya Kelebihan Bagasi<br />
                    - Biaya Pembuatan Paspor<br />
                    - Vaksin Meningitis<br />
                    - Tour & Transportasi diluar Paket<br />
                    - Biaya Keperluan Pribadi

                </p>
            ',
                'incl_equipment' => $basic_equipment,
            ],
            [
                'id' => 6,
                'brochure' => 'umrah-19-juli-2025.jpg',
                'title' => "Umrah Bersama Yatim Hafidz Quran (9 Hari)",
                'embarkation' => '19 Juli 2025',
                'starting_price' => 'Rp. 33.500.000,-',
                'detail_package' => '
                <p>
                    <b>Paket Quard : Rp. 33,5 Jt</b>
                    <br>Makkah : Rayyana/Setaraf (*4)
                    <br>Madinah : Grand Plaza/Setaraf (*4)
                </p>
                <p>
                    <b>Paket Triple : Rp. 35 Jt</b>
                    <br>Makkah : Rayyana/Setaraf (*4)
                    <br>Madinah : Grand Plaza/Setaraf (*4)
                </p>
                <p><b>Paket Double : Rp. 36,5 Jt</b>
                    <br>Makkah : Rayyana/Setaraf (*4)
                    <br>Madinah : Grand Plaza/Setaraf (*4)
                </p>',
                'incl_package' => '
                <p>
                    - Tiket Pesawat Ekonomi PP<br/>
                    - Hotel & Akomodasi<br/>
                    - Makan 3x Sehari (Fullboard)<br/>
                    - Transportasi di Arab Saudi<br/>
                    - Visa Umrah<br/>
                    - Ziarah & City Tour Sesuai program<br/>
                    - Muthowif<br/>
                    - Handling Saudi<br/>
                    - Asuransi Perjalanan<br/>
                    - Perlengkapan Umrah<br/>
                    - Air Zam-zam<br/>
                </p>
            ',
                'excl_package' => '
                <p>
                    - Tiket Domestik + Handling<br/>
                    - Tiket Kereta Cepat<br/>
                    - Biaya Kelebihan Bagasi<br/>
                    - Biaya Pembuatan Paspor<br/>
                    - Vaksin Meningitis<br/>
                    - Tour & Transportasi diluar Paket<br/>
                    - Biaya Keperluan Pribadi<br/>
                </p>
            ',
                'incl_equipment' => $basic_equipment,
            ]
        ],
        'hajj' => [
            [
                'id' => 1,
                'brochure' => 'haji-khusus-2025.jpeg',
                'title' => "Haji Khusus",
                'sub_info' => 'Program Arbain',
                'embarkation' => '1446 H / 2025 M',
                'starting_price' => 'USD 15.500,-',
                'detail_package' => '
                <p><b>Package Price</b><br/></p>
                <p>
                    USD 15.500 For Quad<br/>
                    USD 16.500 For Triple<br/>
                    USD 17.500 For Double<br/>
                </p>
                <p><b>Fasilitas Hotel Bintang Lima</b><br/></p>
                <p>
                    Makkah : Movenpick Hajar/Pullman Zam zam/Setaraf<br/>
                    Medina : Millennium Aqeeq/Leader Al Muna kareem/Setaraf<br/>
                    Wisma : Transit<br/>
                    Maktab : VIP
                </p>
            ',
                'incl_package' => '',
                'excl_package' => '',
                'incl_equipment' => '',
            ],
            [
                'id' => 2,
                'brochure' => 'haji-furoda-2025.jpeg',
                'title' => "Haji Furoda",
                'sub_info' => 'Langsung Berangkat',
                'embarkation' => '1446 H / 2025 M',
                'starting_price' => 'USD 28.000,-',
                'detail_package' => '
                <p><b>Package Price</b><br/></p>
                <p>
                    USD 28.000 For Quad<br/>
                    USD 29.000 For Triple<br/>
                    USD 30.000 For Double<br/>
                </p>
                <p><b>Fasilitas Hotel Bintang Lima</b><br/></p>
                <p>
                    Makkah : Movenpick Hajar/Pullman Zam zam/Setaraf<br/>
                    Medina : Millennium Aqeeq/Leader Al Muna kareem/Setaraf<br/>
                    Wisma : Transit<br/>
                    Maktab : VIP
                </p>
            ',
                'incl_package' => '',
                'excl_package' => '',
                'incl_equipment' => '',
            ],
        ]
    ],
    'activities' => [
        'galleries' => [
            [
                'id' => 1,
                'slug' => 'halal-bi-halal-2025',
                'title' => 'Halal Bi Halal 2025',
                'date' => '15 April 2025',
                'description' => 'Foto Halal Bi Halal 2025 Keluarga Besar Intan Salsabila',
                'imageCount' => 12,
                'thumbnail' => 'IMG-20250413-WA0003.jpg.jpg',
                'location' => 'Jakarta',
                'images' => [
                    'IMG-20250414-WA0027.jpg',
                    'IMG-20250413-WA0003.jpg',
                    'IMG-20250413-WA0004.jpg',
                    'IMG-20250413-WA0005.jpg',
                    'IMG-20250413-WA0006.jpg',
                    'IMG-20250413-WA0007.jpg',
                    'IMG-20250413-WA0011.jpg',
                    'IMG-20250413-WA0023.jpg',
                    'IMG-20250413-WA0024.jpg',
                    'IMG-20250414-WA0003.jpg',
                    'IMG-20250414-WA0006.jpg',
                    'IMG-20250414-WA0013.jpg',
                ]
            ],
            [
                'id' => 2,
                'slug' => 'sosialisasi-haji-umrah-labuan-bajo',
                'title' => 'Sosialisasi Haji Umrah Labuan Bajo',
                'date' => '15 April 2025',
                'description' => 'Foto Sosialisasi Haji Umrah di Labuan Bajo',
                'imageCount' => 18,
                'thumbnail' => 'IMG-20250413-WA0003.jpg.jpg',
                'location' => 'Labuan Bajo',
                'images' => [
                    'IMG-20241118-WA0031.jpg',
                    'IMG-20241117-WA0058.jpg',
                    'IMG-20241117-WA0062.jpg',
                    'IMG-20241117-WA0063.jpg',
                    'IMG-20241117-WA0064.jpg',
                    'IMG-20241117-WA0066.jpg',
                    'IMG-20241118-WA0004.jpg',
                    'IMG-20241118-WA0029.jpg',
                    'IMG-20241118-WA0032.jpg',
                    'IMG-20241118-WA0033.jpg',
                    'IMG-20241121-WA0010.jpg',
                    'IMG-20241121-WA0016.jpg',
                    'IMG-20241121-WA0017.jpg',
                    'IMG-20241121-WA0018.jpg',
                    'IMG-20241121-WA0029.jpg',
                    'IMG-20241121-WA0030.jpg',
                    'IMG-20241121-WA0031.jpg',
                    'IMG-20241121-WA0032.jpg',
                ]
            ],
            [
                'id' => 3,
                'slug' => 'kegiatan-haji-tahun-2024',
                'title' => 'Kegiatan Haji tahun 2024',
                'date' => '16 Juni 2024',
                'description' => 'Foto Kegiatan Haji tahun 2024',
                'imageCount' => 29,
                'location' => 'Arab Saudi',
                'images' => [
                    'IMG-20240620-WA0083.jpg',
                    'IMG-20240602-WA0015.jpg',
                    'IMG-20240603-WA0030.jpg',
                    'IMG-20240604-WA0042.jpg',
                    'IMG-20240605-WA0056.jpg',
                    'IMG-20240606-WA0014.jpg',
                    'IMG-20240615-WA0011.jpg',
                    'IMG-20240615-WA0017.jpg',
                    'IMG-20240616-WA0001.jpg',
                    'IMG-20240616-WA0002.jpg',
                    'IMG-20240616-WA0014.jpg',
                    'IMG-20240616-WA0015.jpg',
                    'IMG-20240616-WA0049.jpg',
                    'IMG-20240616-WA0050.jpg',
                    'IMG-20240616-WA0051.jpg',
                    'IMG-20240618-WA0006.jpg',
                    'IMG-20240618-WA0011.jpg',
                    'IMG-20240620-WA0092.jpg',
                    'IMG-20240621-WA0024.jpg',
                    'IMG-20240624-WA0016.jpg',
                    'IMG-20240624-WA0043.jpg',
                    'IMG-20240624-WA0052.jpg',
                    'IMG-20240624-WA0053.jpg',
                    'IMG-20240628-WA0005.jpg',
                    'IMG-20240628-WA0006.jpg',
                    'IMG-20240628-WA0007.jpg',
                    'IMG-20240628-WA0008.jpg',
                    'IMG-20240628-WA0009.jpg',
                    'IMG-20240628-WA0017.jpg',
                ]
            ],
            [
                'id' => 4,
                'slug' => 'kegiatan-umrah-tahun-2024',
                'title' => 'Kegiatan Umrah tahun 2024',
                'date' => '14 Juli 2024',
                'description' => 'Foto Kegiatan Umrah tahun 2024',
                'imageCount' => 24,
                'location' => 'Arab Saudi',
                'images' => [
                    'IMG-20240915-WA0022.jpg',
                    'IMG-20240715-WA0138.jpg',
                    'IMG-20240715-WA0147.jpg',
                    'IMG-20240716-WA0003.jpg',
                    'IMG-20240716-WA0034.jpg',
                    'IMG-20240722-WA0027.jpg',
                    'IMG-20240723-WA0088.jpg',
                    'IMG-20240724-WA0025.jpg',
                    'IMG-20240724-WA0029.jpg',
                    'IMG-20240727-WA0057.jpg',
                    'IMG-20240728-WA0054.jpg',
                    'IMG-20240915-WA0050.jpg',
                    'IMG-20240916-WA0036.jpg',
                    'IMG-20240918-WA0020.jpg',
                    'IMG-20240918-WA0022.jpg',
                    'IMG-20241205-WA0143.jpg',
                    'IMG-20241205-WA0144.jpg',
                    'IMG-20241207-WA0094.jpg',
                    'IMG-20241220-WA0028.jpg',
                    'IMG-20241220-WA0030.jpg',
                    'IMG-20250211-WA0009.jpg',
                    'IMG-20250214-WA0012.jpg',
                    'IMG-20250214-WA0036.jpg',
                    'IMG-20250215-WA0037.jpg',
                ]
            ]
        ],
        'articles' => [
            [
                'id' => 1,
                'title' => "Persiapan untuk Umrah Pertama Anda: Panduan Lengkap",
                'image' => "https://picsum.photos/600/400",
                'date' => "April 10, 2025",
                'author' => "Administrator",
                'slug' => "persiapan-untuk-umrah-pertama-anda-panduan-lengkap",
                'content' => '
                    <p>Memulai perjalanan Umrah pertama Anda adalah pengalaman spiritual yang mendalam yang membutuhkan persiapan fisik dan spiritual. Panduan komprehensif ini akan membantu Anda menavigasi proses dari awal hingga akhir, memastikan pengalaman yang bermakna dan memuaskan.</p>
        
                    <h2>Persiapan Spiritual</h2>
                    
                    <p>Sebelum memulai perjalanan, penting untuk mempersiapkan hati dan pikiran Anda. Umrah bukan hanya perjalanan fisik tetapi juga perjalanan spiritual yang membutuhkan niat yang tulus (niyyah). Luangkan waktu untuk mempelajari tentang makna Umrah, ritualnya, dan manfaat spiritual yang ditawarkannya.</p>
                    
                    <p>Pertimbangkan persiapan spiritual berikut:</p>
                    
                    <ul>
                    <li>Mencari pengetahuan tentang ritual dan maknanya</li>
                    <li>Membuat taubat yang tulus (Tawbah) untuk dosa masa lalu</li>
                    <li>Menyelesaikan konflik atau perselisihan dengan orang lain</li>
                    <li>Meningkatkan doa dan permohonan harian Anda</li>
                    <li>Membaca dan merenungkan Al-Quran secara teratur</li>
                    </ul>
                    
                    <h2>Dokumentasi dan Persyaratan Hukum</h2>
                    
                    <p>Memastikan dokumentasi Anda teratur sangat penting untuk perjalanan yang lancar. Berikut yang Anda butuhkan:</p>
                    
                    <ul>
                    <li>Paspor yang masih berlaku minimal enam bulan dari tanggal perjalanan Anda</li>
                    <li>Visa Umrah (diajukan melalui agen resmi)</li>
                    <li>Vaksinasi yang diperlukan dan sertifikat kesehatan</li>
                    <li>Asuransi perjalanan yang mencakup keadaan darurat kesehatan</li>
                    <li>Salinan semua dokumen penting (disimpan terpisah dari dokumen asli)</li>
                    </ul>
                    
                    <h2>Barang-barang Penting</h2>
                    
                    <p>Pengemasan yang tepat dapat membuat perjalanan Anda lebih nyaman. Pertimbangkan barang-barang penting berikut:</p>
                    
                    <h3>Pakaian</h3>
                    
                    <ul>
                    <li>Untuk pria: Pakaian ihram (dua kain putih tanpa jahitan)</li>
                    <li>Untuk wanita: Pakaian sopan dan longgar yang menutupi tubuh (abaya, hijab)</li>
                    <li>Sepatu jalan yang nyaman</li>
                    <li>Pakaian biasa tambahan untuk masa tinggal Anda</li>
                    </ul>
                    
                    <h3>Barang Pribadi</h3>
                    
                    <ul>
                    <li>Perlengkapan mandi tanpa wewangian (saat dalam Ihram, produk wangi dilarang)</li>
                    <li>Obat-obatan dan perlengkapan P3K</li>
                    <li>Sajadah</li>
                    <li>Al-Quran kecil atau aplikasi seluler dengan Al-Quran</li>
                    <li>Buku doa atau aplikasi</li>
                    </ul>
                    
                    <h2>Mempelajari Ritual</h2>
                    
                    <p>Memahami ritual Umrah sebelum Anda tiba akan membantu Anda melakukannya dengan benar dan dengan kesadaran spiritual yang lebih besar. Ritual utama meliputi:</p>
                    
                    <ol>
                    <li><strong>Ihram</strong>: Keadaan kemurnian dan dedikasi yang dimasuki sebelum memulai Umrah</li>
                    <li><strong>Tawaf</strong>: Mengelilingi Ka\'bah tujuh kali</li>
                    <li><strong>Sa\'i</strong>: Berjalan antara bukit Safa dan Marwah tujuh kali</li>
                    <li><strong>Halq atau Taqsir</strong>: Mencukur atau memotong rambut untuk menandai penyelesaian Umrah</li>
                    </ol>
                    
                    <p>Pertimbangkan untuk menghadiri kelas atau lokakarya pra-Umrah, menonton video instruksional, atau membaca panduan terperinci untuk membiasakan diri dengan ritual ini.</p>
                    
                    <h2>Persiapan Fisik</h2>
                    
                    <p>Umrah melibatkan aktivitas fisik yang cukup banyak, termasuk berdiri dalam waktu lama, berjalan, dan menavigasi kerumunan. Mempersiapkan tubuh Anda sebelumnya dapat membuat pengalaman kurang melelahkan:</p>
                    
                    <ul>
                    <li>Mulai program berjalan beberapa minggu sebelum perjalanan Anda</li>
                    <li>Berlatih berdiri untuk waktu yang lama</li>
                    <li>Pastikan Anda cukup istirahat sebelum bepergian</li>
                    <li>Atasi masalah kesehatan apa pun dengan dokter Anda</li>
                    </ul>
                    
                    <h2>Perencanaan Keuangan</h2>
                    
                    <p>Perencanaan keuangan yang tepat memastikan Anda dapat fokus pada perjalanan spiritual Anda tanpa stres yang tidak perlu:</p>
                    
                    <ul>
                    <li>Anggarkan untuk semua pengeluaran termasuk perjalanan, akomodasi, makanan, dan transportasi</li>
                    <li>Sisihkan dana untuk amal (Sadaqah) saat berada di kota-kota suci</li>
                    <li>Bawa campuran uang tunai dan kartu untuk situasi yang berbeda</li>
                    <li>Informasikan bank Anda tentang rencana perjalanan Anda untuk menghindari pemblokiran kartu</li>
                    </ul>
                    
                    <h2>Selama Umrah Anda</h2>
                    
                    <p>Setelah Anda tiba, ingatlah tips ini untuk pengalaman yang memuaskan:</p>
                    
                    <ul>
                    <li>Tetap terhidrasi, terutama selama Tawaf dan Sa\'i</li>
                    <li>Beristirahat bila diperlukan; tidak ada terburu-buru untuk menyelesaikan ritual</li>
                    <li>Tetap fokus pada ibadah dan hindari percakapan duniawi yang tidak perlu</li>
                    <li>Bersabarlah dan bersikap baik dengan sesama jamaah</li>
                    <li>Perbanyak doa, terutama pada waktu dan tempat di mana doa lebih mungkin dikabulkan</li>
                    </ul>
                    
                    <h2>Setelah Menyelesaikan Umrah</h2>
                    
                    <p>Setelah menyelesaikan Umrah Anda, luangkan waktu untuk:</p>
                    
                    <ul>
                    <li>Mengungkapkan rasa syukur kepada Allah karena memungkinkan Anda menyelesaikan perjalanan ini</li>
                    <li>Merenungkan pengalaman Anda dan pelajaran yang dipetik</li>
                    <li>Mempertahankan momentum spiritual dengan melanjutkan perbuatan baik</li>
                    <li>Berbagi pengetahuan dan pengalaman Anda dengan orang lain yang mungkin mendapat manfaat</li>
                    </ul>
                    
                    <p>Ingat, Umrah bukan hanya acara satu kali tetapi pengalaman transformatif yang seharusnya memiliki dampak yang langgeng pada hidup Anda. Peningkatan spiritual dan pelajaran yang diperoleh harus dibawa ke dalam kehidupan sehari-hari Anda, membantu Anda menjadi Muslim yang lebih baik dan manusia yang lebih baik.</p>
                    
                    <p>Semoga Allah menerima Umrah Anda dan menjadikannya sarana pengampunan dan peningkatan dalam kehidupan ini dan akhirat.</p>
                '
            ],
            [
                'id' => 2,
                'title' => "Haji vs Umrah: Memahami Perbedaannya",
                'image' => "https://picsum.photos/600/400",
                'date' => "April 10, 2025",
                'author' => "Administrator",
                'slug' => "haji-vs-umrah-memahami-perbedaannya",
                'content' => '
                    <p>Bagi umat Muslim di seluruh dunia, Haji dan Umrah merupakan perjalanan spiritual yang signifikan ke kota suci Mekkah. Meskipun keduanya memiliki banyak kesamaan, ada perbedaan penting antara kedua ibadah ini. Artikel ini memberikan perbandingan komprehensif untuk membantu Anda memahami perbedaan dan signifikansi Haji dan Umrah.</p>
        
                    <h2>Definisi dan Konsep Dasar</h2>
                    
                    <h3>Apa itu Haji?</h3>
                    
                    <p>Haji adalah ibadah tahunan umat Islam ke Mekkah, Arab Saudi, kota tersuci bagi umat Muslim. Ini adalah kewajiban agama yang harus dilaksanakan setidaknya sekali seumur hidup oleh setiap Muslim dewasa yang secara fisik dan finansial mampu melakukan perjalanan tersebut. Haji adalah rukun Islam kelima dan dilaksanakan selama bulan Islam Dzulhijjah, khususnya dari tanggal 8 hingga 13 bulan tersebut.</p>
                    
                    <h3>Apa itu Umrah?</h3>
                    
                    <p>Umrah sering disebut sebagai "haji kecil" atau "haji minor," bukan karena kurang penting, tetapi karena tidak wajib seperti Haji. Umrah dapat dilakukan kapan saja sepanjang tahun dan melibatkan lebih sedikit ritual dibandingkan dengan Haji. Meskipun sangat dianjurkan, Umrah adalah Sunnah (praktik Nabi Muhammad) daripada kewajiban wajib.</p>
                    
                    <h2>Perbedaan Utama Antara Haji dan Umrah</h2>
                    
                    <h3>1. Status Kewajiban</h3>
                    
                    <p><strong>Haji:</strong> Wajib sekali seumur hidup bagi mereka yang mampu.</p>
                    <p><strong>Umrah:</strong> Sunnah (dianjurkan) tetapi tidak wajib.</p>
                    
                    <h3>2. Waktu</h3>
                    
                    <p><strong>Haji:</strong> Hanya dapat dilakukan pada tanggal tertentu dalam bulan Islam Dzulhijjah (8 hingga 13).</p>
                    <p><strong>Umrah:</strong> Dapat dilakukan kapan saja sepanjang tahun.</p>
                    
                    <h3>3. Durasi</h3>
                    
                    <p><strong>Haji:</strong> Membutuhkan waktu sekitar 5-6 hari untuk menyelesaikan semua ritual.</p>
                    <p><strong>Umrah:</strong> Dapat diselesaikan dalam beberapa jam, meskipun kebanyakan jamaah menghabiskan 2-3 hari.</p>
                    
                    <h3>4. Ritual</h3>
                    
                    <p><strong>Haji:</strong> Mencakup semua ritual Umrah ditambah ritual tambahan seperti:</p>
                    <ul>
                    <li>Wukuf di Arafah</li>
                    <li>Bermalam di Muzdalifah</li>
                    <li>Melempar Jumrah (tiang)</li>
                    <li>Penyembelihan hewan kurban</li>
                    <li>Bermalam di Mina</li>
                    </ul>
                    
                    <p><strong>Umrah:</strong> Terdiri dari empat ritual utama:</p>
                    <ul>
                    <li>Memasuki Ihram (keadaan kemurnian ritual)</li>
                    <li>Tawaf (mengelilingi Ka\'bah)</li>
                    <li>Sa\'i (berjalan antara Safa dan Marwah)</li>
                    <li>Halq atau Taqsir (mencukur atau memotong rambut)</li>
                    </ul>
                    
                    <h3>5. Cakupan Geografis</h3>
                    
                    <p><strong>Haji:</strong> Meluas di luar Mekkah ke lokasi lain termasuk Mina, Arafah, dan Muzdalifah.</p>
                    <p><strong>Umrah:</strong> Terbatas pada Masjidil Haram di Mekkah.</p>
                    
                    <h2>Persamaan Antara Haji dan Umrah</h2>
                    
                    <p>Meskipun ada perbedaan, Haji dan Umrah memiliki beberapa persamaan penting:</p>
                    
                    <ul>
                    <li>Keduanya dimulai dengan memasuki keadaan Ihram</li>
                    <li>Keduanya mencakup Tawaf mengelilingi Ka\'bah</li>
                    <li>Keduanya mencakup Sa\'i antara Safa dan Marwah</li>
                    <li>Keduanya diakhiri dengan memotong atau mencukur rambut</li>
                    <li>Keduanya adalah tindakan ibadah yang menunjukkan ketundukan kepada Allah</li>
                    <li>Keduanya menawarkan pemurnian spiritual dan pengampunan dosa</li>
                    </ul>
                    
                    <h2>Signifikansi Spiritual</h2>
                    
                    <h3>Manfaat Spiritual Haji</h3>
                    
                    <p>Haji mewakili puncak perjalanan spiritual seorang Muslim. Ini melambangkan persatuan, kesetaraan, dan persaudaraan di antara umat Muslim dari semua lapisan kehidupan. Pakaian Ihram putih yang dikenakan oleh semua jamaah menghilangkan perbedaan kelas, kekayaan, dan status, menekankan bahwa semua setara di hadapan Allah.</p>
                    
                    <p>Nabi Muhammad (damai besertanya) bersabda: "Barangsiapa yang melaksanakan Haji karena Allah dan tidak mengucapkan kata-kata kotor atau melakukan perbuatan jahat, akan kembali ke rumah bebas dari dosa seperti hari ibunya melahirkannya." (Bukhari dan Muslim)</p>
                    
                    <h3>Manfaat Spiritual Umrah</h3>
                    
                    <p>Meskipun Umrah lebih singkat dan lebih sederhana daripada Haji, signifikansi spiritualnya tidak boleh diremehkan. Ini menawarkan kesempatan bagi umat Muslim untuk memperbarui iman mereka, mencari pengampunan, dan memperkuat hubungan mereka dengan Allah.</p>
                    
                    <p>Nabi Muhammad (damai besertanya) bersabda: "Umrah adalah penebus dosa yang dilakukan antara umrah tersebut dan umrah berikutnya, dan Haji yang diterima tidak akan menerima balasan lain selain Surga." (Bukhari dan Muslim)</p>
                    
                    <h2>Pertimbangan Praktis</h2>
                    
                    <h3>Persiapan dan Perencanaan</h3>
                    
                    <p><strong>Haji:</strong> Membutuhkan perencanaan ekstensif, seringkali bertahun-tahun sebelumnya. Banyak negara memiliki sistem kuota dan daftar tunggu untuk visa Haji. Komitmen finansial signifikan, dan persiapan fisik sangat penting karena sifat ritual yang menuntut.</p>
                    
                    <p><strong>Umrah:</strong> Umumnya lebih mudah direncanakan dan lebih murah. Visa lebih mudah tersedia, dan tuntutan fisik kurang berat, menjadikannya lebih mudah diakses bagi Muslim yang lebih tua atau kurang mampu secara fisik.</p>
                    
                    <h3>Kerumunan dan Akomodasi</h3>
                    
                    <p><strong>Haji:</strong> Melibatkan kerumunan besar dengan lebih dari 2 juta jamaah melakukan ritual yang sama secara bersamaan. Akomodasi bisa sangat dasar, terutama di kota tenda Mina.</p>
                    
                    <p><strong>Umrah:</strong> Meskipun masih ramai, terutama selama Ramadhan, kerumunan umumnya lebih mudah dikelola. Pilihan akomodasi lebih fleksibel dan bervariasi.</p>
                    
                    <h2>Menggabungkan Haji dan Umrah</h2>
                    
                    <p>Banyak jamaah memilih untuk melakukan Haji dan Umrah selama perjalanan mereka ke kota-kota suci. Ada tiga cara untuk menggabungkan ibadah ini:</p>
                    
                    <ol>
                    <li><strong>Tamattu:</strong> Melakukan Umrah terlebih dahulu selama bulan-bulan Haji, kemudian Haji secara terpisah dengan Ihram baru. Ini adalah pendekatan paling umum dan direkomendasikan bagi mereka yang menggabungkan kedua ibadah.</li>
                    <li><strong>Qiran:</strong> Melakukan Haji dan Umrah bersama dengan satu Ihram tanpa keluar dari keadaan suci di antara keduanya.</li>
                    <li><strong>Ifrad:</strong> Melakukan hanya Haji tanpa Umrah.</li>
                    </ol>
                    
                    <h2>Kesimpulan</h2>
                    
                    <p>Baik Haji maupun Umrah menawarkan pengalaman spiritual yang mendalam bagi umat Muslim, meskipun berbeda dalam kewajiban, waktu, durasi, dan ritual. Haji mewakili ziarah yang lebih komprehensif yang harus dilakukan oleh setiap Muslim yang mampu sekali seumur hidup, sementara Umrah menawarkan perjalanan spiritual yang lebih singkat tetapi tetap bermakna yang dapat dilakukan kapan saja.</p>
                    
                    <p>Memahami perbedaan ini membantu umat Muslim merencanakan ziarah mereka dengan tepat dan mendekati masing-masing dengan niat dan harapan yang tepat. Terlepas dari ziarah mana yang dilakukan, baik Haji maupun Umrah mewakili kesempatan untuk pembaruan spiritual, pengampunan, dan mendekatkan diri kepada Allah.</p>
                    
                    <p>Semoga Allah menerima Haji dan Umrah semua jamaah dan menjadikan perjalanan ini sarana untuk mendapatkan keridhaanNya dan pengampunanNya.</p>
                '
            ],
        ]
    ],
    'articles' => [
        [
            'id' => 1,
            'title' => "Preparing for Your First Umrah: A Complete Guide",
            'excerpt' => "Learn everything you need to know before embarking on your first Umrah journey, from spiritual preparation to practical tips.",
            'image' => "https://picsum.photos/600/400",
            'date' => "April 15, 2023",
            'author' => "Sheikh Abdullah Al-Mansouri",
            'category' => "Guides",
            'slug' => "preparing-for-first-umrah",
        ],
        [
            'id' => 2,
            'title' => "The History and Significance of the Kaaba",
            'excerpt' => "Explore the rich history and profound religious significance of the Kaaba, Islam's most sacred structure.",
            'image' => "https://picsum.photos/600/400",
            'date' => "March 22, 2023",
            'author' => "Dr. Mohammed Al-Farsi",
            'category' => "History",
            'slug' => "history-significance-kaaba",
        ],
        [
            'id' => 3,
            'title' => "Hajj vs Umrah: Understanding the Differences",
            'excerpt' => "A comprehensive comparison of Hajj and Umrah, explaining their similarities, differences, and religious significance.",
            'image' => "https://picsum.photos/600/400",
            'date' => "February 10, 2023",
            'author' => "Aisha Al-Mansouri",
            'category' => "Education",
            'slug' => "hajj-vs-umrah-differences",
        ],
        [
            'id' => 4,
            'title' => "Best Times to Perform Umrah: Seasonal Guide",
            'excerpt' => "Discover the optimal times throughout the year to perform Umrah, considering weather, crowds, and spiritual significance.",
            'image' => "https://picsum.photos/600/400",
            'date' => "January 5, 2023",
            'author' => "Fatima Rahman",
            'category' => "Planning",
            'slug' => "best-times-perform-umrah",
        ],
        [
            'id' => 5,
            'title' => "Spiritual Reflections: Personal Stories from Pilgrims",
            'excerpt' => "Read moving personal accounts from pilgrims who have completed their Hajj or Umrah journey and how it transformed their lives.",
            'image' => "https://picsum.photos/600/400",
            'date' => "December 12, 2022",
            'author' => "Ahmed Hassan",
            'category' => "Testimonials",
            'slug' => "spiritual-reflections-pilgrim-stories",
        ],
        [
            'id' => 6,
            'title' => "Essential Duas for Hajj and Umrah",
            'excerpt' => "Learn the important prayers and supplications that every pilgrim should know when performing Hajj or Umrah.",
            'image' => "https://picsum.photos/600/400",
            'date' => "November 8, 2022",
            'author' => "Dr. Mohammed Al-Farsi",
            'category' => "Guidance",
            'slug' => "essential-duas-hajj-umrah",
        ],
    ]
];

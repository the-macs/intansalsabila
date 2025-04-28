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



// halal - bi - halal - 2025
// IMG-20250414-WA0027.jpg
// IMG-20250413-WA0003.jpg
// IMG-20250413-WA0004.jpg
// IMG-20250413-WA0005.jpg
// IMG-20250413-WA0006.jpg
// IMG-20250413-WA0007.jpg
// IMG-20250413-WA0011.jpg
// IMG-20250413-WA0023.jpg
// IMG-20250413-WA0024.jpg
// IMG-20250414-WA0003.jpg
// IMG-20250414-WA0006.jpg
// IMG-20250414-WA0013.jpg

// sosialisasi - haji - umrah - labuan - bajo
// 'IMG-20241118-WA0031.jpg',
// 'IMG-20241117-WA0058.jpg',
// 'IMG-20241117-WA0062.jpg',
// 'IMG-20241117-WA0063.jpg',
// 'IMG-20241117-WA0064.jpg',
// 'IMG-20241117-WA0066.jpg',
// 'IMG-20241118-WA0004.jpg',
// 'IMG-20241118-WA0029.jpg',
// 'IMG-20241118-WA0032.jpg',
// 'IMG-20241118-WA0033.jpg',
// 'IMG-20241121-WA0010.jpg',
// 'IMG-20241121-WA0016.jpg',
// 'IMG-20241121-WA0017.jpg',
// 'IMG-20241121-WA0018.jpg',
// 'IMG-20241121-WA0029.jpg',
// 'IMG-20241121-WA0030.jpg',
// 'IMG-20241121-WA0031.jpg',
// 'IMG-20241121-WA0032.jpg',
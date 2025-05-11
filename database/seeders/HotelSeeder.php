<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::create(['name' => 'Ibis Hotel',    'image_path' => 'uploads/hotels/01JTX23CD4VWXDC1A2F4T0XMM2.png',    'sort_order' => 1]);
        Hotel::create(['name' => 'Accor Hotel',    'image_path' => 'uploads/hotels/01JTX23MDGGVJ38R73WWJNX9J2.png',    'sort_order' => 2]);
        Hotel::create(['name' => 'Crowne Plaza',    'image_path' => 'uploads/hotels/01JTX245VWNECV9P443TH3GZ1M.png',    'sort_order' => 3]);
        Hotel::create(['name' => 'Intercontinental Hotel & Resort',    'image_path' => 'uploads/hotels/01JTX24WZTW7M0FMHYZPSE22A9.png',    'sort_order' => 4]);
        Hotel::create(['name' => 'Marriot Hotel',    'image_path' => 'uploads/hotels/01JTX258YQ5A3MKQ9YY92PNNDS.png',    'sort_order' => 5]);
        Hotel::create(['name' => 'Sheraton Hotel & Resort',    'image_path' => 'uploads/hotels/01JTX25M3EFSVYN9V0FF2VVTQV.png',    'sort_order' => 6]);
    }
}

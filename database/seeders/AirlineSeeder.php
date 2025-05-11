<?php

namespace Database\Seeders;

use App\Models\Airline;
use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Airline::create(['name' => 'Airasia',    'image_path' => 'uploads/airlines/airasia.png',    'sort_order' => 1]);
        Airline::create(['name' => 'Sriwijaya Air',    'image_path' => 'uploads/airlines/sriwijayaair.png',    'sort_order' => 2]);
        Airline::create(['name' => 'Garuda Indonesia Airline',    'image_path' => 'uploads/airlines/garuda.png',    'sort_order' => 3]);
        Airline::create(['name' => 'Etihad Airways',    'image_path' => 'uploads/airlines/etihad.png',    'sort_order' => 4]);
        Airline::create(['name' => 'Lion Air',    'image_path' => 'uploads/airlines/lionair.png',    'sort_order' => 5]);
        Airline::create(['name' => 'Oman Air',    'image_path' => 'uploads/airlines/oman.png',    'sort_order' => 6]);
        Airline::create(['name' => 'Qatar Airways',    'image_path' => 'uploads/airlines/qatar.png',    'sort_order' => 7]);
        Airline::create(['name' => 'Saudia Arabian Airlines',    'image_path' => 'uploads/airlines/saudia.jpg',    'sort_order' => 8]);
    }
}

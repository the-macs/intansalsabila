<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AirlineSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(BranchOfficeSeeder::class);
        $this->call(CertificationSeeder::class);
        $this->call(CompanyInfoSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(PackageHajjSeeder::class);
        $this->call(PackageUmrahSeeder::class);
        $this->call(TravelDocumentSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(UserSeeder::class);
    }
}

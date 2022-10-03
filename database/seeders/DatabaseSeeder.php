<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MitraMarketing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        { $this->call([
            AboutSeeder::class,
            SyaratSeeder::class,
            ProdukSeeder::class,
            GaleriSeeder::class,
            PostSeeder::class,
            CategoryPostSeeder::class,
            IdentitasPerusahaanSeeder::class,
            IndoRegionProvinceSeeder::class,
            IndoRegionRegencySeeder::class,
            IndoRegionDistrictSeeder::class,
            MitraMarketingSeeder::class,
        ]);
            
        }
    }
}

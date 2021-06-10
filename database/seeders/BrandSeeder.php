<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i < 11; $i++) {
            Brand::updateOrCreate([
                'brand_name_en' => 'Brand-' . $i,
                'brand_slug_en' => 'brand-' . $i,
                'brand_name_bn' => 'ব্র্যান্ড-' . $i,
                'brand_slug_bn' => 'ব্র্যান্ড-' . $i,
                'status' => true,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            Category::updateOrCreate([
                'category_name_en' => 'Category-' . $i,
                'category_slug_en' => 'category-' . $i,
                'category_name_bn' => 'বাংলায়-' . $i,
                'category_slug_bn' => 'বাংলায়-' . $i,
                'status' => true,
            ]);
        }
    }
}

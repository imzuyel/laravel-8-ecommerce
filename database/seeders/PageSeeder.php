<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::updateOrCreate([
            'title' => 'Page',
            'slug' => 'page',
            'excerpt' => 'This is page',
            'body' => '<h1>This is page seed</h1>',
            'meta_description' => 'Page desc',
            'meta_keywords' => 'page,about',
            'status' =>true,
        ]);
    }
}

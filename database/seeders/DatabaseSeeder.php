<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\MenuSeeder;
use Database\Seeders\PageSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\SettingSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\SubCategorySeeder;
use Database\Seeders\SubSubCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(PermissionSeeder::class);
      $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);
      $this->call(PageSeeder::class);
      $this->call(SettingSeeder::class);
    //   $this->call(BrandSeeder::class);
      $this->call(CategorySeeder::class);
      $this->call(SubCategorySeeder::class);
      $this->call(SubSubCategorySeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert(array(
            0 =>
            array(
                "id" => 1,
                "category_name_en" => "Home & Lifestyle",
                "category_name_bn" => "হোম ও লাইফস্টাইল",
                "category_slug_en" => "home-lifestyle",
                "category_slug_bn" => "হোম-ও-লাইফস্টাইল",
                "image" => "images/categories/0613202104481060c58e0a2f0daLOW-RES-PARKER-KITCHEN-VIEW-2.jpg",
                "icon" => "las la-home",
                "created_at" => Carbon::now()->format('Y-m-d'),

            ),
            1 =>
            array(
                "id" => 2,
                "category_name_en" => "Sports & Outdoor",
                "category_name_bn" => "স্পোর্টস ও আউটডোর কার্যক্রম",
                "category_slug_en" => "sports-outdoor",
                "category_slug_bn" => "স্পোর্টস-ও-আউটডোর-কার্যক্রম",
                "image" => "images/categories/0613202108100360c5bd5b9727edepositphotos_32564723-stock-photo-sports-balls-a-lot-of.jpg",
                "icon" => "las la-futbol",
                "created_at" => Carbon::now()->format('Y-m-d'),

            ),
            2 =>
            array(
                "id" => 3,
                "category_name_en" => "Watches & Accessories",
                "category_name_bn" => "ঘড়ি এবং আনুষাঙ্গিক",
                "category_slug_en" => "watches-accessories",
                "category_slug_bn" => "ঘড়ি-এবং-আনুষাঙ্গিক",
                "image" => "images/categories/0613202104434360c58cff0dfacwatch-glasses-fashion-accessory-accessories-watch-glasses-watch-accessory-png-800_395.jpg",
                "icon" => "las la-stopwatch",
                "created_at" => Carbon::now()->format('Y-m-d'),

            ),
            3 =>
            array(
                "id" => 4,
                "category_name_en" => "Men's Fashion",
                "category_name_bn" => "পুরুষদের ফ্যাশন",
                "category_slug_en" => "mens-fashion",
                "category_slug_bn" => "পুরুষদের-ফ্যাশন",
                "image" => "images/categories/0613202104424160c58cc1e90e3LassoClipping-1.png",
                "icon" => "las la-user-secret",
                "created_at" => Carbon::now()->format('Y-m-d'),

            ),
            4 =>
            array(
                "id" => 5,
                "category_name_en" => "Women's Fashion",
                "category_name_bn" => "মহিলাদের ফ্যাশন",
                "category_slug_en" => "womens-fashion",
                "category_slug_bn" => "মহিলাদের-ফ্যাশন",
                "image" => "images/categories/0613202104412460c58c746f2cf20200126_0043-Full-JPG-980x653.jpg",
                "icon" => "las la-user-nurse",
                "created_at" => Carbon::now()->format('Y-m-d'),

            ),
            5 =>
            array(
                "id" => 6,
                "category_name_en" => "Babies & Toys",
                "category_name_bn" => "বাচ্চা এবং খেলনা",
                "category_slug_en" => "babies-toys",
                "category_slug_bn" => "বাচ্চা-এবং-খেলনা",
                "image" => "images/categories/0613202104395260c58c1860384baby-toys-many-colorful-isolated-white-background-30477357.jpg",
                "icon" => "las la-baby-carriage",
                "created_at" => Carbon::now()->format('Y-m-d'),


            ),
            6 =>
            array(
                "id" => 7,
                "category_name_en" => "Health & Beauty",
                "category_name_bn" => "স্বাস্থ্য এবং সৌন্দর্য",
                "category_slug_en" => "health-beauty",
                "category_slug_bn" => "স্বাস্থ্য-এবং-সৌন্দর্য",
                "image" => "images/categories/0613202104375960c58ba7701dagrocery-store-icon-set-color-8-.jpg",
                "icon" => "las la-hand-holding-heart",
                "created_at" => Carbon::now()->format('Y-m-d'),


            ),
            7 =>
            array(
                "id" => 8,
                "category_name_en" => "TV & Home Appliances",
                "category_name_bn" => "টিভি ও হোম অ্যাপ্লায়েন্সেস",
                "category_slug_en" => "tv-home-appliances",
                "category_slug_bn" => "টিভি-ও-হোম-অ্যাপ্লায়েন্সেস",
                "image" => "images/categories/0613202104360360c58b336823bpng-transparent-smart-tv-television-refrigerator-icon-appliances-computer-home-appliance-household-appliances.png",
                "icon" => "las la-campground",
                "created_at" => Carbon::now()->format('Y-m-d'),

            ),
            8 =>
            array(
                "id" => 9,
                "category_name_en" => "Electronics Accessories",
                "category_name_bn" => "ইলেক্ট্রনিক্স জিনিসপত্র",
                "category_slug_en" => "electronics-accessories",
                "category_slug_bn" => "ইলেক্ট্রনিক্স-জিনিসপত্র",
                "image" => "images/categories/0613202104342260c58ace62374preview_10654985.jpg",
                "icon" => "las la-desktop",
                "created_at" => Carbon::now()->format('Y-m-d'),

            ),
            9 =>
            array(
                "id" => 10,
                "category_name_en" => "Electronics device",
                "category_name_bn" => "ইলেকট্রনিক্স ডিভাইস",
                "category_slug_en" => "electronics-device",
                "category_slug_bn" => "ইলেকট্রনিক্স-ডিভাইস",
                "image" => "images/categories/0613202104230060c58824b947celectronics-goods-500x500.png",
                "icon" => "las la-microchip",
                "created_at" => Carbon::now()->format('Y-m-d'),

            )
        ));
    }
}

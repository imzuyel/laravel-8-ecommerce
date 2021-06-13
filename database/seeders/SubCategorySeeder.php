<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{

    public function run()
    {
        DB::table('sub_categories')->delete();

        DB::table('sub_categories')->insert(array(
            0 =>
            array(
                "id" => 1,
                "category_id" => 10,
                "subcategory_name_en" => "Smartphones",
                "subcategory_name_bn" => "স্মার্টফোন",
                "subcategory_slug_en" => "smartphones",
                "subcategory_slug_bn" => "স্মার্টফোন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            1 =>
            array(
                "id" => 2,
                "category_id" => 10,
                "subcategory_name_en" => "Laptops",
                "subcategory_name_bn" => "ল্যাপটপ",
                "subcategory_slug_en" => "laptops",
                "subcategory_slug_bn" => "ল্যাপটপ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            2 =>
            array(
                "id" => 3,
                "category_id" => 10,
                "subcategory_name_en" => "Desktop",
                "subcategory_name_bn" => "ডেস্কটপ",
                "subcategory_slug_en" => "desktop",
                "subcategory_slug_bn" => "ডেস্কটপ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            3 =>
            array(
                "id" => 4,
                "category_id" => 10,
                "subcategory_name_en" => "Camera",
                "subcategory_name_bn" => "ক্যামেরা",
                "subcategory_slug_en" => "camera",
                "subcategory_slug_bn" => "ক্যামেরা",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            4 =>
            array(
                "id" => 5,
                "category_id" => 10,
                "subcategory_name_en" => "Gamming Console",
                "subcategory_name_bn" => "খেলার সরঞ্জাম",
                "subcategory_slug_en" => "gamming-console",
                "subcategory_slug_bn" => "খেলার-সরঞ্জাম",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            5 =>
            array(
                "id" => 6,
                "category_id" => 9,
                "subcategory_name_en" => "Mobile Accessories",
                "subcategory_name_bn" => "মোবাইল আনুষাঙ্গিক",
                "subcategory_slug_en" => "mobile-accessories",
                "subcategory_slug_bn" => "মোবাইল-আনুষাঙ্গিক",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            6 =>
            array(
                "id" => 7,
                "category_id" => 9,
                "subcategory_name_en" => "Audio",
                "subcategory_name_bn" => "অডিও",
                "subcategory_slug_en" => "audio",
                "subcategory_slug_bn" => "অডিও",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            7 =>
            array(
                "id" => 8,
                "category_id" => 9,
                "subcategory_name_en" => "Camera Accessories",
                "subcategory_name_bn" => "ক্যামেরা যন্ত্রপাতি",
                "subcategory_slug_en" => "camera-accessories",
                "subcategory_slug_bn" => "ক্যামেরা-যন্ত্রপাতি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            8 =>
            array(
                "id" => 9,
                "category_id" => 9,
                "subcategory_name_en" => "Computer Accessories",
                "subcategory_name_bn" => "কম্পিউটারের যন্ত্রপাতি",
                "subcategory_slug_en" => "computer-accessories",
                "subcategory_slug_bn" => "কম্পিউটারের-যন্ত্রপাতি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            9 =>
            array(
                "id" => 10,
                "category_id" => 9,
                "subcategory_name_en" => "Computer Components",
                "subcategory_name_bn" => "কম্পিউটার উপাদান",
                "subcategory_slug_en" => "computer-components",
                "subcategory_slug_bn" => "কম্পিউটার-উপাদান",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            10 =>
            array(
                "id" => 11,
                "category_id" => 8,
                "subcategory_name_en" => "Television",
                "subcategory_name_bn" => "টেলিভিশন",
                "subcategory_slug_en" => "television",
                "subcategory_slug_bn" => "টেলিভিশন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            11 =>
            array(
                "id" => 12,
                "category_id" => 8,
                "subcategory_name_en" => "Home Audio",
                "subcategory_name_bn" => "হোম অডিও",
                "subcategory_slug_en" => "home-audio",
                "subcategory_slug_bn" => "হোম-অডিও",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            12 =>
            array(
                "id" => 13,
                "category_id" => 8,
                "subcategory_name_en" => "TV Accessories & Video Device",
                "subcategory_name_bn" => "টিভি এক্সেসরিজ ও ভিডিও ডিভাইস",
                "subcategory_slug_en" => "tv-accessories-&-video-device",
                "subcategory_slug_bn" => "টিভি-এক্সেসরিজ-ও-ভিডিও-ডিভাইস",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            13 =>
            array(
                "id" => 14,
                "category_id" => 8,
                "subcategory_name_en" => "Fan",
                "subcategory_name_bn" => "ফ্যান",
                "subcategory_slug_en" => "fan",
                "subcategory_slug_bn" => "ফ্যান",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            14 =>
            array(
                "id" => 15,
                "category_id" => 8,
                "subcategory_name_en" => "Cooling & Heating",
                "subcategory_name_bn" => "কুলিং ও এয়ার ট্রিটমেন্ট",
                "subcategory_slug_en" => "cooling-&-heating",
                "subcategory_slug_bn" => "কুলিং-ও-এয়ার-ট্রিটমেন্ট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            15 =>
            array(
                "id" => 16,
                "category_id" => 7,
                "subcategory_name_en" => "Bath & Body",
                "subcategory_name_bn" => "বাথ ও বডি",
                "subcategory_slug_en" => "bath-&-body",
                "subcategory_slug_bn" => "বাথ-ও-বডি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            16 =>
            array(
                "id" => 17,
                "category_id" => 7,
                "subcategory_name_en" => "Beauty Tools",
                "subcategory_name_bn" => "বিউটি টুল",
                "subcategory_slug_en" => "beauty-tools",
                "subcategory_slug_bn" => "বিউটি-টুল",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            17 =>
            array(
                "id" => 18,
                "category_id" => 7,
                "subcategory_name_en" => "Hair Care",
                "subcategory_name_bn" => "চুলের যত্ন",
                "subcategory_slug_en" => "hair-care",
                "subcategory_slug_bn" => "চুলের-যত্ন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            18 =>
            array(
                "id" => 19,
                "category_id" => 7,
                "subcategory_name_en" => "Makeup",
                "subcategory_name_bn" => "মেক আপ",
                "subcategory_slug_en" => "makeup",
                "subcategory_slug_bn" => "মেক-আপ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            19 =>
            array(
                "id" => 20,
                "category_id" => 7,
                "subcategory_name_en" => "Skin Care",
                "subcategory_name_bn" => "স্কিন কেয়ার",
                "subcategory_slug_en" => "skin-care",
                "subcategory_slug_bn" => "স্কিন-কেয়ার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            20 =>
            array(
                "id" => 21,
                "category_id" => 6,
                "subcategory_name_en" => "Feeding",
                "subcategory_name_bn" => "ফিডিং",
                "subcategory_slug_en" => "feeding",
                "subcategory_slug_bn" => "ফিডিং",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            21 =>
            array(
                "id" => 22,
                "category_id" => 6,
                "subcategory_name_en" => "Diapering & Potty",
                "subcategory_name_bn" => "ডায়াপার ও পটি",
                "subcategory_slug_en" => "diapering-&-potty",
                "subcategory_slug_bn" => "ডায়াপার-ও-পটি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            22 =>
            array(
                "id" => 23,
                "category_id" => 6,
                "subcategory_name_en" => "Baby Gear",
                "subcategory_name_bn" => "বেবি গিয়ার",
                "subcategory_slug_en" => "baby-gear",
                "subcategory_slug_bn" => "বেবি-গিয়ার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            23 =>
            array(
                "id" => 24,
                "category_id" => 6,
                "subcategory_name_en" => "Baby Personal Care",
                "subcategory_name_bn" => "বেবি পার্সোনাল কেয়ার",
                "subcategory_slug_en" => "baby-personal-Care",
                "subcategory_slug_bn" => "বেবি-পার্সোনাল-কেয়ার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            24 =>
            array(
                "id" => 25,
                "category_id" => 6,
                "subcategory_name_en" => "Nursery",
                "subcategory_name_bn" => "নার্সারি",
                "subcategory_slug_en" => "nursery",
                "subcategory_slug_bn" => "নার্সারি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            25 =>
            array(
                "id" => 26,
                "category_id" => 5,
                "subcategory_name_en" => "Saree",
                "subcategory_name_bn" => "শাড়ি",
                "subcategory_slug_en" => "saree",
                "subcategory_slug_bn" => "শাড়ি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            26 =>
            array(
                "id" => 27,
                "category_id" => 5,
                "subcategory_name_en" => "Shalwar Kameez",
                "subcategory_name_bn" => "সালোয়ার কামিজ",
                "subcategory_slug_en" => "shalwar-kameez",
                "subcategory_slug_bn" => "সালোয়ার-কামিজ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            27 =>
            array(
                "id" => 28,
                "category_id" => 5,
                "subcategory_name_en" => "Women's Dresses",
                "subcategory_name_bn" => "মেয়েদের পোশাক",
                "subcategory_slug_en" => "women's-dresses",
                "subcategory_slug_bn" => "মেয়েদের-পোশাক",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            28 =>
            array(
                "id" => 29,
                "category_id" => 5,
                "subcategory_name_en" => "Kurtis",
                "subcategory_name_bn" => "কুর্তি",
                "subcategory_slug_en" => "kurtis",
                "subcategory_slug_bn" => "কুর্তি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            29 =>
            array(
                "id" => 30,
                "category_id" => 5,
                "subcategory_name_en" => "Women's bag",
                "subcategory_name_bn" => "মেয়েদের ব্যাগ",
                "subcategory_slug_en" => "women's-bag",
                "subcategory_slug_bn" => "মেয়েদের-ব্যাগ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            30 =>
            array(
                "id" => 31,
                "category_id" => 1,
                "subcategory_name_en" => "Bath",
                "subcategory_name_bn" => "গোসল সংক্রান্ত",
                "subcategory_slug_en" => "bath",
                "subcategory_slug_bn" => "গোসল-সংক্রান্ত",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            31 =>
            array(
                "id" => 32,
                "category_id" => 1,
                "subcategory_name_en" => "Bedding",
                "subcategory_name_bn" => "বিছানা সংক্রান্ত",
                "subcategory_slug_en" => "bedding",
                "subcategory_slug_bn" => "বিছানা-সংক্রান্ত",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            32 =>
            array(
                "id" => 33,
                "category_id" => 1,
                "subcategory_name_en" => "Decor",
                "subcategory_name_bn" => "সাজসজ্জা সংক্রান্ত",
                "subcategory_slug_en" => "decor",
                "subcategory_slug_bn" => "সাজসজ্জা-সংক্রান্ত",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            33 =>
            array(
                "id" => 34,
                "category_id" => 1,
                "subcategory_name_en" => "Furniture",
                "subcategory_name_bn" => "আসবাবপত্র",
                "subcategory_slug_en" => "furniture",
                "subcategory_slug_bn" => "আসবাবপত্র",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            34 =>
            array(
                "id" => 35,
                "category_id" => 1,
                "subcategory_name_en" => "Kitchen & Dining",
                "subcategory_name_bn" => "কিচেন ও ডায়নিং",
                "subcategory_slug_en" => "kitchen-&-dining",
                "subcategory_slug_bn" => "কিচেন-ও-ডায়নিং",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            35 =>
            array(
                "id" => 36,
                "category_id" => 4,
                "subcategory_name_en" => "T-Shirts",
                "subcategory_name_bn" => "টি-শার্ট",
                "subcategory_slug_en" => "t-shirts",
                "subcategory_slug_bn" => "টি-শার্ট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            36 =>
            array(
                "id" => 37,
                "category_id" => 4,
                "subcategory_name_en" => "Kurtas",
                "subcategory_name_bn" => "কুর্তা",
                "subcategory_slug_en" => "kurtas",
                "subcategory_slug_bn" => "কুর্তা",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            37 =>
            array(
                "id" => 38,
                "category_id" => 4,
                "subcategory_name_en" => "Shirts",
                "subcategory_name_bn" => "শার্ট",
                "subcategory_slug_en" => "shirts",
                "subcategory_slug_bn" => "শার্ট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            38 =>
            array(
                "id" => 39,
                "category_id" => 4,
                "subcategory_name_en" => "Jeans",
                "subcategory_name_bn" => "জিন্স",
                "subcategory_slug_en" => "jeans",
                "subcategory_slug_bn" => "জিন্স",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            39 =>
            array(
                "id" => 40,
                "category_id" => 4,
                "subcategory_name_en" => "Shoes",
                "subcategory_name_bn" => "জুতা",
                "subcategory_slug_en" => "Shoes",
                "subcategory_slug_bn" => "জুতা",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            40 =>
            array(
                "id" => 41,
                "category_id" => 3,
                "subcategory_name_en" => "Men's Watch",
                "subcategory_name_bn" => "পুরুষদের ঘড়ি",
                "subcategory_slug_en" => "Men's Watch",
                "subcategory_slug_bn" => "পুরুষদের-ঘড়ি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            41 =>
            array(
                "id" => 42,
                "category_id" => 3,
                "subcategory_name_en" => "Women's Watch",
                "subcategory_name_bn" => "মেয়েদের ঘড়ি",
                "subcategory_slug_en" => "Women's Watch",
                "subcategory_slug_bn" => "মেয়েদের-ঘড়ি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            42 =>
            array(
                "id" => 43,
                "category_id" => 3,
                "subcategory_name_en" => "Women's Jewelleries",
                "subcategory_name_bn" => "মেয়েদের জুয়েলারী",
                "subcategory_slug_en" => "Women's Jewelleries",
                "subcategory_slug_bn" => "মেয়েদের-জুয়েলারী",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            43 =>
            array(
                "id" => 44,
                "category_id" => 3,
                "subcategory_name_en" => "Men's Jewelleries",
                "subcategory_name_bn" => "ছেলেদের জুয়েলারী",
                "subcategory_slug_en" => "Men's Jewelleries",
                "subcategory_slug_bn" => "ছেলেদের-জুয়েলারী",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            44 =>
            array(
                "id" => 45,
                "category_id" => 3,
                "subcategory_name_en" => "Men's Belt",
                "subcategory_name_bn" => "ছেলেদের বেল্ট",
                "subcategory_slug_en" => "Men's Belt",
                "subcategory_slug_bn" => "ছেলেদের-বেল্ট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            45 =>
            array(
                "id" => 46,
                "category_id" => 2,
                "subcategory_name_en" => "Treadmills",
                "subcategory_name_bn" => "ট্রেডমিল",
                "subcategory_slug_en" => "Treadmills",
                "subcategory_slug_bn" => "ট্রেডমিল",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            46 =>
            array(
                "id" => 47,
                "category_id" => 2,
                "subcategory_name_en" => "Boxing, Martial Arts & MMA",
                "subcategory_name_bn" => "বক্সিং, মার্সাল আর্ট ও এমএমএ",
                "subcategory_slug_en" => "Boxing, Martial Arts & MMA",
                "subcategory_slug_bn" => "বক্সিং,-মার্সাল-আর্ট-ও-এমএমএ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            47 =>
            array(
                "id" => 48,
                "category_id" => 2,
                "subcategory_name_en" => "Men Shoes & Clothing",
                "subcategory_name_bn" => "ছেলেদের জুতা ও পোষাক",
                "subcategory_slug_en" => "Men Shoes & Clothing",
                "subcategory_slug_bn" => "ছেলেদের-জুতা-ও-পোষাক",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            48 =>
            array(
                "id" => 49,
                "category_id" => 2,
                "subcategory_name_en" => "Outdoor Recreation",
                "subcategory_name_bn" => "আউটডোর বিনোদন",
                "subcategory_slug_en" => "Outdoor Recreation",
                "subcategory_slug_bn" => "আউটডোর-বিনোদন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            49 =>
            array(
                "id" => 50,
                "category_id" => 2,
                "subcategory_name_en" => "Exercise & Fitness",
                "subcategory_name_bn" => "ব্যায়াম ও ফিটনেস",
                "subcategory_slug_en" => "Exercise & Fitness",
                "subcategory_slug_bn" => "ব্যায়াম-ও-ফিটনেস",
                "created_at" => Carbon::now()->format('Y-m-d'),
            )
        ));
    }
}

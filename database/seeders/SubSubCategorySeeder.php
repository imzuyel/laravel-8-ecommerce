<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sub_sub_categories')->delete();

        DB::table('sub_sub_categories')->insert(array(
            0 =>
            array(
                "id" => 1,
                "category_id" => 10,
                "subcategory_id" => 1,
                "subsubcategory_name_en" => "Realme Phones",
                "subsubcategory_name_bn" => "রিয়েলমি ফোন",
                "subsubcategory_slug_en" => "realme-phones",
                "subsubcategory_slug_bn" => "রিয়েলমি-ফোন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            1 =>
            array(
                "id" => 2,
                "category_id" => 10,
                "subcategory_id" => 1,
                "subsubcategory_name_en" => "Samsung Phones",
                "subsubcategory_name_bn" => "স্যামসাং ফোন",
                "subsubcategory_slug_en" => "samsung-phones",
                "subsubcategory_slug_bn" => "স্যামসাং-ফোন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            2 =>
            array(
                "id" => 3,
                "category_id" => 10,
                "subcategory_id" => 1,
                "subsubcategory_name_en" => "Xiaomi Phones",
                "subsubcategory_name_bn" => "শাওমি ফোন",
                "subsubcategory_slug_en" => "xiaomi-phones",
                "subsubcategory_slug_bn" => "শাওমি-ফোন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            3 =>
            array(
                "id" => 4,
                "category_id" => 10,
                "subcategory_id" => 1,
                "subsubcategory_name_en" => "OPPO Phones",
                "subsubcategory_name_bn" => "ওপ্পো ফোন",
                "subsubcategory_slug_en" => "oppo-phones",
                "subsubcategory_slug_bn" => "ওপ্পো-ফোন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            4 =>
            array(
                "id" => 5,
                "category_id" => 10,
                "subcategory_id" => 1,
                "subsubcategory_name_en" => "Vivo Phones",
                "subsubcategory_name_bn" => "ভিভো ফোন", "subsubcategory_slug_en" => "vivo-phones",
                "subsubcategory_slug_bn" => "ভিভো-ফোন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            5 =>
            array(
                "id" => 6,
                "category_id" => 10,
                "subcategory_id" => 2,
                "subsubcategory_name_en" => "Laptops & Notebooks",
                "subsubcategory_name_bn" => "ল্যাপটপ ও নোটবুক",
                "subsubcategory_slug_en" => "laptops-notebooks",
                "subsubcategory_slug_bn" => "ল্যাপটপ-ও-নোটবুক",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            6 =>
            array(
                "id" => 7,
                "category_id" => 10,
                "subcategory_id" => 2,
                "subsubcategory_name_en" => "Gaming Laptops",
                "subsubcategory_name_bn" => "গেমিং ল্যাপটপ",
                "subsubcategory_slug_en" => "gaming-laptops",
                "subsubcategory_slug_bn" => "গেমিং-ল্যাপটপ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            7 =>
            array(
                "id" => 8,
                "category_id" => 10,
                "subcategory_id" => 2,
                "subsubcategory_name_en" => "Macbook",
                "subsubcategory_name_bn" => "ম্যাকবুক", "subsubcategory_slug_en" => "gaming-laptops",
                "subsubcategory_slug_bn" => "গেমিং-ল্যাপটপ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            8 =>
            array(
                "id" => 9,
                "category_id" => 10,
                "subcategory_id" => 3,
                "subsubcategory_name_en" => "Gaming Desktops",
                "subsubcategory_name_bn" => "গেমিং ডেস্কটপ পিসি",
                "subsubcategory_slug_en" => "gaming-desktops",
                "subsubcategory_slug_bn" => "গেমিং-ডেস্কটপ-পিসি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            9 =>
            array(
                "id" => 10,
                "category_id" => 10,
                "subcategory_id" => 3,
                "subsubcategory_name_en" => "All-In-One",
                "subsubcategory_name_bn" => "অল ইন ওয়ান পিসি",
                "subsubcategory_slug_en" => "all-in-one",
                "subsubcategory_slug_bn" => "অল-ইন-ওয়ান-পিসি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            10 =>
            array(
                "id" => 11,
                "category_id" => 10,
                "subcategory_id" => 4,
                "subsubcategory_name_en" => "DSLR",
                "subsubcategory_name_bn" => "ডিএসএলআর",
                "subsubcategory_slug_en" => "dslr",
                "subsubcategory_slug_bn" => "ডিএসএলআর",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            11 =>
            array(
                "id" => 12,
                "category_id" => 10,
                "subcategory_id" => 4,
                "subsubcategory_name_en" => "Mirrorless",
                "subsubcategory_name_bn" => "মিররলেস",
                "subsubcategory_slug_en" => "mirrorless",
                "subsubcategory_slug_bn" => "মিররলেস",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            12 =>
            array(
                "id" => 13,
                "category_id" => 10,
                "subcategory_id" => 4,
                "subsubcategory_name_en" => "Point & Shoot",
                "subsubcategory_name_bn" => "পয়েন্ট এবং স্যুট",
                "subsubcategory_slug_en" => "point-shoot",
                "subsubcategory_slug_bn" => "পয়েন্ট-এবং-স্যুট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            13 =>
            array(
                "id" => 14,
                "category_id" => 10,
                "subcategory_id" => 4,
                "subsubcategory_name_en" => "Bridge",
                "subsubcategory_name_bn" => "ব্রিজ",
                "subsubcategory_slug_en" => "bridge",
                "subsubcategory_slug_bn" => "ব্রিজ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            14 =>
            array(
                "id" => 15,
                "category_id" => 10,
                "subcategory_id" => 4,
                "subsubcategory_name_en" => "Action/Video Cameras",
                "subsubcategory_name_bn" => "অ্যাকশন / ভিডিও ক্যামেরা",
                "subsubcategory_slug_en" => "actionvideo-cameras",
                "subsubcategory_slug_bn" => "অ্যাকশন-/-ভিডিও-ক্যামেরা",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            15 =>
            array(
                "id" => 16,
                "category_id" => 10,
                "subcategory_id" => 5,
                "subsubcategory_name_en" => "PlayStation Consoles",
                "subsubcategory_name_bn" => "প্লে স্টেশন কনসোল",
                "subsubcategory_slug_en" => "playstation-consoles",
                "subsubcategory_slug_bn" => "প্লে-স্টেশন-কনসোল",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            16 =>
            array(
                "id" => 17,
                "category_id" => 10,
                "subcategory_id" => 5,
                "subsubcategory_name_en" => "Playstation Games",
                "subsubcategory_name_bn" => "প্লে স্টেশন গেম",
                "subsubcategory_slug_en" => "playstation-games",
                "subsubcategory_slug_bn" => "প্লে-স্টেশন-গেম",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            17 =>
            array(
                "id" => 18,
                "category_id" => 10,
                "subcategory_id" => 5,
                "subsubcategory_name_en" => "Playstation Controllers",
                "subsubcategory_name_bn" => "প্লে স্টেশন কন্ট্রোলার",
                "subsubcategory_slug_en" => "playstation-controllers",
                "subsubcategory_slug_bn" => "প্লে-স্টেশন-কন্ট্রোলার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            18 =>
            array(
                "id" => 19,
                "category_id" => 10,
                "subcategory_id" => 5,
                "subsubcategory_name_en" => "Nintendo Games",
                "subsubcategory_name_bn" => "নিনটেন্ডো গেম",
                "subsubcategory_slug_en" => "nintendo-games",
                "subsubcategory_slug_bn" => "নিনটেন্ডো-গেম",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            19 =>
            array(
                "id" => 20,
                "category_id" => 9,
                "subcategory_id" => 6,
                "subsubcategory_name_en" => "Phone Cases",
                "subsubcategory_name_bn" => "মোবাইল ফোন কেইস",
                "subsubcategory_slug_en" => "phone-cases",
                "subsubcategory_slug_bn" => "মোবাইল-ফোন-কেইস",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            20 =>
            array(
                "id" => 21,
                "category_id" => 9,
                "subcategory_id" => 6,
                "subsubcategory_name_en" => "Power Banks",
                "subsubcategory_name_bn" => "পাওয়ার ব্যাংক",
                "subsubcategory_slug_en" => "power-banks",
                "subsubcategory_slug_bn" => "পাওয়ার-ব্যাংক",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            21 =>
            array(
                "id" => 22,
                "category_id" => 9,
                "subcategory_id" => 6,
                "subsubcategory_name_en" => "Cables & Converters",
                "subsubcategory_name_bn" => "ক্যাবল ও কনভার্টার",
                "subsubcategory_slug_en" => "power-banks",
                "subsubcategory_slug_bn" => "পাওয়ার-ব্যাংক",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            22 =>
            array(
                "id" => 23,
                "category_id" => 9,
                "subcategory_id" => 6,
                "subsubcategory_name_en" => "Wall Chargers",
                "subsubcategory_name_bn" => "ওয়াল চার্জার",
                "subsubcategory_slug_en" => "wall-chargers",
                "subsubcategory_slug_bn" => "ওয়াল-চার্জার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            23 =>
            array(
                "id" => 24,
                "category_id" => 9,
                "subcategory_id" => 7,
                "subsubcategory_name_en" => "Headphones & Headset",
                "subsubcategory_name_bn" => "হেডফোন ও হেডসেট",
                "subsubcategory_slug_en" => "headphones-headset",
                "subsubcategory_slug_bn" => "হেডফোন-ও-হেডসেট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            23 =>
            array(
                "id" => 25,
                "category_id" => 9,
                "subcategory_id" => 7,
                "subsubcategory_name_en" => "Home Entertainment",
                "subsubcategory_name_bn" => "হোম এন্টারটেইনমেন্ট",
                "subsubcategory_slug_en" => "home-entertainment",
                "subsubcategory_slug_bn" => "হোম-এন্টারটেইনমেন্ট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            25 =>
            array(
                "id" => 26,
                "category_id" => 9,
                "subcategory_id" => 7,
                "subsubcategory_name_en" => "Bluetooth Speakers",
                "subsubcategory_name_bn" => "ব্লুটুথ স্পিকার",
                "subsubcategory_slug_en" => "bluetooth-speakers",
                "subsubcategory_slug_bn" => "ব্লুটুথ-স্পিকার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            26 =>
            array(
                "id" => 27,
                "category_id" => 9,
                "subcategory_id" => 7,
                "subsubcategory_name_en" => "Live sound & Stage Equipment",
                "subsubcategory_name_bn" => "লাইভ সাউন্ড ও মঞ্চ সরঞ্জাম",
                "subsubcategory_slug_en" => "live-sound-stage-equipment",
                "subsubcategory_slug_bn" => "লাইভ-সাউন্ড-ও-মঞ্চ-সরঞ্জাম",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            27 =>
            array(
                "id" => 28,
                "category_id" => 9,
                "subcategory_id" => 8,
                "subsubcategory_name_en" => "Memory Cards",
                "subsubcategory_name_bn" => "মেমরি কার্ড",
                "subsubcategory_slug_en" => "memory-cards",
                "subsubcategory_slug_bn" => "মেমরি-কার্ড",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            28 =>
            array(
                "id" => 29,
                "category_id" => 9,
                "subcategory_id" => 8,
                "subsubcategory_name_en" => "DSLR Lens",
                "subsubcategory_name_bn" => "ডিএসএলআর লেন্স",
                "subsubcategory_slug_en" => "dslr-lens",
                "subsubcategory_slug_bn" => "ডিএসএলআর-লেন্স",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            29 =>
            array(
                "id" => 30,
                "category_id" => 9,
                "subcategory_id" => 8,
                "subsubcategory_name_en" => "Mirrorless Lens",
                "subsubcategory_name_bn" => "মিররলেস লেন্স",
                "subsubcategory_slug_en" => "mirrorless-lens",
                "subsubcategory_slug_bn" => "মিররলেস-লেন্স",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            30 =>
            array(
                "id" => 31,
                "category_id" => 9,
                "subcategory_id" => 9,
                "subsubcategory_name_en" => "Monitors",
                "subsubcategory_name_bn" => "মনিটর",
                "subsubcategory_slug_en" => "monitors",
                "subsubcategory_slug_bn" => "মনিটর",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            31 =>
            array(
                "id" => 32,
                "category_id" => 9,
                "subcategory_id" => 9,
                "subsubcategory_name_en" => "Mice",
                "subsubcategory_name_bn" => "মাউস",
                "subsubcategory_slug_en" => "mice",
                "subsubcategory_slug_bn" => "মাউস",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            32 =>
            array(
                "id" => 33,
                "category_id" => 9,
                "subcategory_id" => 6,
                "subsubcategory_name_en" => "PC Audio",
                "subsubcategory_name_bn" => "পিসি অডিও",
                "subsubcategory_slug_en" => "pc-audio",
                "subsubcategory_slug_bn" => "পিসি-অডিও",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            33 =>
            array(
                "id" => 34,
                "category_id" => 9,
                "subcategory_id" => 9,
                "subsubcategory_name_en" => "Keyboards",
                "subsubcategory_name_bn" => "কীবোর্ড",
                "subsubcategory_slug_en" => "keyboards",
                "subsubcategory_slug_bn" => "কীবোর্ড",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            34 =>
            array(
                "id" => 35,
                "category_id" => 9,
                "subcategory_id" => 10,
                "subsubcategory_name_en" => "Graphic Cards",
                "subsubcategory_name_bn" => "গ্রাফিক্স কার্ড",
                "subsubcategory_slug_en" => "keyboards",
                "subsubcategory_slug_bn" => "কীবোর্ড",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            35 =>
            array(
                "id" => 36,
                "category_id" => 9,
                "subcategory_id" => 10,
                "subsubcategory_name_en" => "Desktop Casings",
                "subsubcategory_name_bn" => "ডেস্কটপ কেসিং",
                "subsubcategory_slug_en" => "desktop-casings",
                "subsubcategory_slug_bn" => "ডেস্কটপ-কেসিং",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            36 =>
            array(
                "id" => 37,
                "category_id" => 9,
                "subcategory_id" => 10,
                "subsubcategory_name_en" => "Motherboards",
                "subsubcategory_name_bn" => "মাদারবোর্ড",
                "subsubcategory_slug_en" => "motherboards",
                "subsubcategory_slug_bn" => "মাদারবোর্ড",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            37 =>
            array(
                "id" => 38,
                "category_id" => 9,
                "subcategory_id" => 10,
                "subsubcategory_name_en" => "Fans & Heatsinks",
                "subsubcategory_name_bn" => "ফ্যান ও হিটসিঙ্ক",
                "subsubcategory_slug_en" => "fans-heatsinks",
                "subsubcategory_slug_bn" => "ফ্যান-ও-হিটসিঙ্ক",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            38 =>
            array(
                "id" => 39,
                "category_id" => 8,
                "subcategory_id" => 11,
                "subsubcategory_name_en" => "Smart Televisions",
                "subsubcategory_name_bn" => "স্মার্ট টেলিভিশন",
                "subsubcategory_slug_en" => "smart-televisions",
                "subsubcategory_slug_bn" => "স্মার্ট-টেলিভিশন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            39 =>
            array(
                "id" => 40,
                "category_id" => 8,
                "subcategory_id" => 11,
                "subsubcategory_name_en" => "LED Televisions",
                "subsubcategory_name_bn" => "এলইডি টেলিভিশন",
                "subsubcategory_slug_en" => "led-televisions",
                "subsubcategory_slug_bn" => "এলইডি-টেলিভিশন",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            40 =>
            array(
                "id" => 41,
                "category_id" => 8,
                "subcategory_id" => 12,
                "subsubcategory_name_en" => "Soundbars",
                "subsubcategory_name_bn" => "সাউন্ডবার",
                "subsubcategory_slug_en" => "soundbars",
                "subsubcategory_slug_bn" => "সাউন্ডবার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            41 =>
            array(
                "id" => 42,
                "category_id" => 8,
                "subcategory_id" => 12,
                "subsubcategory_name_en" => "Home Entertainment",
                "subsubcategory_name_bn" => "হোম এন্টারটেইনমেন্ট",
                "subsubcategory_slug_en" => "home-entertainment",
                "subsubcategory_slug_bn" => "হোম-এন্টারটেইনমেন্ট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            42 =>
            array(
                "id" => 43,
                "category_id" => 8,
                "subcategory_id" => 12,
                "subsubcategory_name_en" => "Portable Players",
                "subsubcategory_name_bn" => "পোর্টেবল প্লেয়ার",
                "subsubcategory_slug_en" => "portable-players",
                "subsubcategory_slug_bn" => "পোর্টেবল-প্লেয়ার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            43 =>
            array(
                "id" => 44,
                "category_id" => 8,
                "subcategory_id" => 13,
                "subsubcategory_name_en" => "TV Receivers",
                "subsubcategory_name_bn" => "টিভি রিসিভার",
                "subsubcategory_slug_en" => "tv-receivers",
                "subsubcategory_slug_bn" => "টিভি-রিসিভার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            44 =>
            array(
                "id" => 45,
                "category_id" => 8,
                "subcategory_id" => 13,
                "subsubcategory_name_en" => "TV Remote Controllers",
                "subsubcategory_name_bn" => "টিভি রিমোট কন্ট্রোলার",
                "subsubcategory_slug_en" => "tv-remote-controllers",
                "subsubcategory_slug_bn" => "টিভি-রিমোট-কন্ট্রোলার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            45 =>
            array(
                "id" => 46,
                "category_id" => 8,
                "subcategory_id" => 13,
                "subsubcategory_name_en" => "Cables",
                "subsubcategory_name_bn" => "ক্যাবল",
                "subsubcategory_slug_en" => "cables",
                "subsubcategory_slug_bn" => "ক্যাবল",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            46 =>
            array(
                "id" => 47,
                "category_id" => 8,
                "subcategory_id" => 14,
                "subsubcategory_name_en" => "Ceiling Fan",
                "subsubcategory_name_bn" => "সিলিং ফ্যান",
                "subsubcategory_slug_en" => "ceiling-fan",
                "subsubcategory_slug_bn" => "সিলিং-ফ্যান",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            47 =>
            array(
                "id" => 48,
                "category_id" => 8,
                "subcategory_id" => 14,
                "subsubcategory_name_en" => "Table Fan",
                "subsubcategory_name_bn" => "টেবিল ফ্যান",
                "subsubcategory_slug_en" => "table-fan",
                "subsubcategory_slug_bn" => "টেবিল-ফ্যান",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            48 =>
            array(
                "id" => 49,
                "category_id" => 8,
                "subcategory_id" => 14,
                "subsubcategory_name_en" => "Stand Fan",
                "subsubcategory_name_bn" => "স্ট্যান্ড ফ্যান",
                "subsubcategory_slug_en" => "stand-fan",
                "subsubcategory_slug_bn" => "স্ট্যান্ড-ফ্যান",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            49 =>
            array(
                "id" => 50,
                "category_id" => 8,
                "subcategory_id" => 15,
                "subsubcategory_name_en" => "Air Conditioner",
                "subsubcategory_name_bn" => "এয়ার কন্ডিশনার",
                "subsubcategory_slug_en" => "air-conditioner",
                "subsubcategory_slug_bn" => "এয়ার-কন্ডিশনার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            50 =>
            array(
                "id" => 51,
                "category_id" => 8,
                "subcategory_id" => 15,
                "subsubcategory_name_en" => "Air Coolers",
                "subsubcategory_name_bn" => "এয়ার কুলার",
                "subsubcategory_slug_en" => "air-coolers",
                "subsubcategory_slug_bn" => "এয়ার-কুলার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            51 =>
            array(
                "id" => 52,
                "category_id" => 7,
                "subcategory_id" => 16,
                "subsubcategory_name_en" => "Body & Massage Oils",
                "subsubcategory_name_bn" => "বডি ও ম্যাসেজ অয়েল",
                "subsubcategory_slug_en" => "body-massage-oils",
                "subsubcategory_slug_bn" => "বডি-ও-ম্যাসেজ-অয়েল",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            52 =>
            array(
                "id" => 53,
                "category_id" => 7,
                "subcategory_id" => 16,
                "subsubcategory_name_en" => "Body Moisturizers",
                "subsubcategory_name_bn" => "বডি ময়েশ্চারাইজার",
                "subsubcategory_slug_en" => "body-massage-oils",
                "subsubcategory_slug_bn" => "বডি-ও-ম্যাসেজ-অয়েল",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            53 =>
            array(
                "id" => 54,
                "category_id" => 7,
                "subcategory_id" => 16,
                "subsubcategory_name_en" => "Body Scrubs",
                "subsubcategory_name_bn" => "বডি স্ক্রাব",
                "subsubcategory_slug_en" => "body-scrubs",
                "subsubcategory_slug_bn" => "বডি-স্ক্রাব",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            54 =>
            array(
                "id" => 55,
                "category_id" => 7,
                "subcategory_id" => 17,
                "subsubcategory_name_en" => "Curling Irons & Wands",
                "subsubcategory_name_bn" => "কার্লিং আয়রন ও ওয়ান্ড",
                "subsubcategory_slug_en" => "curling-irons-wands",
                "subsubcategory_slug_bn" => "কার্লিং-আয়রন-ও-ওয়ান্ড",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            55 =>
            array(
                "id" => 56,
                "category_id" => 7,
                "subcategory_id" => 18,
                "subsubcategory_name_en" => "Shampoo",
                "subsubcategory_name_bn" => "শ্যাম্পু",
                "subsubcategory_slug_en" => "shampoo",
                "subsubcategory_slug_bn" => "শ্যাম্পু",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            56 =>
            array(
                "id" => 57,
                "category_id" => 7,
                "subcategory_id" => 18,
                "subsubcategory_name_en" => "Hair Treatments",
                "subsubcategory_name_bn" => "হেয়ার ট্রিটমেন্ট",
                "subsubcategory_slug_en" => "hair-treatments",
                "subsubcategory_slug_bn" => "হেয়ার-ট্রিটমেন্ট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            57 =>
            array(
                "id" => 58,
                "category_id" => 7,
                "subcategory_id" => 19,
                "subsubcategory_name_en" => "Face",
                "subsubcategory_name_bn" => "মুখের মেকআপ",
                "subsubcategory_slug_en" => "face",
                "subsubcategory_slug_bn" => "মুখের-মেকআপ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            58 =>
            array(
                "id" => 59,
                "category_id" => 7,
                "subcategory_id" => 19,
                "subsubcategory_name_en" => "Lips",
                "subsubcategory_name_bn" => "ঠোঁট",
                "subsubcategory_slug_en" => "lips",
                "subsubcategory_slug_bn" => "ঠোঁট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            59 =>
            array(
                "id" => 60,
                "category_id" => 7,
                "subcategory_id" => 19,
                "subsubcategory_name_en" => "Eyes",
                "subsubcategory_name_bn" => "চোখ",
                "subsubcategory_slug_en" => "eyes",
                "subsubcategory_slug_bn" => "চোখ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            60 =>
            array(
                "id" => 61,
                "category_id" => 7,
                "subcategory_id" => 19,
                "subsubcategory_name_en" => "Nails",
                "subsubcategory_name_bn" => "নখ",
                "subsubcategory_slug_en" => "nails",
                "subsubcategory_slug_bn" => "নখ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            61 =>
            array(
                "id" => 62,
                "category_id" => 7,
                "subcategory_id" => 20,
                "subsubcategory_name_en" => "Moisturizers & Creams",
                "subsubcategory_name_bn" => "ময়েশ্চারাইজার ও ক্রিম",
                "subsubcategory_slug_en" => "moisturizers-creams",
                "subsubcategory_slug_bn" => "ময়েশ্চারাইজার-ও-ক্রিম",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            62 =>
            array(
                "id" => 63,
                "category_id" => 7,
                "subcategory_id" => 20,
                "subsubcategory_name_en" => "Facial Cleansers",
                "subsubcategory_name_bn" => "ফেসিয়াল ক্লিনজার",
                "subsubcategory_slug_en" => "facial-cleansers",
                "subsubcategory_slug_bn" => "ফেসিয়াল-ক্লিনজার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            63 =>
            array(
                "id" => 64,
                "category_id" => 6,
                "subcategory_id" => 21,
                "subsubcategory_name_en" => "Baby & Toddler Foods",
                "subsubcategory_name_bn" => "বেবি ও টোডলার ফুড",
                "subsubcategory_slug_en" => "baby-toddler-foods",
                "subsubcategory_slug_bn" => "বেবি-ও-টোডলার-ফুড",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            64 =>
            array(
                "id" => 65,
                "category_id" => 6,
                "subcategory_id" => 22,
                "subsubcategory_name_en" => "Cloth Diapers & Accessories",
                "subsubcategory_name_bn" => "ক্লথ ডায়াপার ও এক্সেসরিজ",
                "subsubcategory_slug_en" => "cloth-diapers-accessories",
                "subsubcategory_slug_bn" => "ক্লথ-ডায়াপার-ও-এক্সেসরিজ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            65 =>
            array(
                "id" => 66,
                "category_id" => 6,
                "subcategory_id" => 23,
                "subsubcategory_name_en" => "Baby Walkers",
                "subsubcategory_name_bn" => "বেবি ওয়াকার",
                "subsubcategory_slug_en" => "baby-walkers",
                "subsubcategory_slug_bn" => "বেবি-ওয়াকার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            66 =>
            array(
                "id" => 67,
                "category_id" => 6,
                "subcategory_id" => 23,
                "subsubcategory_name_en" => "Strollers",
                "subsubcategory_name_bn" => "স্ট্রলার",
                "subsubcategory_slug_en" => "strollers",
                "subsubcategory_slug_bn" => "স্ট্রলার",
                "created_at" => Carbon::now()->format('Y-m-d'),

            ),
            67 =>
            array(
                "id" => 68,
                "category_id" => 6,
                "subcategory_id" => 24,
                "subsubcategory_name_en" => "Baby Bath",
                "subsubcategory_name_bn" => "বেবি বাথ",
                "subsubcategory_slug_en" => "baby-bath",
                "subsubcategory_slug_bn" => "বেবি-বাথ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            68 =>
            array(
                "id" => 69,
                "category_id" => 6,
                "subcategory_id" => 24,
                "subsubcategory_name_en" => "Bathing Tubs & Seats",
                "subsubcategory_name_bn" => "বাথিং টাব ও সিট",
                "subsubcategory_slug_en" => "baby-bath",
                "subsubcategory_slug_bn" => "বেবি-বাথ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            69 =>
            array(
                "id" => 70,
                "category_id" => 6,
                "subcategory_id" => 25,
                "subsubcategory_name_en" => "Bathroom Safety",
                "subsubcategory_name_bn" => "বাথরুম সেফটি",
                "subsubcategory_slug_en" => "bathroom-safety",
                "subsubcategory_slug_bn" => "বাথরুম-সেফটি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            70 =>
            array(
                "id" => 71,
                "category_id" => 6,
                "subcategory_id" => 25,
                "subsubcategory_name_en" => "Sanitizers",
                "subsubcategory_name_bn" => "স্যানিটাইজার",
                "subsubcategory_slug_en" => "sanitizers",
                "subsubcategory_slug_bn" => "স্যানিটাইজার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            71 =>
            array(
                "id" => 72,
                "category_id" => 5,
                "subcategory_id" => 30,
                "subsubcategory_name_en" => "Cross Body & Shoulder Bags",
                "subsubcategory_name_bn" => "ক্রসবডি ব্যাগ",
                "subsubcategory_slug_en" => "cross-body-shoulder-bags",
                "subsubcategory_slug_bn" => "ক্রসবডি-ব্যাগ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            72 =>
            array(
                "id" => 73,
                "category_id" => 5,
                "subcategory_id" => 30,
                "subsubcategory_name_en" => "Clutches",
                "subsubcategory_name_bn" => "ক্লাচ",
                "subsubcategory_slug_en" => "clutches",
                "subsubcategory_slug_bn" => "ক্লাচ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            73 =>
            array(
                "id" => 74,
                "category_id" => 5,
                "subcategory_id" => 28,
                "subsubcategory_name_en" => "Pants",
                "subsubcategory_name_bn" => "প্যান্ট",
                "subsubcategory_slug_en" => "pants",
                "subsubcategory_slug_bn" => "প্যান্ট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            74 =>
            array(
                "id" => 75,
                "category_id" => 5,
                "subcategory_id" => 28,
                "subsubcategory_name_en" => "Tops",
                "subsubcategory_name_bn" => "টপ", "subsubcategory_slug_en" => "tops",
                "subsubcategory_slug_bn" => "টপ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            75 =>
            array(
                "id" => 76,
                "category_id" => 5,
                "subcategory_id" => 28,
                "subsubcategory_name_en" => "Sweaters & Cardigans",
                "subsubcategory_name_bn" => "সোয়েটার এবং কার্ডিগান",
                "subsubcategory_slug_en" => "sweaters-cardigans",
                "subsubcategory_slug_bn" => "সোয়েটার-এবং-কার্ডিগান",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            76 =>
            array(
                "id" => 77,
                "category_id" => 4,
                "subcategory_id" => 40,
                "subsubcategory_name_en" => "Sneakers",
                "subsubcategory_name_bn" => "স্নিকার",
                "subsubcategory_slug_en" => "sneakers",
                "subsubcategory_slug_bn" => "স্নিকার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            77 =>
            array(
                "id" => 78,
                "category_id" => 4,
                "subcategory_id" => 40,
                "subsubcategory_name_en" => "Sandals",
                "subsubcategory_name_bn" => "স্যান্ডেল",
                "subsubcategory_slug_en" => "sandals",
                "subsubcategory_slug_bn" => "স্যান্ডেল",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            78 =>
            array(
                "id" => 79,
                "category_id" => 4,
                "subcategory_id" => 40,
                "subsubcategory_name_en" => "Formal Shoes",
                "subsubcategory_name_bn" => "ফরমাল জুতা",
                "subsubcategory_slug_en" => "formal-shoes",
                "subsubcategory_slug_bn" => "ফরমাল-জুতা",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            79 =>
            array(
                "id" => 80,
                "category_id" => 4,
                "subcategory_id" => 40,
                "subsubcategory_name_en" => "Boots",
                "subsubcategory_name_bn" => "বুট",
                "subsubcategory_slug_en" => "boots",
                "subsubcategory_slug_bn" => "বুট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            80 =>
            array(
                "id" => 81,
                "category_id" => 1,
                "subcategory_id" => 31,
                "subsubcategory_name_en" => "Bathroom Scales",
                "subsubcategory_name_bn" => "বাথরুম স্কেল",
                "subsubcategory_slug_en" => "bathroom-scales",
                "subsubcategory_slug_bn" => "বাথরুম-স্কেল",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            81 =>
            array(
                "id" => 82,
                "category_id" => 1,
                "subcategory_id" => 31,
                "subsubcategory_name_en" => "Shower Caddies & Hangers",
                "subsubcategory_name_bn" => "শাওয়ার ক্যাডি ও হ্যাঙ্গার",
                "subsubcategory_slug_en" => "shower-caddies-hangers",
                "subsubcategory_slug_bn" => "শাওয়ার-ক্যাডি-ও-হ্যাঙ্গার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            82 =>
            array(
                "id" => 83,
                "category_id" => 1,
                "subcategory_id" => 31,
                "subsubcategory_name_en" => "Shower Curtains",
                "subsubcategory_name_bn" => "গোছলখানার পর্দা",
                "subsubcategory_slug_en" => "shower-curtains",
                "subsubcategory_slug_bn" => "গোছলখানার-পর্দা",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            83 =>
            array(
                "id" => 84,
                "category_id" => 1,
                "subcategory_id" => 32,
                "subsubcategory_name_en" => "Blankets & Throws",
                "subsubcategory_name_bn" => "কংক্রিট ও তিরস্কার",
                "subsubcategory_slug_en" => "blankets-throws",
                "subsubcategory_slug_bn" => "কংক্রিট-ও-তিরস্কার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            84 =>
            array(
                "id" => 85,
                "category_id" => 1,
                "subcategory_id" => 32,
                "subsubcategory_name_en" => "Comforters, Quilts & Duvets",
                "subsubcategory_name_bn" => "আরামদায়ক, গুঁড়ো এবং Duvets",
                "subsubcategory_slug_en" => "comforters-quilts-duvets",
                "subsubcategory_slug_bn" => "আরামদায়ক,-গুঁড়ো-এবং-Duvets",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            85 =>
            array(
                "id" => 86,
                "category_id" => 1,
                "subcategory_id" => 32,
                "subsubcategory_name_en" => "Mattress Pads",
                "subsubcategory_name_bn" => "ম্যাট্রেস প্যাড",
                "subsubcategory_slug_en" => "mattress-pads",
                "subsubcategory_slug_bn" => "ম্যাট্রেস-প্যাড",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            86 =>
            array(
                "id" => 87,
                "category_id" => 1,
                "subcategory_id" => 33,
                "subsubcategory_name_en" => "Artificial Flowers & Plants",
                "subsubcategory_name_bn" => "কৃত্রিম ফুল ও গাছ",
                "subsubcategory_slug_en" => "artificial-flowers-plants",
                "subsubcategory_slug_bn" => "কৃত্রিম-ফুল-ও-গাছ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            87 =>
            array(
                "id" => 88,
                "category_id" => 1,
                "subcategory_id" => 33,
                "subsubcategory_name_en" => "Candles & Candleholders",
                "subsubcategory_name_bn" => "মোমবাতি ও মোমদানি",
                "subsubcategory_slug_en" => "candles-candleholders",
                "subsubcategory_slug_bn" => "মোমবাতি-ও-মোমদানি",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            88 =>
            array(
                "id" => 89,
                "category_id" => 2,
                "subcategory_id" => 47,
                "subsubcategory_name_en" => "Boxing Gloves",
                "subsubcategory_name_bn" => "বক্সিং গ্লভস",
                "subsubcategory_slug_en" => "boxing-gloves",
                "subsubcategory_slug_bn" => "বক্সিং-গ্লভস",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            89 =>
            array(
                "id" => 90,
                "category_id" => 2,
                "subcategory_id" => 47,
                "subsubcategory_name_en" => "Boxing Protective gear",
                "subsubcategory_name_bn" => "বক্সিং প্রটেক্টিভ গিয়ার",
                "subsubcategory_slug_en" => "boxing-protective-gear",
                "subsubcategory_slug_bn" => "বক্সিং-প্রটেক্টিভ-গিয়ার",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            90 =>
            array(
                "id" => 91,
                "category_id" => 2,
                "subcategory_id" => 47,
                "subsubcategory_name_en" => "Martial Art Equipment",
                "subsubcategory_name_bn" => "মার্সাল আর্ট সরঞ্জাম",
                "subsubcategory_slug_en" => "martial-art-equipment",
                "subsubcategory_slug_bn" => "মার্সাল-আর্ট-সরঞ্জাম",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            91 =>
            array(
                "id" => 92,
                "category_id" => 2,
                "subcategory_id" => 48,
                "subsubcategory_name_en" => "Clothing",
                "subsubcategory_name_bn" => "পোষাক",
                "subsubcategory_slug_en" => "clothing",
                "subsubcategory_slug_bn" => "পোষাক",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            92 =>
            array(
                "id" => 93,
                "category_id" => 2,
                "subcategory_id" => 48,
                "subsubcategory_name_en" => "Shoes",
                "subsubcategory_name_bn" => "জুতা",
                "subsubcategory_slug_en" => "shoes",
                "subsubcategory_slug_bn" => "জুতা",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            93 =>
            array(
                "id" => 94,
                "category_id" => 2,
                "subcategory_id" => 49,
                "subsubcategory_name_en" => "Golf",
                "subsubcategory_name_bn" => "গলফ",
                "subsubcategory_slug_en" => "golf",
                "subsubcategory_slug_bn" => "গলফ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            94 =>
            array(
                "id" => 95,
                "category_id" => 2,
                "subcategory_id" => 49,
                "subsubcategory_name_en" => "Fishing",
                "subsubcategory_name_bn" => "ফিশিং",
                "subsubcategory_slug_en" => "fishing",
                "subsubcategory_slug_bn" => "ফিশিং",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            95 =>
            array(
                "id" => 96,
                "category_id" => 2,
                "subcategory_id" => 50,
                "subsubcategory_name_en" => "Exercise Bikes",
                "subsubcategory_name_bn" => "এক্সারসাইজ বাইক", "subsubcategory_slug_en" => "exercise-bikes",
                "subsubcategory_slug_bn" => "এক্সারসাইজ-বাইক",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            96 =>
            array(
                "id" => 97,
                "category_id" => 2,
                "subcategory_id" => 50,
                "subsubcategory_name_en" => "Elliptical Trainers",
                "subsubcategory_name_bn" => "ইলিপটিক্যাল প্রশিক্ষক",
                "subsubcategory_slug_en" => "elliptical-trainers",
                "subsubcategory_slug_bn" => "ইলিপটিক্যাল-প্রশিক্ষক",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            97 =>
            array(
                "id" => 98,
                "category_id" => 2,
                "subcategory_id" => 50,
                "subsubcategory_name_en" => "Strength Training Equipment",
                "subsubcategory_name_bn" => "স্ট্রেংথ ট্রেনিং ইকুইপমেন্ট",
                "subsubcategory_slug_en" => "strength-training-equipment",
                "subsubcategory_slug_bn" => "স্ট্রেংথ-ট্রেনিং-ইকুইপমেন্ট",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            98 =>
            array(
                "id" => 99,
                "category_id" => 2,
                "subcategory_id" => 48,
                "subsubcategory_name_en" => "Accessories",
                "subsubcategory_name_bn" => "এক্সেসরিজ",
                "subsubcategory_slug_en" => "accessories",
                "subsubcategory_slug_bn" => "এক্সেসরিজ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            99 =>
            array(
                "id" => 100,
                "category_id" => 2,
                "subcategory_id" => 48,
                "subsubcategory_name_en" => "Bags",
                "subsubcategory_name_bn" => "ব্যাগ",
                "subsubcategory_slug_en" => "bags",
                "subsubcategory_slug_bn" => "ব্যাগ",
                "created_at" => Carbon::now()->format('Y-m-d'),
            )
        ));
    }
}

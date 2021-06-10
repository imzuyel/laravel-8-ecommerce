<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       return view('frontend.index');
    }
    public function shop()
    {
       return view('frontend.shop.index');
    }
    public function details()
    {
       return view('frontend.shop.details');
    }
    public function category()
    {
       return view('frontend.shop.category');
    }

}

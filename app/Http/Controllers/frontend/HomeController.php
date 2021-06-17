<?php

namespace App\Http\Controllers\frontend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::where('status', true)->latest('id')->get();
        return view('frontend.index', $data);
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

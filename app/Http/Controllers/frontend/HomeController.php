<?php

namespace App\Http\Controllers\frontend;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders']            = Slider::where('status', true)->latest('id')->get();
        $data['products']           = Product::where('status', true)->latest('id')->take(15)->get();
        $data['categories']         = Category::with('products')->where('status', true)->oldest('id')->get();
        return view('frontend.index', $data);
    }
    public function shop()
    {
        return view('frontend.shop.index');
    }
    public function details($id)
    {
        $product                    = Product::findOrFail($id);
        $data['product']            = $product;
        $data['previous_product']   = Product::where('id', '<', $id)->where('status', 1)->orderBy('id', 'desc')->first();
        $data['next_product']       = Product::where('id', '>', $id)->where('status', 1)->orderBy('id', 'desc')->first();
        $color                      = $product->product_color;
        $data['product_color']      = explode(',', $color);
        $size                       = $product->size;
        $data["size"]               = explode(',', $size);
        return view('frontend.shop.details', $data);
    }
    public function category()
    {
        return view('frontend.shop.category');
    }
    function viewProduct($id)
    {
        $product                = Product::findOrFail($id);
        $category               =$product->category;
        $color                  = $product->product_color;
        $product_color          = explode(',', $color);

        $size = $product->size;
        $size = explode(',', $size);

        return response()->json(array(
            'product'           => $product,
            'color'             => $product_color,
            'size'              => $size,
            'category'          => $category,
        ));
    }
}

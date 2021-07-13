<?php

namespace App\Http\Controllers\frontend;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
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
    public function detailsbn($category, $slug)
    {
        $product                    = Product::where('product_slug_bn', $slug)->firstOrFail();
        $id                         = $product->id;
        $data['product']            = $product;

        $data['previous_product']   = Product::where('id', '<', $id)->where('status', 1)->orderBy('id', 'desc')->first();
        $data['next_product']       = Product::where('id', '>', $id)->where('status', 1)->orderBy('id', 'desc')->first();
        $color                      = $product->product_color;
        $data['product_color']      = explode(',', $color);
        $size                       = $product->size;
        $data["size"]               = explode(',', $size);
        return view('frontend.shop.details', $data);
    }
    public function detailsen($category, $slug)
    {
        $product                    = Product::where('product_slug_en', $slug)->firstOrFail();
        $id                         = $product->id;
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
        $category               = $product->category;
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
    // Category wise products
    public function categoryproductsbn($category)
    {
        $category = Category::where('category_slug_bn', $category)->with('products')->firstOrFail();
        return view('frontend.shop.category', compact('category'));
    }
    public function categoryproductsen($category)
    {
        $category = Category::where('category_slug_en', $category)->with('products')->firstOrFail();
        return view('frontend.shop.category', compact('category'));
    }

    // SubCategory wise products
    public function subcategoryproductsbn($category, $subcategory)
    {
        $subcategory = SubCategory::where('subcategory_slug_bn', $subcategory)->with('products')->firstOrFail();
        return view('frontend.shop.subcategory', compact('subcategory'));
    }
    public function subcategoryproductsen($category, $subcategory)
    {
        $subcategory = SubCategory::where('subcategory_slug_en', $subcategory)->with('products')->firstOrFail();
        return view('frontend.shop.subcategory', compact('subcategory'));
    }
    // Sub-SubCategory wise products
    public function subsubcategoryproductsbn($category, $subcategory, $subsubcategory)
    {
        $subsubcategory = SubSubCategory::where('subsubcategory_slug_bn', $subsubcategory)->with('products')->firstOrFail();
        return view('frontend.shop.subsubcategory', compact('subsubcategory'));
    }
    public function subsubcategoryproductsen($category, $subcategory, $subsubcategory)
    {
        $subsubcategory = SubSubCategory::where('subsubcategory_slug_en', $subsubcategory)->with('products')->firstOrFail();
        return view('frontend.shop.subsubcategory', compact('subsubcategory'));
    }
    public function categorydataAtoZ($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->OrderBy('product_name_en')->get();
        return view('frontend.shop.listing', compact('products'));
    }
    public function categorydataZtoA($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->OrderBy('product_name_en', 'desc')->get();
        return view('frontend.shop.listing', compact('products'));
    }
    public function categorydatapriceHightoLow($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->orderByRaw('CAST(price as DECIMAL(8,2)) DESC')->get();
        return view('frontend.shop.listing', compact('products'));
    }
    public function categorydatapriceLowtoHigh($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->orderByRaw('CAST(price as DECIMAL(8,2))')->get();
        return view('frontend.shop.listing', compact('products'));
    }
    public function categorydataOldest($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->oldest('id')->get();
        return view('frontend.shop.listing', compact('products'));
    }
    public function categorydatapLatest($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->latest('id')->get();
        return view('frontend.shop.listing', compact('products'));
    }

}

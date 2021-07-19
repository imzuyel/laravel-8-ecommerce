<?php

namespace App\Http\Controllers\frontend;

use App\Models\Brand;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        // return Product::whereIn('product_color',['red'])->where('status',1)->get();
        $data['sliders']            = Slider::where('status', true)->latest('id')->where('status', 1)->get();
        $data['products']           = Product::where('status', true)->latest('id')->take(15)->where('status', 1)->get();
        $data['categories']         = Category::with('products')->where('status', true)->oldest('id')->where('status', 1)->get();
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

    public function categoryproductsen($category, Request $request)
    {
        $colors = Product::productFilter()['colors'];
        $sizes = Product::productFilter()['sizes'];
        if ($request->ajax()) {
            $data = $request->all();
            $url = $data['url'];
            $category = Category::where('category_slug_en', $url)->first();
            $id = $category->id;
            $products = Product::where('category_id', $id);
            // Sort product
            // If  brand filter option
            if (isset($data['brand']) && !empty($data['brand'])) {
                $products->where('brand_id', $data['brand']);
            }
            // If  Color filter option
            if (isset($data['color']) && !empty($data['color'])) {
                $color = $data['color'];
                $products->where('product_color', 'LIKE', '%' . $color . "%");
            }

            // If  Size filter option
            if (isset($data['size']) && !empty($data['size'])) {
                $size = $data['size'];
                $products->where('size', 'LIKE', '%' . $size . "%");
            }
            // Sort product
            if (isset($data['sort']) && !empty($data['sort'])) {
                if ($data['sort'] == "product_latest") {
                    $products->orderBy('id', 'desc');
                } else if ($data['sort'] == "product_name_a_to_z") {
                    $products->orderBy('product_name_en', 'Asc');
                } else if ($data['sort'] == "product_name_z_to_a") {
                    $products->orderBy('product_name_en', 'desc');
                } else if ($data['sort'] == "price_low") {
                    $products->orderBy('price', 'Asc');
                } else if ($data['sort'] == "price_high") {
                    $products->orderBy('price', 'desc');
                } else {
                    $products->orderBy('id', 'desc');
                }
            }

            $products = $products->paginate(10);
            return view('frontend.shop.listing')->with(compact('products'));
        } else {
            $category = Category::where('category_slug_en', $category)->with('products')->firstOrFail();
            return view('frontend.shop.category', compact('category', 'colors', 'sizes'));
        }
    }


    public function subcategoryproductsen($category, $subcategory, Request $request)
    {
        $colors = Product::productFilter()['colors'];
        $sizes = Product::productFilter()['sizes'];
        $brands = Brand::where('status', 1)->get();
        if ($request->ajax()) {
            $data = $request->all();
            $url = $data['url'];

                $subcategory = SubCategory::where('subcategory_slug_en', $url)->first();


            $subcategory = SubCategory::where('subcategory_slug_en', $url)->first();
            $id = $subcategory->id;
            $products = Product::where('subcategory_id', $id);
            // Sort product
            // If  brand filter option
            if (isset($data['brand']) && !empty($data['brand'])) {
                $products->where('brand_id', $data['brand']);
            }
            // If  Color filter option
            if (isset($data['color']) && !empty($data['color'])) {
                $color = $data['color'];
                $products->where('product_color', 'LIKE', '%' . $color . "%");
            }

            // If  Size filter option
            if (isset($data['size']) && !empty($data['size'])) {
                $size = $data['size'];
                $products->where('size', 'LIKE', '%' . $size . "%");
            }
            // Sort product
            if (isset($data['sort']) && !empty($data['sort'])) {
                if ($data['sort'] == "product_latest") {
                    $products->orderBy('id', 'desc');
                } else if ($data['sort'] == "product_name_a_to_z") {
                    $products->orderBy('product_name_en', 'Asc');
                } else if ($data['sort'] == "product_name_z_to_a") {
                    $products->orderBy('product_name_en', 'desc');
                } else if ($data['sort'] == "price_low") {
                    $products->orderBy('price', 'Asc');
                } else if ($data['sort'] == "price_high") {
                    $products->orderBy('price', 'desc');
                } else {
                    $products->orderBy('id', 'desc');
                }
            }

            $products = $products->paginate(10);
            return view('frontend.shop.listing')->with(compact('products'));
        } else {
            $subcategory = SubCategory::where('subcategory_slug_en', $subcategory)->with('products')->firstOrFail();
            return view('frontend.shop.subcategory', compact('subcategory', 'colors', 'sizes', 'brands'));
        }
    }

    public function subsubcategoryproductsen($category, $subcategory, $subsubcategory)
    {
        $subsubcategory = SubSubCategory::where('subsubcategory_slug_en', $subsubcategory)->with('products')->firstOrFail();
        return view('frontend.shop.subsubcategory', compact('subsubcategory'));
    }




}

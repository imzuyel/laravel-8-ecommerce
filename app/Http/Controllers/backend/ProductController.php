<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductMultiImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.product.form', compact('categories', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.products.create');
        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        $brands = Brand::latest()->get();
        return view('backend.product.form', compact('categories', 'brands', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.products.create');
        $this->validate($request, [
            'brand_id'                      => 'required|integer',
            'category_id1'                  => 'required|integer',
            'subcategory_id'                => 'nullable|integer',
            'subsubcategory_id'             => 'nullable|integer',
            'product_name_en'               => 'required|string|unique:products',
            'product_name_bn'               => 'required|string|unique:products',
            'product_qty_en'                => 'required|integer',
            'product_qty_bn'                => 'required|integer',
            'price_en'                      => 'required|integer',
            'price_bn'                      => 'required|integer',
            'discount_en'                   => 'nullable|integer',
            'discount_bn'                   => 'nullable|integer',
            'product_tags_en'               => 'required|string',
            'product_tags_bn'               => 'required|string',
            'short_description_en'          => 'nullable|string',
            'short_description_bn'          => 'nullable|string',
            'long_description_en'           => 'required|min:3|max:1000',
            'long_description_bn'           => 'required|min:3|max:1000',
            'size'                          => 'nullable|string',
            'product_color_en'              => 'nullable|string',
            'product_color_bn'              => 'nullable|string',
            'image'                         => 'required|image|mimes:jpg,png,jpeg,svg',
            'multiImage.*'                  => 'nullable|image|mimes:jpg,png,jpeg,svg',
            'meta_keywords_en'              => 'nullable|string',
            'meta_keywords_bn'              => 'nullable|string',
            'meta_description_en'           => 'nullable|string',
            'meta_description_bn'           => 'nullable|string',
            'multiImage.*'                  => 'nullable|image|mimes:jpg,png,jpeg,svg',
            'multiImage.*'                  => 'nullable|image|mimes:jpg,png,jpeg,svg',

        ], [
            'product_name_bn.required'      => 'পণ্যটির নাম প্রয়োজন',
            'product_qty_bn.required'       => 'পণ্যটির পরিমাণ প্রয়োজন',
            'product_tags_bn.required'      => 'পণ্যটির ট্যাগগুলি প্রয়োজনীয়',
            'short_description_bn.required' => 'পণ্যটির সংক্ষিপ্ত বিবরণ প্রয়োজন',
            'long_description_bn.required'  => 'পণ্যটির দীর্ঘ বিবরণ প্রয়োজন',
            'price_bn.required'             => 'পণ্যটির মূল্য প্রয়োজন',
        ]);

        $product   = Product::create([
            'brand_id'                      => $request->brand_id,
            'category_id'                   => $request->category_id1,
            'subcategory_id'                => $request->subcategory_id,
            'subsubcategory_id'             => $request->subsubcategory_id,
            'product_name_en'               => $request->product_name_en,
            'product_name_bn'               => $request->product_name_bn,
            'product_slug_en'               =>  Str::slug($request->product_name_en),
            'product_slug_bn'               => Str::slug($request->product_name_bn),
            'product_qty_en'                => $request->product_qty_en,
            'product_qty_bn'                => $request->product_qty_bn,
            'price_en'                      => $request->price_en,
            'price_bn'                      => $request->price_bn,
            'discount_en'                   => $request->discount_en,
            'discount_bn'                   => $request->discount_bn,
            'product_tags_en'               => $request->product_tags_en,
            'product_tags_bn'               => $request->product_tags_bn,
            'short_description_en'          => $request->short_description_en,
            'short_description_bn'          => $request->short_description_bn,
            'long_description_en'           => $request->long_description_en,
            'long_description_bn'           => $request->long_description_bn,
            'size'                          => $request->size,
            'product_color_en'              => $request->product_color_en,
            'product_color_bn'              => $request->product_color_bn,
            'meta_keywords_en'              => $request->meta_keywords_en,
            'meta_keywords_bn'              => $request->meta_keywords_bn,
            'meta_description_en'           => $request->meta_description_en,
            'meta_description_bn'           => $request->meta_description_bn,
            'product_code'                  => "604",
            'product_color_en'              => $request->product_color_en,
            'hot_deals'                     => $request->filled('hot_deals'),
            'featured'                      => $request->filled('featured'),
            'special_offer'                 => $request->filled('special_offer'),
            'special_deals'                 => $request->filled('special_deals'),
        ]);


        $file                               = $request->hasFile('image');
        if ($file) {
            if (file_exists($product->image)) {
                unlink($product->image);
            }
            $product->image                 = $this->uploadeImage($request);
        }
        $product->save();

        $images = $request->file('multi_img');
        foreach ($images as $img) {
            $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(500, 400)->save('images/products/multi-image/' . $make_name);
            $uploadPath = 'images/products/multi-image/' . $make_name;
            ProductMultiImage::insert([
                'product_id' => $product->id,
                'image_name' => $uploadPath,
                'created_at' => Carbon::now(),
            ]);
        }
        toastr()->success('Product added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


    public function category(Request $request)
    {
        if ($request->ajax()) {
            $categorywithSubcategory = Category::where('id', $request->category_id1)->with(['subcategories'])->first();
            return view('backend.product.subcategory', compact('categorywithSubcategory'));
        }
    }
    public function subcategory(Request $request)
    {
        if ($request->ajax()) {
            $categorywithSubSubcategory = SubCategory::where('id', $request->subcategory_id)->with(['subsubcategories'])->first();
            return view('backend.product.subsubcategory', compact('categorywithSubSubcategory'));
        }
    }
    //Image intervetion
    protected function uploadeImage($request)
    {
        $file           = $request->file("image");
        $get_imageName  =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $directory      = 'images/products/';
        $imageUrl       = $directory . $get_imageName;
        Image::make($file)->resize(700, 600)->save($imageUrl);
        return $imageUrl;
    }
}

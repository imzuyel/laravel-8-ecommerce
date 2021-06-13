<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Models\ProductMultiImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('brand', 'category')->get();
        return view('backend.product.index', compact('products'));
    }


    public function create()
    {
        Gate::authorize('app.products.create');
        $data['categories'] = Category::latest()->get();
        $data['subcategories']  = SubCategory::latest()->get();
        $data['brands']   = Brand::latest()->get();
        return view('backend.product.create', $data);
    }


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
            'long_description_en'           => 'required|min:3',
            'long_description_bn'           => 'required|min:3',
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
            'product_slug_en'               => $this->make_slug($request->product_name_en),
            'product_slug_bn'               => $this->make_slug($request->product_name_bn),
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
            'product_color_en'              => $request->product_color_en,
            'hot_deals'                     => $request->filled('hot_deals'),
            'featured'                      => $request->filled('featured'),
            'special_offer'                 => $request->filled('special_offer'),
            'special_deals'                 => $request->filled('special_deals'),
            'status'                        => $request->filled('status'),
        ]);
        $product->product_code = $this->generateProductCode($product->id);
        $file                               = $request->hasFile('image');
        if ($file) {
            if (file_exists($product->image)) {
                unlink($product->image);
            }
            $product->image                 = $this->uploadeImage($request);
        }
        $product->save();

        $images = $request->file('multi_img');
        if ($images) {
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
        }
        toastr()->success('Product added successfully');
        return redirect()->route('app.products.index');
    }


    public function show(Product $product)
    {

       return view('backend.product.deatails',compact('product'));
    }

    public function edit(Product $product)
    {
        Gate::authorize('app.products.edit');
        $data['categories'] = Category::latest()->get();
        $data['subcategories']  = SubCategory::latest()->get();
        $data['subsubcategories']  = SubSubCategory::latest()->get();
        $data['brands']   = Brand::latest()->get();
        $data['product']   = $product;
        return view('backend.product.edit', $data);
    }

    public function update(Request $request, Product $product)
    {
        Gate::authorize('app.products.edit');
        $this->validate($request, [
            'brand_id'                      => 'required|integer',
            'category_id1'                  => 'required|integer',
            'subcategory_id'                => 'nullable|integer',
            'subsubcategory_id'             => 'nullable|integer',
            'product_name_en'               => 'required|string|unique:products,product_name_en,' . $product->id,
            'product_name_bn'               => 'required|string|unique:products,product_name_bn,' . $product->id,
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
            'long_description_en'           => 'required|min:3',
            'long_description_bn'           => 'required|min:3',
            'size'                          => 'nullable|string',
            'product_color_en'              => 'nullable|string',
            'product_color_bn'              => 'nullable|string',
            'image'                         => 'nullable|image|mimes:jpg,png,jpeg,svg',
            'multiImage.*'                  => 'nullable|image|mimes:jpg,png,jpeg,svg',
            'meta_keywords_en'              => 'nullable|string',
            'meta_keywords_bn'              => 'nullable|string',
            'meta_description_en'           => 'nullable|string',
            'meta_description_bn'           => 'nullable|string',
        ], [
            'product_name_bn.required'      => 'পণ্যটির নাম প্রয়োজন',
            'product_qty_bn.required'       => 'পণ্যটির পরিমাণ প্রয়োজন',
            'product_tags_bn.required'      => 'পণ্যটির ট্যাগগুলি প্রয়োজনীয়',
            'short_description_bn.required' => 'পণ্যটির সংক্ষিপ্ত বিবরণ প্রয়োজন',
            'long_description_bn.required'  => 'পণ্যটির দীর্ঘ বিবরণ প্রয়োজন',
            'price_bn.required'             => 'পণ্যটির মূল্য প্রয়োজন',
        ]);
        $product->update([
            'brand_id'                      => $request->brand_id,
            'category_id'                   => $request->category_id1,
            'subcategory_id'                => $request->subcategory_id,
            'subsubcategory_id'             => $request->subsubcategory_id,
            'product_name_en'               => $request->product_name_en,
            'product_name_bn'               => $request->product_name_bn,
            'product_slug_en'               => $this->make_slug($request->product_name_en),
            'product_slug_bn'               => $this->make_slug($request->product_name_en),
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
            'product_color_en'              => $request->product_color_en,
            'product_code'                  => $this->generateProductCode($product->id),
            'hot_deals'                     => $request->filled('hot_deals'),
            'featured'                      => $request->filled('featured'),
            'special_offer'                 => $request->filled('special_offer'),
            'special_deals'                 => $request->filled('special_deals'),
            'status'                        => $request->filled('status'),
        ]);

        $file                               = $request->hasFile('image');
        if ($file) {
            if (file_exists($product->image)) {
                unlink($product->image);
            }
            $product->image                 = $this->uploadeImage($request);
        }
        $product->save();

        toastr()->success('Product Updated successfully');
        return redirect()->route('app.products.index');
    }


    public function destroy(Product $product)
    {

        if (file_exists($product->image)) {
            unlink($product->image);
        }

        $images = ProductMultiImage::where('product_id', $product->id)->get();
        foreach ($images as $img) {
            if (file_exists($img->image_name)) {
                unlink($img->image_name);
            }

            ProductMultiImage::where('product_id', $product->id)->delete();
        }
        $product->delete();

        toastr()->success('Product deleted successfully');
        return back();
    }



    // Multi Image
    public function updateMultiImage($id)
    {
        $multiImages = ProductMultiImage::where('product_id', $id)->get();
        return view('backend.product.editMultiImage', compact('multiImages', 'id'));
    }
    public function updateMultiImageUpdate(Request $request)
    {

        $imgs = $request->multi_img;
        if ($imgs) {
            foreach ($imgs as $id => $img) {
                $imgDel = ProductMultiImage::findOrFail($id);
                if (file_exists($imgDel->image_name)) {
                    unlink($imgDel->image_name);
                }

                $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(500, 400)->save('images/products/multi-image/' . $make_name);
                $uploadPath = 'images/products/multi-image/' . $make_name;

                ProductMultiImage::where('id', $id)->update([
                    'image_name' => $uploadPath,
                    'updated_at' => Carbon::now(),

                ]);
            }
            toastr()->success('Product Multi image updated successfully');
        } else {
            toastr()->error('Select image first');
        }
        return back();
    }
    public function updateMultiImageDelete($id)
    {
        $oldimg = ProductMultiImage::findOrFail($id);
        if (file_exists($oldimg->image_name)) {
            unlink($oldimg->image_name);
        }
        $oldimg->delete();
        toastr()->success('Image deleted successfully');
        return back();
    }

    public function updateMultiImageStore(Request $request)
    {
        $images = $request->file('multi_img');
        if ($images) {
            foreach ($images as $img) {
                $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(500, 400)->save('images/products/multi-image/' . $make_name);
                $uploadPath = 'images/products/multi-image/' . $make_name;
                ProductMultiImage::insert([
                    'product_id' => $request->id,
                    'image_name' => $uploadPath,
                    'created_at' => Carbon::now(),
                ]);
            }
        }
        toastr()->success('Product added successfully');
        return back();
    }
    // End Multi Image


    //Stock
    public function updateStock($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.product.stock', compact('product'));
    }
    public function updateStockUpdate(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->update([
            'product_qty_en'                => $request->product_qty_en,
            'product_qty_bn'                => $request->product_qty_bn,
        ]);
        toastr()->success('Product stock updated successfully');
        return back();
    }



    // Get Data By ajax
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

    //Update status
    public function updateStatus(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['status'] == "Active") {
                $status = false;
            } else {
                $status = true;
            }
            Product::where('id', $data['product_id'])->update(['status' => $status]);
            return response()->json(['status' => $status, 'product_id' => $data['product_id']]);
        }
    }
    //End get data by Ajax

    // Code Generator
    protected function generateProductCode($id)
    {
        return 'ABC-' . str_pad($id, 5, "0", STR_PAD_LEFT);
    }

    //Image intervetion
    protected function uploadeImage($request)
    {
        $file           = $request->file("image");
        $get_imageName  =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $directory      = 'images/products/thambnails/';
        $imageUrl       = $directory . $get_imageName;
        Image::make($file)->resize(700, 600)->save($imageUrl);
        return $imageUrl;
    }

    public function make_slug($string)
    {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}

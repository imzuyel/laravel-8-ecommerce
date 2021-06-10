<?php

namespace App\Http\Controllers\backend;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{

    public function index()
    {
        Gate::authorize('app.brands.index');
        $brands = Brand::latest()->get();
        return view('backend.brands.index', compact('brands'));
    }


    public function create()
    {
        Gate::authorize('app.brands.create');
        return view('backend.brands.form');
    }


    public function store(Request $request)
    {
        Gate::authorize('app.brands.create');
        $this->validate($request, [
            'brand_name_en'     => 'required|string|unique:brands,brand_name_en',
            'brand_name_bn'     => 'required|string|unique:brands,brand_name_bn',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg,svg',
        ]);
        $brand = Brand::create([
            'brand_name_en'     => $request->brand_name_en,
            'brand_slug_en'     => Str::slug($request->brand_name_en),
            'brand_name_bn'     => $request->brand_name_bn,
            'brand_slug_bn'     => Str::slug($request->brand_name_bn),
            'status'            => $request->filled('status'),
        ]);
        $file                   = $request->hasFile('image');
        if ($file) {
            if (file_exists($brand->image)) {
                unlink($brand->image);
            }
            $brand->image = $this->uploadeImage($request);
        }
        $brand->save();
        toastr()->success('Brand added successfully');
        return redirect()->route('app.brands.index');
    }


    public function edit(Brand $brand)
    {
        Gate::authorize('app.brands.edit');
        return view('backend.brands.form', compact('brand'));
    }



    public function update(Request $request, Brand $brand)
    {
        Gate::authorize('app.brands.edit');
        $brand->update([
            'brand_name_en'      => $request->brand_name_en,
            'brand_slug_en'      => Str::slug($request->brand_name_en),
            'brand_name_bn'      => $request->brand_name_bn,
            'brand_slug_bn'      => Str::slug($request->brand_name_bn),
            'status'             => $request->filled('status'),
        ]);
        $file                    = $request->hasFile('image');
        if ($file) {
            if (file_exists($brand->image)) {
                unlink($brand->image);
            }
            $brand->image = $this->uploadeImage($request);
        }
        $brand->save();
        toastr()->success('Brand update successfully');
        return redirect()->route('app.brands.index');
    }


    public function destroy(Brand $brand)
    {
        Gate::authorize('app.brands.destroy');
        if (file_exists($brand->image)) {
            unlink($brand->image);
        }
        $brand->delete();
        toastr()->success('Brand deleted successfully');
        return redirect()->route('app.brands.index');
    }
    //Image intervetion
    protected function uploadeImage($request)
    {
        $file           = $request->file("image");
        $get_imageName  =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $directory      = 'images/brands/';
        $imageUrl       = $directory . $get_imageName;
        Image::make($file)->resize(100, 100)->save($imageUrl);
        return $imageUrl;
    }
}

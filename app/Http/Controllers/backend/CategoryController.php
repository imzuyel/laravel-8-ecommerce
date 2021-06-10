<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index()
    {
        Gate::authorize('app.categories.index');
        $categories = Category::latest()->get();
        return view('backend.categories.index', compact('categories'));
    }


    public function create()
    {
        Gate::authorize('app.categories.create');
        return view('backend.categories.form');
    }


    public function store(Request $request)
    {
        Gate::authorize('app.categories.create');
        $this->validate($request, [
            'category_name_en'     => 'required|string|unique:categories,category_name_en',
            'category_name_bn'     => 'required|string|unique:categories,category_name_bn',
            'image'                => 'nullable|image|mimes:jpg,png,jpeg,svg',
        ]);
        $category = Category::create([
            'category_name_en'     => $request->category_name_en,
            'category_slug_en'     => Str::slug($request->category_name_en),
            'category_name_bn'     => $request->category_name_bn,
            'category_slug_bn'     => Str::slug($request->category_name_bn),
            'status'            => $request->filled('status'),
        ]);
        $file                   = $request->hasFile('image');
        if ($file) {
            if (file_exists($category->image)) {
                unlink($category->image);
            }
            $category->image = $this->uploadeImage($request);
        }
        $category->save();
        toastr()->success('Category added successfully');
        return redirect()->route('app.categories.index');
    }


    public function edit(Category $category)
    {
        Gate::authorize('app.categories.edit');
        return view('backend.categories.form', compact('category'));
    }



    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'category_name_en'     => 'required|string|unique:categories,category_name_en,'.$category->id,
            'category_name_bn'     => 'required|string|unique:categories,category_name_bn,'.$category->id,
            'image'                => 'nullable|image|mimes:jpg,png,jpeg,svg',
        ]);
        Gate::authorize('app.categories.edit');
        $category->update([
            'category_name_en'      => $request->category_name_en,
            'category_slug_en'      => Str::slug($request->category_name_en),
            'category_name_bn'      => $request->category_name_bn,
            'category_slug_bn'      => Str::slug($request->category_name_bn),
            'status'             => $request->filled('status'),
        ]);
        $file                    = $request->hasFile('image');
        if ($file) {
            if (file_exists($category->image)) {
                unlink($category->image);
            }
            $category->image = $this->uploadeImage($request);
        }
        $category->save();
        toastr()->success('Category update successfully');
        return redirect()->route('app.categories.index');
    }


    public function destroy(Category $category)
    {
        Gate::authorize('app.categories.destroy');
        if (file_exists($category->image)) {
            unlink($category->image);
        }
        $category->delete();
        toastr()->success('Category deleted successfully');
        return redirect()->route('app.categories.index');
    }
    //Image intervetion
    protected function uploadeImage($request)
    {
        $file           = $request->file("image");
        $get_imageName  =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $directory      = 'images/categories/';
        $imageUrl       = $directory . $get_imageName;
        Image::make($file)->resize(600, 400)->save($imageUrl);
        return $imageUrl;
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class SubCategoryController extends Controller
{
    public function index()
    {
        Gate::authorize('app.categories.index');
        $subcategories = SubCategory::with('category')->latest()->get();
        return view('backend.subcategories.index', compact('subcategories'));
    }


    public function create()
    {
        Gate::authorize('app.categories.create');
        $categories=Category::all();
        return view('backend.subcategories.form',compact('categories'));
    }


    public function store(Request $request)
    {
        // return $request;
        Gate::authorize('app.categories.create');
        $this->validate($request, [
            'subcategory_name_en'    => 'required|string|unique:sub_categories,subcategory_name_en',
            'subcategory_name_bn'    => 'required|string|unique:sub_categories,subcategory_name_bn',
            'image'                  => 'nullable|image|mimes:jpg,png,jpeg,svg',
            'category_id'            => 'required',
        ]);
        SubCategory::create([
            'category_id'            => $request->category_id,
            'subcategory_name_en'    => $request->subcategory_name_en,
            'subcategory_slug_en'    => Str::slug($request->subcategory_name_en),
            'subcategory_name_bn'    => $request->subcategory_name_bn,
            'subcategory_slug_bn'    => Str::slug($request->subcategory_name_bn),
            'status'                 => $request->filled('status'),
        ]);
        toastr()->success('SubCategory added successfully');
        return redirect()->route('app.subcategories.index');
    }


    public function edit(SubCategory $subcategory)
    {
        Gate::authorize('app.categories.edit');
        $categories=Category::all();
        return view('backend.subcategories.form', compact('subcategory','categories'));
    }



    public function update(Request $request, SubCategory $subcategory)
    {
        Gate::authorize('app.categories.edit');
        $this->validate($request, [
            'subcategory_name_en'    => 'required|string|unique:sub_categories,subcategory_name_en,'.$subcategory->id,
            'subcategory_name_bn'    => 'required|string|unique:sub_categories,subcategory_name_bn,'.$subcategory->id,
            'image'                  => 'nullable|image|mimes:jpg,png,jpeg,svg',
            'category_id'            => 'required',
        ]);
        $subcategory->update([
            'category_id'             => $request->category_id,
            'subcategory_name_en'     => $request->subcategory_name_en,
            'subcategory_slug_en'     => Str::slug($request->subcategory_name_en),
            'subcategory_name_bn'     => $request->subcategory_name_bn,
            'subcategory_slug_bn'     => Str::slug($request->subcategory_name_bn),
            'status'                  => $request->filled('status'),
        ]);
;
        toastr()->success('SubCategory update successfully');
        return redirect()->route('app.subcategories.index');
    }


    public function destroy(SubCategory $subcategory)
    {
        Gate::authorize('app.categories.destroy');
        $subcategory->delete();
        toastr()->success('SubCategory deleted successfully');
        return redirect()->route('app.subcategories.index');
    }
}

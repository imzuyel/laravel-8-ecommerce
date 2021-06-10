<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class SubSubcategoryController extends Controller
{
    public function index()
    {
        Gate::authorize('app.categories.index');
        $subsubcategories = SubSubCategory::with('category', 'subcategory')->latest()->get();
        return view('backend.subsubcategories.index', compact('subsubcategories'));
    }


    public function create()
    {
        Gate::authorize('app.categories.create');
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('backend.subsubcategories.form', compact('categories', 'subcategories'));
    }


    public function store(Request $request)
    {
        // return $request;
        Gate::authorize('app.categories.create');
        $this->validate($request, [
            'subsubcategory_name_en'    => 'required|string|unique:sub_sub_categories,subsubcategory_name_en',
            'subsubcategory_name_bn'    => 'required|string|unique:sub_sub_categories,subsubcategory_name_bn',
            'category_id'               => 'required',
        ]);
        SubSubCategory::create([
            'category_id'               => $request->category_id,
            'subcategory_id'            => $request->subcategory_id,
            'subsubcategory_name_en'    => $request->subsubcategory_name_en,
            'subsubcategory_slug_en'    => Str::slug($request->subsubcategory_name_en),
            'subsubcategory_name_bn'    => $request->subsubcategory_name_bn,
            'subsubcategory_slug_bn'    => Str::slug($request->subsubcategory_name_bn),
            'status'                    => $request->filled('status'),
        ]);
        toastr()->success('Subsubcategory added successfully');
        return redirect()->route('app.subsubcategories.index');
    }


    public function edit(Subsubcategory $subsubcategory)
    {
        Gate::authorize('app.categories.edit');
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('backend.subsubcategories.form', compact('categories', 'subcategories', 'subsubcategory'));
    }



    public function update(Request $request, SubSubCategory $subsubcategory)
    {
        Gate::authorize('app.categories.edit');
        $this->validate($request, [
            'subsubcategory_name_en'    => 'required|string|unique:sub_sub_categories,subsubcategory_name_en,' . $subsubcategory->id,
            'subsubcategory_name_bn'    => 'required|string|unique:sub_sub_categories,subsubcategory_name_bn,' . $subsubcategory->id,
            'image'                     => 'nullable|image|mimes:jpg,png,jpeg,svg',
            'category_id'               => 'required',
        ]);
        $subsubcategory->update([
            'category_id'               => $request->category_id,
            'subcategory_id'            => $request->subcategory_id,
            'subsubcategory_name_en'    => $request->subsubcategory_name_en,
            'subsubcategory_slug_en'    => Str::slug($request->subsubcategory_name_en),
            'subsubcategory_name_bn'    => $request->subsubcategory_name_bn,
            'subsubcategory_slug_bn'    => Str::slug($request->subsubcategory_name_bn),
            'status'                    => $request->filled('status'),
        ]);;
        toastr()->success('Subsubcategory update successfully');
        return redirect()->route('app.subsubcategories.index');
    }


    public function destroy(SubSubCategory $subsubcategory)
    {
        Gate::authorize('app.categories.destroy');
        $subsubcategory->delete();
        toastr()->success('subsubcategory deleted successfully');
        return redirect()->route('app.subcategories.index');
    }

    public function category(Request $request)
    {
        if ($request->ajax()) {
            $categorywithSubcategory = Category::where('id', $request->category_id)->with(['subcategories'])->first();
            return view('backend.subsubcategories.include', compact('categorywithSubcategory'));
        }
    }
}

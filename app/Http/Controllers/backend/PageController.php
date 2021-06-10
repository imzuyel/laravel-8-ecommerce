<?php

namespace App\Http\Controllers\backend;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;

class PageController extends Controller
{

    public function index()
    {
        Gate::authorize('app.pages.index');
        $pages   = Page::latest('id')->get();
        return view('backend.pages.index', compact('pages'));
    }

    public function show(Page $page)
    {
        return $page;
    }
    public function create()
    {
        Gate::authorize('app.pages.create');
        return view('backend.pages.form');
    }


    public function store(Request $request)
    {
        Gate::authorize('app.pages.create');
        $this->validate($request, [
            'title'             => 'required|string|unique:pages',
            'excerpt'           => 'required',
            'body'              => 'required',
            'meta_description'  => 'string',
            'meta_keywords.*'   => 'string',
            'image'             => 'nullable|image|mimes:jpg,png,jpeg,svg',
        ]);
        $page   = Page::create([
            'title'             => $request->title,
            'slug'              => Str::slug($request->title),
            'excerpt'           => $request->excerpt,
            'body'              => $request->body,
            'meta_description'  => $request->meta_description,
            'meta_keywords'     => $request->meta_keywords,
            'status'            => $request->filled('status'),
        ]);
        $file = $request->hasFile('image');
        if ($file) {
            $page->image        = $this->uploadeImage($request);
            $page->save();
        }
        toastr()->success('Page Successfully Added.', 'Added');
        return redirect()->route('app.pages.index');
    }


    public function edit(Page $page)
    {
        Gate::authorize('app.pages.edit');
        return view('backend.pages.form', compact('page'));
    }


    public function update(Request $request, Page $page)
    {
        Gate::authorize('app.pages.edit');
        $this->validate($request, [
            'title'             => 'required|string|unique:pages,title,' . $page->id,
            'excerpt'           => 'required',
            'body'              => 'required',
            'meta_description'  => 'string',
            'meta_keywords.*'   => 'string',
            'image'             => 'nullable|image|mimes:jpg,png,jpeg,svg',
        ]);
        $page->update([
            'title'             => $request->title,
            'slug'              => Str::slug($request->title),
            'excerpt'           => $request->excerpt,
            'body'              => $request->body,
            'meta_description'  => $request->meta_description,
            'meta_keywords'     => $request->meta_keywords,
            'status'            => $request->filled('status'),
        ]);
        // upload images
        $file                   = $request->hasFile('image');
        if ($file) {
            if (file_exists($page->image)) {
                unlink($page->image);
            }
            $page->image        = $this->uploadeImage($request);
            $page->save();
        }
        toastr()->success('Page Successfully Update.', 'Updated');
        return redirect()->route('app.pages.index');
    }


    public function destroy(Page $page)
    {
        $page->delete();
        toastr()->success('Page Successfully Deleted.', 'Deleted');
        return back();
    }
    //Image intervetion
    protected function uploadeImage($request)
    {
        $file           = $request->file("image");
        $get_imageName  =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $directory      = 'images/pages/';
        $imageUrl       = $directory . $get_imageName;
        Image::make($file)->resize(700, 400)->save($imageUrl);
        return $imageUrl;
    }
}

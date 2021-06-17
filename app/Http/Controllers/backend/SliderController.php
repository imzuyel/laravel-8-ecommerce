<?php

namespace App\Http\Controllers\backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{

    public function index()
    {
        Gate::authorize('app.sliders.index');
        $sliders = Slider::latest('id')->get();
        return view('backend.slider.index', compact('sliders'));
    }

    public function create()
    {
        Gate::authorize('app.sliders.create');
        return view('backend.slider.form');
    }


    public function store(Request $request)
    {
        Gate::authorize('app.sliders.create');
        $this->validate($request, [
            'title_en'          => 'required|string|unique:sliders,title_en',
            'title_bn'          => 'required|string|unique:sliders,title_bn',
            'slider_img'        => 'required|image|mimes:jpg,png,jpeg,svg',
        ]);
        $slider = Slider::create([
            'title_en'          => $request->title_en,
            'title_bn'          => $request->title_bn,
            'description_en'    => $request->description_en,
            'description_bn'    => $request->description_bn,
            'status'            => $request->filled('status'),
            'slider_img'        => $this->uploadeImage($request)
        ]);

        $slider->save();
        toastr()->success('Slider added successfully');
        return redirect()->route('app.sliders.index');
    }


    public function show(Slider $slider)
    {
        //
    }


    public function edit(Slider $slider)
    {
        Gate::authorize('app.sliders.edit');
        return view('backend.slider.form', compact('slider'));
    }


    public function update(Request $request, Slider $slider)
    {
        Gate::authorize('app.sliders.edit');
        $slider->update([
            'title_en'          => $request->title_en,
            'title_bn'          => $request->title_bn,
            'description_en'    => $request->description_en,
            'description_bn'    => $request->description_bn,
            'status'            => $request->filled('status'),
        ]);
        $file                   = $request->hasFile('slider_img');
        if ($file) {
            if (file_exists($slider->slider_img)) {
                unlink($slider->slider_img);
            }
            $slider->slider_img = $this->uploadeImage($request);
        }
        $slider->save();
        toastr()->success('Slider update successfully');
        return redirect()->route('app.sliders.index');
    }


    public function destroy(Slider $slider)
    {
        Gate::authorize('app.sliders.destroy');

            if (file_exists($slider->slider_img)) {
                unlink($slider->slider_img);
            }
            $slider->delete();
            toastr()->success('Slider deleted successfully');
            return redirect()->route('app.sliders.index');

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
             Slider::where('id', $data['slider_id'])->update(['status' => $status]);
             return response()->json(['status' => $status, 'slider_id' => $data['slider_id']]);
         }
     }

    //Image intervetion
    protected function uploadeImage($request)
    {
        $file           = $request->file("slider_img");
        $get_imageName  =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $directory      = 'images/sliders/';
        $imageUrl       = $directory . $get_imageName;
        Image::make($file)->resize(1295, 555)->save($imageUrl);
        return $imageUrl;
    }
}

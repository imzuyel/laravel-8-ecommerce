<?php

namespace App\Http\Controllers\backend;

use App\Models\Zilla;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZillaController extends Controller
{

    public function index()
    {
        $zillas=Zilla::with('division')->inRandomOrder()->get();
        return view('backend.place.zilla.index',compact("zillas"));
    }

    public function create()
    {
        $title              ='Add zilla';
        $divisions          =Division::all();
        return view('backend.place.zilla.add_edit',compact('title','divisions'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'division_id'   =>'required',
            'name'          =>'required|string|unique:zillas',
        ]);
        $zilla              =new Zilla();
        $zilla->division_id =$request->division_id;
        $zilla->name        =$request->name;
        $zilla->save();
        toastr()->success('Zilla added Succesfully !');
        return redirect()->back();
    }


    public function edit(Zilla $zilla)
    {
        $title              ='Edit zilla';
        $divisions          =Division::all();
        return view('backend.place.zilla.add_edit',compact('title','zilla','divisions'));

    }


    public function update(Request $request, Zilla $zilla)
    {
        $this->validate($request,[
            'division_id'   =>'required',
            'name'          =>'required|string|unique:zillas,name,'.$zilla->id,
        ]);
        $zilla->division_id =$request->division_id;
        $zilla->name        =$request->name;
        $zilla->save();
        toastr()->success('Zilla updated Succesfully !');
        return redirect()->route('app.zilla.index');
    }


    public function destroy(Zilla $zilla)
    {
        $zilla->delete();
        toastr()->success('Zilla deleted Succesfully !');
        return back();
    }
}

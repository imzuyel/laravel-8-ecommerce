<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{

    public function index()
    {
        $divisions=Division::with('zillas')->get();
        return view('backend.place.division.index',compact("divisions"));
    }


    public function create()
    {
      $title='Add division';
      return view('backend.place.division.add_edit',compact('title'));
    }


    public function store(Request $request)
    {
       $this->validate($request,[
           'name'=>'required|string|unique:divisions',
       ]);
       $division=new Division();
       $division->name=$request->name;
       $division->save();
       toastr()->success('Division added Succesfully !');
       return redirect()->route('app.division.index');
    }

    public function edit(Division $division)
    {
        $title='Edit division';
        return view('backend.place.division.add_edit',compact('title','division'));
    }


    public function update(Request $request, Division $division)
    {
        $this->validate($request,[
            'name'=>'required|string|unique:divisions,name,'.$division->id,
        ]);
        $division->name=$request->name;
        $division->save();
        toastr()->success('Division updated Succesfully !');
        return redirect()->route('app.division.index');
    }


    public function destroy(Division $division)
    {
        $division->delete();
        toastr()->success('Division deleted Succesfully !');
        return back();
    }


}

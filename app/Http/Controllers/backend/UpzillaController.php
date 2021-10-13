<?php

namespace App\Http\Controllers\backend;

use App\Models\Zilla;
use App\Models\Upzilla;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpzillaController extends Controller
{

    public function index()
    {
        $upzillas       =Upzilla::with('division')->inRandomOrder()->get();
        return view('backend.place.upzilla.index',compact("upzillas"));
    }


    public function create()
    {
        $title          ='Add upzilla';
        $divisions      =Division::all();
        return view('backend.place.upzilla.add_edit',compact('title','divisions'));
    }


    public function store(Request $request)
    {

        $this->validate($request,[
            'division_id'=>'required',
            'name'=>'required|string|unique:upzillas',
        ]);
        $upzilla        =new Upzilla();
        $upzilla->division_id=$request->division_id;
        $upzilla->zilla_id=$request->zilla_id;
        $upzilla->name=$request->name;
        $upzilla->save();
        toastr()->success('Upzilla added Succesfully !');
        return redirect()->back();
    }



    public function edit(Upzilla $upzilla)
    {
        $title      ='Edit upzilla';
        $divisions  =Division::all();
        $zillas=Zilla::all();
        return view('backend.place.upzilla.add_edit',compact('title','upzilla','divisions','zillas'));
    }

    public function update(Request $request, Upzilla $upzilla)
    {
        $this->validate($request,[
            'division_id'   =>'required',
            'name'          =>'required|string|unique:upzillas,name,'.$upzilla->id,
        ]);
        $upzilla->division_id=$request->division_id;
        $upzilla->zilla_id=$request->zilla_id;
        $upzilla->name=$request->name;
        $upzilla->save();
        toastr()->success('Upzilla updated Succesfully !');
        return redirect()->route('app.upzilla.index');
    }

    public function destroy(Upzilla $upzilla)
    {
        $upzilla->delete();
        toastr()->success('Upzilla deleted Succesfully !');
        return back();
    }

      public function zillas(Request $request)
      {
          if ($request->ajax()) {
              $divisionwisezilla = Division::where('id', $request->division_id)->with(['zillas'])->first();
              return view('backend.place.upzilla.zillas', compact('divisionwisezilla'));
          }
      }
}

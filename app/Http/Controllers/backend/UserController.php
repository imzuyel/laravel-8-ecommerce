<?php

namespace App\Http\Controllers\backend;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    public function index()
    {
        Gate::authorize('app.users.index');
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    public function create()
    {
        Gate::authorize('app.users.create');
        $roles = Role::all();
        return view('backend.users.form', compact('roles'));
    }

    public function store(Request $request)
    {

        Gate::authorize('app.users.create');
        $this->validate($request, [
            'name'                  => 'required|string',
            'email'                 => 'required|email|unique:users',
            'password'              => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'image'                 => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $user_id =  User::create([
            'role_id'               => $request->role_id,
            'name'                  => $request->name,
            'email'                 => $request->email,
            'password'              => Hash::make($request->password),
            'status'                => $request->filled('status'),
        ])->id;
        $file = $request->hasFile('image');
        if ($file) {
            $user                   = User::findOrFail($user_id);
            $user->image            = $this->uploadeImage($request);
            $user->save();
        }

        toastr()->success('User  added successfully');
        return redirect()->route('app.users.index');
    }


    public function edit(User $user)
    {
        Gate::authorize('app.users.edit');
        $roles = Role::all();
        return view('backend.users.form', compact('roles', 'user'));
    }


    public function update(Request $request, User $user)
    {
        Gate::authorize('app.users.edit');
        $this->validate($request, [
            'name'              => 'required|string',
            'email'             => 'required|email|unique:users,email,' . $user->id,
            'current_password'  => 'nullable',
            'password'          => 'nullable',
            'image'             => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $user->update([
            'role_id'           => $request->role_id,
            'name'              => $request->name,
            'email'             => $request->email,
            'status'            => $request->filled('status'),
        ]);
        if (isset($request->password)) {
        }
        if (isset($request->current_password) && !Hash::check($request->current_password, $user->password)) {
            toastr()->error('The provided password does not match your current password', 'error');
            return back();
        }
        if (isset($request->current_password) && Hash::check($request->current_password, $user->password)) {
            $user->password     = Hash::make($request->password);
            if ($user->id       == Auth::user()->id) {
                Auth::logout();
            }
        }
        $file = $request->hasFile('image');
        if ($file) {
            if (file_exists($user->image)) {
                unlink($user->image);
            }
            $user->image = $this->uploadeImage($request);
        }
        $user->save();
        toastr()->success('User updated successfully', 'success');
        return redirect()->route('app.users.index');
    }

    public function destroy(User $user)
    {
        Gate::authorize('app.users.destroy');
        if (file_exists($user->image)) {
            unlink($user->image);
        }
        $user->delete();
        toastr()->success('User deleted successfully', 'success');
        return redirect()->route('app.users.index');
    }
    //Image intervetion
    protected function uploadeImage($request)
    {
        $file           = $request->file("image");
        $get_imageName  =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $directory      = 'images/users/';
        $imageUrl       = $directory . $get_imageName;
        Image::make($file)->resize(450, 400)->save($imageUrl);
        return $imageUrl;
    }
}

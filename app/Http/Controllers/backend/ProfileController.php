<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        Gate::authorize('app.profile.update');
        return view('backend.profile.index');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'name'                  => 'required|string',
            'email'                 => 'required|email|unique:users,email,' . $user->id,
            'image'                 => 'nullable|image|mimes:jpg,png,jpeg,svg',
        ]);
        $user->name                 = $request->name;
        $user->email                = $request->email;
        $file                       = $request->hasFile('image');
        if ($file) {
            if (file_exists($user->image)) {
                unlink($user->image);
            }
            $user->image = $this->uploadeImage($request);
        }
        $user->save();
        toastr()->success('User data updated successfully!', 'success');
        return back();
    }
    public function changePassword()
    {
        Gate::authorize('app.profile.password');
        return view('backend.profile.security');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'current_password'      => 'required',
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required',
            'image'                 => 'nullable|image|mimes:jpg,png,jpeg,svg',
        ]);
        $hashedPassword = $user->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                $user->update([
                    'password'      => Hash::make($request->password)
                ]);
                Auth::logout();
                toastr()->success('Password Successfully Changed.', 'success');
                return redirect()->route('login');
            } else {
                toastr()->error('New password cannot be the same as old password.', 'error');
            }
        } else {
            toastr()->error('Current password not match.', 'error');
        }
        return redirect()->back();
    }


    //Image intervetion
    protected function uploadeImage($request)
    {
        $file           = $request->file("image");
        $get_imageName  =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $directory      = 'images/pfofile/';
        $imageUrl       = $directory . $get_imageName;
        Image::make($file)->resize(450, 400)->save($imageUrl);
        return $imageUrl;
    }
}

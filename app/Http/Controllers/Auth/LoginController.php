<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo;

    public function authenticated()
    {
        if (auth()->user()->role->id == 1 || auth()->user()->role->id == 2) {
            return redirect('/app/dashboard');
        } elseif (auth()->user()->role->id == 3) {
            return redirect('/user/dashboard');
        } else {
            return redirect('/');
        }
    }

    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }

    //Socialite
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function redirectToProviderCallback($provider)
    {
        $user                       = Socialite::driver($provider)->user();
        $existingUser               = User::whereEmail($user->getEmail())->first();
        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            // Create new user.
            $newUser = User::create([
                'role_id'           => Role::where('slug', 'user')->first()->id,
                'name'              => $user->getName(),
                'email'             => $user->getEmail(),
                'status'            => true,
                'password'          => 'password'
            ]);
            if ($user->getAvatar()) {
                $path = $user->getAvatar();
                $filename_from_url = parse_url($path);
                $ext = pathinfo($filename_from_url['path'], PATHINFO_EXTENSION);
                // $filename = basename($path);
                $get_imageName      =  date('mdYHis') . uniqid() . $ext;
                $directory          = 'images/users/';
                $imageUrl           = $directory . $get_imageName;
                Image::make($path)->save($imageUrl);
                $newUser->image     = $imageUrl;
                $newUser->save();
            }
            Auth::login($newUser);
        }
        toastr()->success('You have successfully logged in with ' . ucfirst($provider) . '!', 'Success');
        return redirect($this->redirectPath());
    }


}

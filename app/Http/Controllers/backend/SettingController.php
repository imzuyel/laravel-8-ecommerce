<?php

namespace App\Http\Controllers\backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{


    public function index()
    {
        Gate::authorize('app.settings.general');
        return view('backend.settings.general');
    }


    public function update(Request $request)
    {
        Gate::authorize('app.settings.general');
        $this->validate($request, [
            'site_title'        => 'required|string|min:2:max:100',
            'site_description'  => 'nullable',
            'site_address'      => 'nullable',
        ]);

        Setting::updateOrCreate(['name' => 'site_title'], ['value' => $request->get('site_title')]);
        Setting::updateOrCreate(['name' => 'site_description'], ['value' => $request->get('site_description')]);
        Setting::updateOrCreate(['name' => 'site_address'], ['value' => $request->get('site_address')]);
        // Update .env APP_NAME settings
        Artisan::call("env:set APP_NAME='" . $request->site_title . "'");
        toastr()->success('Settings Successfully Updated.', 'Success');
        return back();
    }


    public function appearance()
    {
        Gate::authorize('app.settings.appearance');
        return view('backend.settings.appearance');
    }


    public function updateAppearance(Request $request)
    {
        Gate::authorize('app.settings.appearance');
        $this->validate($request, [
            'site_logo'     => 'nullable|image|mimes:jpg,png,jpeg,svg',
            'site_favicon'  => 'nullable|image|mimes:jpg,png,jpeg,svg',
        ]);
        if ($request->hasFile('site_logo')) {
            if (file_exists(setting('site_logo'))) {
                unlink(setting('site_logo'));
            }
            Setting::updateOrCreate(
                [
                    'name'  => 'site_logo',
                ],
                [
                    'value' => $this->uploadeImage($request),
                ]
            );
        }
        if ($request->hasFile('site_favicon')) {
            if (file_exists(setting('site_favicon'))) {
                unlink(setting('site_favicon'));
            }
            Setting::updateOrCreate(
                [
                    'name'  => 'site_favicon',
                ],
                [
                    'value' => $this->uploadeImage1($request),
                ]
            );
        }
        toastr()->success('Settings Successfully Updated.', 'Success');
        return back();
    }

    public function mail()
    {
        Gate::authorize('app.settings.mail');
        return view('backend.settings.mail');
    }
    public function updateMailSettings(Request $request)
    {

        Gate::authorize('app.settings.mail');
        $this->validate($request, [
            'mail_mailer'               => 'nullable|min:4|max:10|string',
            'mail_host'                 => 'nullable|string',
            'mail_port'                 => 'nullable|digits_between:1,10||min:4|max:10',
            'mail_username'             => 'nullable|string',
            'mail_password'             => 'nullable|string',
            'mail_encryption'           => 'nullable|string',
            'mail_from_address'         => 'nullable|regex:/(.+)@(.+)\.(.+)/i',
            'mail_from_name'            => 'nullable|string',
        ]);
        Setting::updateOrCreate(['name' => 'mail_mailer'], ['value' => $request->get('mail_mailer')]);
        Setting::updateOrCreate(['name' => 'mail_host'], ['value' => $request->get('mail_host')]);
        Setting::updateOrCreate(['name' => 'mail_port'], ['value' => $request->get('mail_port')]);
        Setting::updateOrCreate(['name' => 'mail_username'], ['value' => $request->get('mail_username')]);
        Setting::updateOrCreate(['name' => 'mail_password'], ['value' => $request->get('mail_password')]);
        Setting::updateOrCreate(['name' => 'mail_encryption'], ['value' => $request->get('mail_encryption')]);
        Setting::updateOrCreate(['name' => 'mail_from_address'], ['value' => $request->get('mail_from_address')]);
        Setting::updateOrCreate(['name' => 'mail_from_name'], ['value' => $request->get('mail_from_name')]);

        // Update .env mail settings
        Artisan::call("env:set MAIL_MAILER='" . $request->mail_mailer . "'");
        Artisan::call("env:set MAIL_HOST='" . $request->mail_host . "'");
        Artisan::call("env:set MAIL_PORT='" . $request->mail_port . "'");
        Artisan::call("env:set MAIL_USERNAME='" . $request->mail_username . "'");
        Artisan::call("env:set MAIL_PASSWORD='" . $request->mail_password . "'");
        Artisan::call("env:set MAIL_ENCRYPTION='" . $request->mail_encryption . "'");
        Artisan::call("env:set MAIL_FROM_ADDRESS='" . $request->mail_from_address . "'");
        Artisan::call("env:set MAIL_FROM_NAME='" . $request->mail_from_name . "'");
        toastr()->success('Settings Successfully Updated.', 'Success');
        return back();
    }


    public function socialite()
    {
        Gate::authorize('app.settings.socialite');
        return view('backend.settings.socialite');
    }
    public function updateSocialiteSettings(Request $request)
    {
        Gate::authorize('app.settings.update');
        Setting::updateSettings($request->validated());
        // Update .env file
        Artisan::call("env:set FACEBOOK_CLIENT_ID='" . $request->facebook_client_id . "'");
        Artisan::call("env:set FACEBOOK_CLIENT_SECRET='" . $request->facebook_client_secret . "'");

        Artisan::call("env:set GOOGLE_CLIENT_ID='" . $request->google_client_id . "'");
        Artisan::call("env:set GOOGLE_CLIENT_SECRET='" . $request->google_client_secret . "'");

        Artisan::call("env:set GITHUB_CLIENT_ID='" . $request->github_client_id . "'");
        Artisan::call("env:set GITHUB_CLIENT_SECRET='" . $request->github_client_secret . "'");

        toastr()->success('Settings Successfully Updated.', 'Success');
        return back();
    }


    public function database()
    {
        Gate::authorize('app.settings.database');
        return view('backend.settings.database');
    }

    public function updateDatabaseSettings(Request $request)
    {
        Gate::authorize('app.settings.database');
        $this->validate($request, [
            'db_connection'             => 'required|string',
            'db_host'                   => 'required|string',
            'db_port'                   => 'required|digits_between:1,10|string|min:4|max:10',
            'db_database'               => 'required|string',
            'db_username'               => 'required|string',
            'db_password'               => 'required|string',

        ]);
        Setting::updateOrCreate(['name' => 'db_connection'], ['value' => $request->get('db_connection')]);
        Setting::updateOrCreate(['name' => 'db_host'], ['value' => $request->get('db_host')]);
        Setting::updateOrCreate(['name' => 'db_port'], ['value' => $request->get('db_port')]);
        Setting::updateOrCreate(['name' => 'db_database'], ['value' => $request->get('db_database')]);
        Setting::updateOrCreate(['name' => 'db_username'], ['value' => $request->get('db_username')]);
        Setting::updateOrCreate(['name' => 'db_password'], ['value' => $request->get('db_password')]);

        // Update .env mail settings
        Artisan::call("env:set DB_CONNECTION='" . $request->db_connection . "'");
        Artisan::call("env:set DB_HOST='" . $request->db_host . "'");
        Artisan::call("env:set DB_PORT='" . $request->db_port . "'");
        Artisan::call("env:set DB_DATABASE='" . $request->db_database . "'");
        Artisan::call("env:set DB_USERNAME='" . $request->db_username . "'");
        Artisan::call("env:set DB_PASSWORD='" . $request->db_password . "'");

        toastr()->success('Settings Successfully Updated.', 'Success');
        return back();
    }


    //Image intervetion
    protected function uploadeImage($request)
    {
        $file           = $request->file("site_logo");
        $get_imageName  =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $directory      = 'images/settings/logo/';
        $imageUrl       = $directory . $get_imageName;
        Image::make($file)->save($imageUrl);
        return $imageUrl;
    }

    protected function uploadeImage1($request)
    {
        $file           = $request->file("site_favicon");
        $get_imageName  =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $directory      = 'images/settings/favicon/';
        $imageUrl       = $directory . $get_imageName;
        Image::make($file)->save($imageUrl);
        return $imageUrl;
    }
}

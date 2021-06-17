<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function English()
    {
        session()->get('language');
        session()->forget('language');
        session()->put('language', 'english');
        return redirect()->back();
    }
    public function Bangla()
    {
        session()->get('language');
        session()->forget('language');
        session()->put('language', 'bangla');
        return redirect()->back();
    }
}

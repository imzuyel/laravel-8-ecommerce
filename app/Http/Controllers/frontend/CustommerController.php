<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustommerController extends Controller
{
    public function index()
    {
        return view('frontend.custommer.dashboard');
    }
    public function login()
    {
        return view('frontend.custommer.login');
    }
    public function register()
    {
        return view('frontend.custommer.register');
    }
}

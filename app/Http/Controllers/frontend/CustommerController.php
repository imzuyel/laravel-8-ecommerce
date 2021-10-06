<?php

namespace App\Http\Controllers\frontend;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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


    public function wishlistdata()
    {

            return view('frontend.custommer.wishlistdata');

    }
    public function wishlistdataget()
    {
        if (Auth::check()) {
            $wishQty                    = Wishlist::where('user_id', Auth::id())->count();
            $wishlists=Wishlist::with('product')->where('user_id', Auth::id())->latest()->get();
            return response()->json(array(
                'wishlists'               => $wishlists,
                'wishQty'                 => $wishQty,
            ));
        }

    }


    public function wishlist($product_id)
    {
        if (Auth::check()) {
            if (Wishlist::where('product_id', $product_id)->first()) {
                Wishlist::where('user_id', Auth::id())->where('product_id', $product_id)->delete();
                $is_true = "remove";
                return response()->json(['is_true' => $is_true]);
            } else {
                $wishlist = new Wishlist();
                $wishlist->user_id = Auth::id();
                $wishlist->product_id = $product_id;
                $wishlist->save();
                $is_true = "added";
                return response()->json(['is_true' => $is_true]);
            }
        } else {
            $is_true = "logout";
            return response()->json(['is_true' => $is_true]);
        }
    }
    public function RemoveWishlist($product_id)
    {
        Wishlist::where('user_id', Auth::id())->where('product_id', $product_id)->delete();
        return response()->json(['success' => 'Product Remove from Cart']);
    }

}

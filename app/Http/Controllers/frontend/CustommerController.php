<?php

namespace App\Http\Controllers\frontend;

use Carbon\Carbon;
use App\Models\Coupon;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

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
            $wishlists = Wishlist::with('product')->where('user_id', Auth::id())->latest()->get();
            return response()->json(array(
                'wishlists'               => $wishlists,
                'wishQty'                 => $wishQty,
            ));
        }
    }
    public function wishlist($product_id)
    {
        if (Auth::check()) {
            if (Wishlist::where(['product_id' => $product_id, 'user_id' => Auth::id()])->first()) {
                Wishlist::where('user_id', Auth::id())->where('product_id', $product_id)->delete();
                $is_true = "remove";
                return response()->json(['is_true' => $is_true]);
            } else {
                $wishlist               = new Wishlist();
                $wishlist->user_id      = Auth::id();
                $wishlist->product_id   = $product_id;
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
    public  function applyCoupon(Request $request)
    {
        $coupon1                        = $request->coupon;
        $coupon                         =  Coupon::where('coupon_name', $coupon1)->where('coupon_validity', '>=', Carbon::now()->format('Y-m-d'))->first();
        if (Cart::content()->count() == 0) {
            $is_true = "empty";
            return response()->json(['is_true' => $is_true]);
        } else {
            if ($coupon) {
                $is_true = "valid";
                Session::put('coupon', [
                    'coupon_name'       => $coupon->coupon_name,
                    'coupon_discount'   => $coupon->coupon_discount,
                    'discount_amount'   => round((str_replace(',', '', Cart::total()) * $coupon->coupon_discount) / 100),
                    'total_amount'      => round(str_replace(',', '', Cart::total()) - (str_replace(',', '', Cart::total()) * $coupon->coupon_discount) / 100)
                ]);
                return response()->json(['is_true' => $is_true]);
            } else {
                $is_true = "invalid";
                return response()->json(['is_true' => $is_true]);
            }
        }
    }
    public function calculateCoupon()
    {
        if (Session::has('coupon')) {
            return response()->json(array(
                'subtotal' => Cart::total(),
                'coupon_name' => session()->get('coupon')['coupon_name'],
                'coupon_discount' => session()->get('coupon')['coupon_discount'],
                'discount_amount' => session()->get('coupon')['discount_amount'],
                'total_amount' => session()->get('coupon')['total_amount'],
            ));
        } else {
            return response()->json(array(
                'total' => Cart::total(),
            ));
        }
    }
    public function couponRemove()
    {
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        return response()->json(array(
            'success' => "Coupon Remove successfully",
        ));
    }
}

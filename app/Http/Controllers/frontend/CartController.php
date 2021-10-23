<?php

namespace App\Http\Controllers\frontend;

use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function AddToCart(Request $request, $id)
    {
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        $product                            = Product::findOrFail($id);
        if ($product->product_qty < $request->quantity) {

            $product_qty                    = $product->product_qty;
            $is_true                        = true;
            return response()->json(['error' => 'Add less than ' . $product->product_qty, 'product_qty'                   => $product_qty, 'is_true' => $is_true]);
        }
        if ($product->discount == NULL) {
            Cart::add([
                'id'                        => $id,
                'name'                      => $product->product_name_en,
                'qty'                       => $request->quantity,
                'price'                     => $product->price,
                'weight'                    => 1,
                'options'                   => [
                    'image'                 => $product->image,
                    'color'                 => $request->color,
                    'size'                  => $request->size,
                    'name_bn'               => $product->product_name_bn,
                ],
            ]);
            return response()->json(['success' => 'Successfully Added on Your Cart']);
        } else {

            Cart::add([
                'id'                        => $id,
                'name'                      => $product->product_name_en,
                'qty'                       => $request->quantity,
                'price'                     => $product->price - (($product->discount * $product->price) / 100),
                'weight'                    => 1,
                'options'                   => [
                    'image'                 => $product->image,
                    'color'                 => $request->color,
                    'size'                  => $request->size,
                    'name_en'               => $product->product_name_en,
                    'name_bn'               => $product->product_name_bn,
                    'product_slug_en'       => $product->product_slug_en,
                    'product_slug_bn'       => $product->product_slug_bn,

                ],
            ]);
            return response()->json(['success' => 'Successfully Added on Your Cart']);
        }
    }
    public function content()
    {

        $carts                      = Cart::content();
        $cartQty                    = Cart::count();
        $cartTotal                  = Cart::total();
        return response()->json(array(
            'carts'                 => $carts,
            'cartQty'               => $cartQty,
            'cartTotal'             => $cartTotal,
        ));
    }
    public function RemoveMiniCart($rowId)
    {
        Cart::remove($rowId);
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        return response()->json(['success' => 'Product Remove from Cart']);
    }
    public function CartIncrement($rowId)
    {

        $row                        = Cart::get($rowId);
        $product                    = Product::find($row->id);
        if ($product->product_qty > $row->qty) {

            Cart::update($rowId, $row->qty + 1);
            if (Session::has('coupon')) {
                $coupon_name            = Session::get('coupon')['coupon_name'];
                $coupon                 = Coupon::where('coupon_name',$coupon_name)->first();
                Session::put('coupon', [
                    'coupon_name'       => $coupon->coupon_name,
                    'coupon_discount'   => $coupon->coupon_discount,
                    'discount_amount'   => round((str_replace(',', '', Cart::total()) * $coupon->coupon_discount) / 100),
                    'total_amount'      => round(str_replace(',', '', Cart::total()) - (str_replace(',', '', Cart::total()) * $coupon->coupon_discount) / 100)
                ]);
            }
            return response()->json('increment');
        } else {
            $is_true                = true;
            $product_qty            = $product->product_qty;
            return response()->json(['error' => 'Add less than ' . $product->product_qty, 'product_qty' => $product_qty, 'is_true' => $is_true]);
        }
    }
    public function CartDecrement($rowId)
    {
        $row                        = Cart::get($rowId);
        if ($row->qty == 1) {
            $is_true = true;
            return response()->json(['is_true' => $is_true]);
        } else {
            Cart::update($rowId, $row->qty - 1);
            if (Session::has('coupon')) {
                $coupon_name = Session::get('coupon')['coupon_name'];
                $coupon = Coupon::where('coupon_name',$coupon_name)->first();
                Session::put('coupon', [
                    'coupon_name'       => $coupon->coupon_name,
                    'coupon_discount'   => $coupon->coupon_discount,
                    'discount_amount'   => round((str_replace(',', '', Cart::total()) * $coupon->coupon_discount) / 100),
                    'total_amount'      => round(str_replace(',', '', Cart::total()) - (str_replace(',', '', Cart::total()) * $coupon->coupon_discount) / 100)
                ]);
            }
            return response()->json('Decrement');
        }
    }
    public function myCart()
    {
        return view('frontend.custommer.myCart');
    }
}

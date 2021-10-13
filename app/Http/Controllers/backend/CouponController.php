<?php

namespace App\Http\Controllers\backend;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class CouponController extends Controller
{

    public function index()
    {
        Gate::authorize('app.coupons.index');
        $coupons                    = Coupon::latest()->get();
        return view('backend.coupons.index', compact('coupons'));
    }


    public function create()
    {
        Gate::authorize('app.coupons.create');
        return view('backend.coupons.form');
    }


    public function store(Request $request)
    {
        Gate::authorize('app.coupons.create');
        $this->validate($request, [
            'coupon_name'           => 'required|string|unique:coupons,coupon_name',
            'coupon_discount'       => 'required|integer|between:1,10',
            'coupon_validity'       => 'required|date_format:Y-m-d',
        ]);
        $coupon = coupon::create([
            'coupon_name'           => $request->coupon_name,
            'coupon_discount'       => $request->coupon_discount,
            'coupon_validity'       => $request->coupon_validity,
            'status'                => $request->filled('status'),
        ]);
        toastr()->success('Coupon added successfully');
        return redirect()->route('app.coupons.index');
    }


    public function edit(Coupon $coupon)
    {
        Gate::authorize('app.coupons.edit');
        return view('backend.coupons.form', compact('coupon'));
    }



    public function update(Request $request, Coupon $coupon)
    {
        Gate::authorize('app.coupons.edit');
        $this->validate($request, [
            'coupon_name'           => 'required|string|unique:coupons,coupon_name,' . $coupon->id,
            'coupon_discount'       => 'required|integer|between:1,10',
            'coupon_validity'       => 'required|date_format:Y-m-d',
        ]);
        $coupon->update([
            'coupon_name'           => $request->coupon_name,
            'coupon_discount'       => $request->coupon_discount,
            'coupon_validity'       => $request->coupon_validity,
            'status'                => $request->filled('status'),
        ]);
        toastr()->success('Coupon update successfully');
        return redirect()->route('app.coupons.index');
    }


    public function destroy(coupon $coupon)
    {
        Gate::authorize('app.coupons.destroy');
        $coupon->delete();
        toastr()->success('Coupon deleted successfully');
        return redirect()->route('app.coupons.index');
    }
}

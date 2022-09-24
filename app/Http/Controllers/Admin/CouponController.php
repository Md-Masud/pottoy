<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function show_page_index()
    {
        return view('admin.coupon.index');
    }
    public function index()
    {
        $coupon = Coupon::all();
        return response()->json($coupon);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'coupon_code' => 'required',
            'valid_date' => 'required',
            'coupon_amount' => 'required'
        ]);
        $coupon = Coupon::create($request->all());
        return response()->json('Coupon Create Successfull ');
    }

    public function edit($id)
    {
        $coupon = Coupon::find($id);
        return response()->json($coupon);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'coupon_code' => 'required',
            'valid_date' => 'required',
        ]);
        $coupon = Coupon::find($id)->update($request->all());
        return response()->json('Coupon Update  Successfull');
    }
    public function destroy($id)
    {
        $coupon = Coupon::destroy($id);
        return response()->json('Coupon Delete  Successfull');
    }
    public function status($id)
    {
        $coupon = Coupon::find($id);
        if ($coupon->status == 1) {
            Coupon::find($id)->update([
                'status' => 0,
            ]);
        } else {
            Coupon::find($id)->update([
                'status' => 1,
            ]);
        }

        return response()->json('Coupon status  Successfull');
    }
}

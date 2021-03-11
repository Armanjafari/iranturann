<?php

namespace App\Http\Controllers\Coupons;

use App\Coupon;
use App\Http\Controllers\Controller;
use App\Support\Discount\Coupon\CouponValidator;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    private $validator;
    public function __construct(CouponValidator $validator)
    {
        $this->middleware('auth');
        $this->validator = $validator;
    }
    public function store(Request $request)
    {
            // validate coupon
        try {
            $request->validate([
                'coupon' => ['required','exists:coupons,code']
            ]);
            // can user use it
            // put coupon into session
            $coupon = Coupon::where('code', $request->coupon)->firstOrFail();
            $this->validator->isValid($coupon);
            session()->put(['coupon' => $coupon]);
            // redirect
            return redirect()->back()->withSuccess(' کد تخفیف اعمال شد ');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(' کد تخفیف نامعتبر می باشد ');
        }
    }
    public function remove()
    {
        session()->forget('coupon');
        return back()->withErrors(' کد تخفیف حذف شد ');
    }
}

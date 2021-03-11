<?php
namespace App\Support\Discount\Coupon\Validator;

use App\Coupon;
use App\Support\Discount\Coupon\Validator\Contracts\AbstractCouponValidator;

class CanUseIt extends AbstractCouponValidator
{
    public function valdiate(Coupon $valdiate)
    {
        dd('can use it class');
    }
}
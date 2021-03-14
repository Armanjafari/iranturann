<?php
namespace App\Support\Discount;

use App\Coupon;

class DiscountCalculator
{
    public function discountAmount(Coupon $coupon , int $amount)
    {
        $discountAmount = ($coupon->percent / 100) * $amount;
        return $this->isExceeded($discountAmount , $coupon->limit) ?
        $coupon->limit :
        $discountAmount;
    }
    private function isExceeded(int $amount , int $limit)
    {
        return $amount > $limit;
    }
    public function discountedPrice(Coupon $coupon , int $amount)
    {
        return $amount - $this->discountAmount($coupon , $amount);

    }
}
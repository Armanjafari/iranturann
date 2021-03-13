<?php

namespace App\Support\Discount\Coupon\Traits;

use App\Coupon;

trait Couponable
{
    public function coupons()
    {
        return $this->morphMany(Coupon::class , 'couponable');
    }
}
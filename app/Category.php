<?php

namespace App;

use App\Support\Discount\Coupon\Traits\Couponable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Couponable;
    public function products()
        {
            return $this->hasMany(Product::class);
        }
}

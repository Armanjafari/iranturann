<?php

namespace App;

use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;
use App\Support\Discount\DiscountCalculator;
use App\Support\Pivot\PivotProductAttribute;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use EagerLoadPivotTrait;
    // protected $hidden = ['category'];
    public function hasStock(int $quantity)
    {
        return $this->stock >= $quantity;
    }
    public function decrementStock($count)
    {
        return $this->decrement('stock' , $count);
    }
    // public function getPriceAttribute($price)
    // {
    //     $coupons = $this->category->validCoupons();
    //     if($coupons->isNotEmpty())
    //     {
    //         $discountCalculator = resolve(DiscountCalculator::class); 
    //         return $discountCalculator->discountedPrice($coupons->first(), $price );
    //     }
    //     return $price;
    // }
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->using(PivotProductAttribute::class)->withPivot(['value_id']);
    }
    public function pure()
    {
        return $this->belongsTo(Pure::class);
    }
    public function options()
    {
        return $this->hasMany(OptionValue::class);
    }
}

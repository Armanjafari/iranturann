<?php

namespace App;

use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;
use App\Support\Discount\DiscountCalculator;
use App\Support\Pivot\PivotProductAttribute;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['pure_id' , 'market_id'];
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

    public function pure()
    {
        return $this->belongsTo(Pure::class);
    }
    public function options()
    {
        return $this->hasMany(Full::class);
    }
}

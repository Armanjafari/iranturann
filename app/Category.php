<?php

namespace App;

use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;
use App\Support\Discount\Coupon\Traits\Couponable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Couponable ;
    protected $fillable = ['name', 'persian_name' , 'parent_id'];
    protected $hidden = ['coupons'];
    public function products()
    {
        return $this->hasMany(Pure::class);
    }
    public function child()
    {
        return $this->hasMany(Category::class , 'parent_id', 'id');
    }
    public function markets()
    {
        return $this->belongsToMany(Market::class)->withPivot('market');
    }
    // public function marketProduct()
    // {
    //     return $this->hasMany(Product::class);
    // }
}

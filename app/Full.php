<?php

namespace App;

use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;
use Illuminate\Database\Eloquent\Model;

class Full extends Model
{
    protected $fillable = ['stock' , 'price' ,'waranty_id' , 'color_id' , 'product_id'];
    public function colors()
    {
        return $this->belongsTo(Color::class , 'color_id' , 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    // TODO check this it maybe go wrong
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
    public function waranty()
    {
        return $this->belongsTo(Waranty::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity','market_id','price');
    }
}

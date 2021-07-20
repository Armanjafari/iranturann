<?php

namespace App;

use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;
use App\Services\ProductFiltering\FilteringByMarket;
use App\Support\Pivot\PivotOrderMarket;
use Illuminate\Database\Eloquent\Model;

class Full extends Model
{
    use FilteringByMarket;

    protected $fillable = [
        'stock',
        'views',
        'price',
        'show_price',
        'waranty_id',
        'color_id',
        'product_id',
        'ordering',
        'is_active',
];
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
        return $this->belongsToMany(Order::class)->using(PivotOrderMarket::class)->withPivot(['quantity','market_id','price','status' ,'category_id']);
    }
    public function percentage()
    {
        return 100 - (int)($this->price*100 / $this->show_price) ; 
    }
}

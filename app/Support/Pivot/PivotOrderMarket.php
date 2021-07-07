<?php

namespace App\Support\Pivot;

use App\Category;
use App\Full;
use App\Market;
use App\Order;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PivotOrderMarket extends Pivot
{
    public function market()
    {
        return $this->belongsTo(Market::class, 'market_id' , 'id');
    }
    public function  orders()
    {
        return $this->belongsTo(Order::class, 'order_id' , 'id');
    }
    public function full()
    {
        return $this->belongsTo(Full::class , 'full_id' , 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id' , 'id');
    }
}
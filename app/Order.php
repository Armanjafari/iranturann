<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Order extends Model
{
    protected $fillable = ['user_id', 'code','amount'];
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Order extends Model
{
    protected $fillable = ['user_id', 'code','amount'];
    public function products()
    {
        return $this->belongsToMany(Full::class)->withPivot('quantity');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
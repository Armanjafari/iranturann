<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['order_id' , 'gateway' , 'status' , 'amount' , 'method' , 'ref_num'];
    protected $attributes = ['status' => 0];
    public function isOnline()
    {
        return $this->method == 'online';
    }
    public function confirm(string $refNum , string $gateway = null)
    {
        $this->ref_num = $refNum;
        $this->gateway = $gateway;
        $this->status  = 1;
        $this->save();
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

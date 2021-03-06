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

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = ['market_name', 'slug' , 'bank_number', 'shaba_number','instagram', 'type' ,'user_id', 'agent_id' , 'center_id'];
}

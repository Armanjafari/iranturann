<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shiping extends Model
{
    protected $fillable = ['address','work_address','psotal_code','work_phone','city_id','user_id'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pre extends Model
{
    protected $fillable = [
        'address',
        'senf',
        'city',
        'mobile',
    ];
}

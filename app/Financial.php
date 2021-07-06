<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    protected $fillable = ['serial' , 'price' ,'market_id'];
    

    public function market()
    {
        return $this->belongsTo(Market::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class , 'imageable');
    }
}

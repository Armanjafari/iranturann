<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $fillable = ['name', 'city_id', 'address' , 'phone_number'];
    public function users()
    {
        // TODO fix this name
        
        return $this->hasMany(Market::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class , 'imageable');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['work_phone' , 'work_address' , 'postal_code', 'city_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class , 'imageable');
    }
}

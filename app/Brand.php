<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'persian_name'];

    public function image()
    {
        return $this->morphOne(Image::class , 'imageable');
    }
}

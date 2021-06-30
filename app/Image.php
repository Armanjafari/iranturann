<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['address' , 'imageable_type' , 'imageable_id' , 'type'];
    
}

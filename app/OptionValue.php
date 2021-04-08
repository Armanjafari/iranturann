<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    public function Colors()
    {
        return $this->belongsTo(Color::class , 'color_id' , 'id');
    }
}

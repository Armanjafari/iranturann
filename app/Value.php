<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function values()
    {
        return $this->belongsToMany(Value::class);
    }
}

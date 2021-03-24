<?php

namespace App\Support\Pivot;

use App\Product;
use App\Value;
use Attribute;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PivotProductAttribute extends Pivot
{
    public function values()
    {
        return $this->belongsTo(Value::class , 'value_id' , 'id');
    }
    
}
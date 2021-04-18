<?php

namespace App\Support\Pivot;

use App\Product;
use App\Pure;
use App\Value;
use Attribute;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PivotProductAttribute extends Pivot
{
    public function values()
    {
        return $this->belongsTo(Value::class , 'value_id' , 'id');
    }
    public function attribute()
    {
        return $this->belongsTo(Attribute::class , 'attribute_id' , 'id');
    }
    public function product()
    {
        return $this->belongsTo(Pure::class , 'pure_id' , 'id');
    }
}
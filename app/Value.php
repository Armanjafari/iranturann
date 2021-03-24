<?php

namespace App;

use App\Support\Pivot\PivotProductAttribute;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->using(PivotProductAttribute::class)->withPivot('product_id');
    }
}

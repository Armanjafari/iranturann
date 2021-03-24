<?php

namespace App;

use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;
use App\Support\Pivot\PivotProductAttribute;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use EagerLoadPivotTrait;
    public function values()
    {
        return $this->belongsToMany(Value::class)->using(PivotProductAttribute::class)->withPivot('value_id');
    }
}

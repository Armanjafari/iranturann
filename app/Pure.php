<?php

namespace App;

use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;
use App\Support\Pivot\PivotProductAttribute;
use Illuminate\Database\Eloquent\Model;

class Pure extends Model
{
    use EagerLoadPivotTrait;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->using(PivotProductAttribute::class)->withPivot(['value_id']);
    }
}

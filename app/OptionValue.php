<?php

namespace App;

use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;
use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    protected $fillable = ['id' , 'stock' , ];
    public function colors()
    {
        return $this->belongsTo(Color::class , 'color_id' , 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    // TODO check this it maybe go wrong
    use EagerLoadPivotTrait;
    // protected $hidden = ['category'];
    public function hasStock(int $quantity)
    {
        return $this->stock >= $quantity;
    }
    public function decrementStock($count)
    {
        return $this->decrement('stock' , $count);
    }
}

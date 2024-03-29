<?php

namespace App;

use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;
use App\Support\Pivot\PivotProductAttribute;
use Illuminate\Database\Eloquent\Model;

class Pure extends Model
{
    protected $fillable = [
    'title',
    'persian_title',
    'description',
    'price',
    'option_id',
    'brand_id',
    'category_id',
    'slug',
    'weight',
    'status',
    'keywords',
];
    use EagerLoadPivotTrait;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->using(PivotProductAttribute::class)->withPivot(['value_id']);
    }
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class , 'imageable');
    }
    public function scopeSearch($query , $keyword)

    {
        $query->where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('persian_title', 'LIKE', '%' . $keyword . '%');

        return $query;

    }
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function fulls()
    {
        return $this->hasManyThrough(Full::class , Product::class , 'pure_id','product_id', 'id' , 'id');
    }
    public function creator()
    {
        return $this->belongsTo(Market::class);
    }
}

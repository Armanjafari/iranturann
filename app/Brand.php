<?php

namespace App;

use App\Exceptions\FileHasExistsException;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'persian_name'];

    public function image()
    {
        return $this->morphOne(Image::class , 'imageable');
    }
    public function products()
    {
        return $this->hasMany(Pure::class);
    }
    public function delete()
    {
        $this->load('image','products');
        if (!$this->products->first()) 
        {
            return parent::delete();
        } else {
            throw new FileHasExistsException('a relation exists');
        }
    }
}

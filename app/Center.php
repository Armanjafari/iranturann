<?php

namespace App;

use App\Exceptions\FileHasExistsException;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $fillable = ['name', 'city_id','instagram', 'address', 'phone_number' , 'slug'];
    public function users()
    {
        // TODO fix this name

        return $this->hasMany(Market::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function delete()
    {
        $this->load('users');
        if (!$this->users->first()) 
        {
            return parent::delete();
        } else {
            throw new FileHasExistsException('a relation exists');
        }
    }
}

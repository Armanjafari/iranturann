<?php

namespace App;

use App\Exceptions\FileHasExistsException;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['slug' , 'instagram' ,'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class , 'imageable');
    }
    public function markets()
    {
        return $this->hasMany(Market::class);
    }
    public function delete()
    {
        $this->load('markets');
        if (!$this->markets->first()) 
        {
            return parent::delete();
        } else {
            throw new FileHasExistsException('a relation exists');
        }
    }
}

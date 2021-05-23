<?php

namespace App;

use App\Exceptions\FileHasExistsException;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = ['market_name', 'slug', 'is_active','is_super_active' , 'bank_number', 'shaba_number','instagram', 'type' ,'user_id', 'center_id' , 'agent_id'];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
    public function center()
    {
        return $this->belongsTo(Center::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function delete()
    {
        $this->load('products','user');
        if (!$this->products()->first()) 
        {
            $this->user->delete();
            return parent::delete();
        } else {
            throw new FileHasExistsException('a relation exists');
        }
    }

}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = ['market_name', 'slug' , 'bank_number', 'shaba_number','instagram', 'type' ,'user_id', 'center_id' , 'agent_id'];

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

}


<?php

namespace App;

use App\Exceptions\FileHasExistsException;
use App\Services\ProductFiltering\FilteringByMarket;
use App\Support\Pivot\PivotOrderMarket;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use FilteringByMarket;

    protected $fillable = [
    'market_name',
    'slug',
    'is_active',
    'is_super_active',
    'bank_number',
    'shaba_number',
    'instagram',
    'type',
    'user_id',
    'center_id',
    'agent_id',
    'wallet',
    'profit',
    'description',
    'applink',
];

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
        return $this->belongsToMany(Category::class)->withPivot('percent');
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
    public function images()
    {
        return $this->morphMany(Image::class , 'imageable');
    }
    public function increaseWallet($price)
    {
        $this->wallet += $price;
        $this->save();
    }
    public function setProfit()
    {
        $this->categories();
    }
    public function financials()
    {
        return $this->hasMany(Financial::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class , 'full_order')->using(PivotOrderMarket::class)->withPivot(['market_id' , 'quantity' , 'price' ,'status']);
    }
    public function increaseProfit($price)
    {
        $this->profit += $price;
        $this->save();
    }
    public function fulls()
    {
        return $this->hasManyThrough(Full::class , Product::class , 'market_id','product_id', 'id' , 'id');
    }
    public function SettedCategories()
    {
        
    }

}


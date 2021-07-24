<?php

namespace App;

use App\Services\Permissions\Traits\HasPermissions;
use App\Services\Permissions\Traits\HasRoles;
use App\Support\Discount\Coupon\Traits\Couponable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable , HasPermissions , Couponable , HasRoles ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'address',
        'parent_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    public function activeCode()
    {
        return $this->hasMany(ActiveCode::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function centers()
    {
        return $this->belongsTo(Center::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function agent()
    {
        return $this->hasOne(Agent::class);
    }
    public function shipings()
    {
        return $this->hasOne(Shiping::class);
    }
    public function market()
    {
        return $this->hasOne(Market::class);
    }
    public function customers()
    {
        return $this->hasMany(User::class, 'parent_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActiveCode extends Model
{
    protected $table = 'active_code';
    protected $fillable = ['code','user_id','expires_at'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeGenerateCode($query, $user)
    {
        do {
            $code = mt_rand(10000,99999);
        } while($this->checkCodeIsUnique($user , $code));
    }
    private function checkCodeIsUnique($user , int $code)
    {
        return !! $this->user()->activeCode()->whereCode($code)->first();
    }
    public function scopeValidateCode($query , $code ,User $user)
    {
        return !! $user->activeCode()->whereCode((int)$code)->where('expires_at' , '>' , now())->first();
    }
}

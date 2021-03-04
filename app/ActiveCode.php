<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActiveCode extends Model
{
    protected $table = 'active_code';
    protected $fillable = ['code','user_id','expired_at'];
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
        //dd($user->activeCode()->whereCode((int)$code)->get('expires_at')->isPast());
        //if($user->activeCode()->whereCode((int)$code)->expires_at->isPast()) return true;

        //return false;
        //dd($user->activeCode()->whereCode($code)->get('expired_at') . 'mytime ' . now());
        return !! $user->activeCode()->whereCode((int)$code)->where('expired_at' , '>' , now())->first();
    }
}

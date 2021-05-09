<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['title' , 'value', 'option_id'];
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}

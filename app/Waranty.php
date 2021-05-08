<?php

namespace App;

use App\Exceptions\FileHasExistsException;
use Illuminate\Database\Eloquent\Model;

class Waranty extends Model
{
    protected $fillable = ['name'];
    public function fulls()
    {
        return $this->hasMany(Full::class); // TODO maybe its go wrong
    }
    public function delete()
    {
        $this->load('fulls');
        if (!$this->fulls->first()) 
        {
            return parent::delete();
        } else {
            throw new FileHasExistsException('a relation exists');
        }
    }
}

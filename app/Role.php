<?php

namespace App;

use App\Services\Permissions\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    use HasPermissions;
    protected $fillable = ['name' , 'persian_name'];
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('percent');
    }
}

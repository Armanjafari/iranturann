<?php

namespace App;

use App\Services\Permissions\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    use HasPermissions;
}

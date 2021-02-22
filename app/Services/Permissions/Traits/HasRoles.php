<?php
namespace App\Services\Permissions\Traits;

use Illuminate\Support\Arr;
use App\Role;
trait HasRoles
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function giveRolesTo(... $roles)
    {
        $roles = $this->getAllRoles($roles);
        if($roles->isEmpty()) return $this;
        $this->roles()->syncWithoutDetaching($roles);
        return $this;
    }
    public function getAllRoles(array $roles)
    {
        return Role::whereIn('name', Arr::flatten($roles))->get();
    }
    public function withdrawRoles(... $roles)
    {
        $roles = $this->getAllRoles($roles);
        $this->roles()->detach($roles);
        return $this;
    }
    public function refreshRoles(... $roles)
    {
        $roles = $this->getAllRoles($roles);
        $this->roles()->sync($roles);
        return $this;
    }
    public function hasRole($role)
    {
        return $this->roles->contains('name',$role);
    }
}
?>
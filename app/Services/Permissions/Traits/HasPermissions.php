<?php 

namespace App\Services\Permissions\Traits;
use App\Permission;
use Illuminate\Support\Arr;

trait HasPermissions
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function givePermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        if ($permissions->isEmpty()) return $this;
        $this->permissions()->syncWithoutDetaching($permissions);
        return $this;
    }
    protected function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('name', Arr::flatten($permissions))->get();
    }
    public function withDrawPermissions(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }
    public function refreshPermissions(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->sync($permissions);
        return $this;
    }
    public function hasPermission(Permission $permission)
    {
        return $this->permissions->contains($permission);
    }
}
?>
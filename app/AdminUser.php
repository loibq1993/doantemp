<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property mixed roles
 */
class AdminUser extends Authenticatable
{
    protected $table = 'admin_user';
    const table = 'admin_user';

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_admin_users');
    }
    /**
     * Checks if User has access to $permissions.
     * @param array $permissions
     * @return bool
     */
    public function hasAccess(array $permissions) : bool
    {
        // check if the permission is available in any role
        foreach ($this->roles as $role) {
            if($role->hasAccess($permissions)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Checks if the user belongs to role.
     * @param string $roleSlug
     * @return bool
     */
    public function inRole(string $roleSlug)
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }
}

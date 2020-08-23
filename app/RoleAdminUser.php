<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property mixed roles
 */
class RoleAdminUser extends Authenticatable
{
    protected $table = 'role_admin_users';
    const table = 'role_admin_users';   
}
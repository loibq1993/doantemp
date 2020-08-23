<?php

namespace App\Policies;

use App\AdminUser;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminUserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine whether the user can create admin users.
     *
     * @param  \App\AdminUser  $user
     * @return mixed
     */
    public function show(AdminUser $user)
    {
        return $user->inRole('admins');
    }
	public function manager(AdminUser $user)
    {
        return $user->inRole('managers');
    }
	public function teacher(AdminUser $user)
    {	
        return $user->inRole('teachers');
    }
}

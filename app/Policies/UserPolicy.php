<?php

namespace App\Policies;

use App\Model\admin\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    public function __construct()
    {
        //
    }

    public function report(User $user)
    {
        return $this->getPermission($user,1);
    }

    public function manage(User $user)
    {
        return $this->getPermission($user,2);
    }

    public function settings(User $user)
    {
        return $this->getPermission($user,3);
    }

    protected function getPermission($user,$p_id)
    {
        foreach ($user->roles as $role) {

            foreach ($role->permissions as $permission) {

                if ($permission->id == $p_id) {

                    return true;
                }
            }
        }

        return false;
    }
}

<?php

namespace App\Repositories;

use App\Models\PermissionsUser;

class PermissionUserRepository
{

    public static function createPermissionUser(array $data)
    {
        $permissionUser = new PermissionsUser();
        $permissionUser->name = $data['name'];
        $permissionUser->user_id = $data['user_id'];
        $permissionUser->save();
    }

    public static function getPermissionUsers()
    {
        return PermissionsUser::all();
    }


}

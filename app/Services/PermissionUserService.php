<?php

namespace App\Services;

use App\Repositories\PermissionUserRepository;

class PermissionUserService
{

    public static function createPermissionUser(array $data)
    {
        PermissionUserRepository::createPermissionUser($data);
        return json_encode(['message' => 'Permiso de usuario creado con exito']);
    }

    public static function getPermissionUsers()
    {
        return PermissionUserRepository::getPermissionUsers();
    }
    public static function getPermissionUsersForIdUser($id_user)
    {
        $permissionForUser = self::getPermissionUsers()->where('user_id', $id_user);
        return $permissionForUser;
    }


}

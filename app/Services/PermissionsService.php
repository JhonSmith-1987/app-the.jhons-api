<?php

namespace App\Services;

use App\Repositories\PermissionsRepository;

class PermissionsService
{

    public static function createPermission(array $data)
    {
        PermissionsRepository::createPermission($data);
        return json_encode(['message' => 'Permiso creado con exito']);
    }

    public static function getPermissions()
    {
        return PermissionsRepository::getPermissions();
    }

    public static function deletePermission($id, $name)
    {
        PermissionsRepository::deletePermission($id, $name);
        return json_encode(['message'=>'permiso eliminado con exito']);
    }

    public static function updatePermission(array $data, $id)
    {
        PermissionsRepository::updatePermission($data, $id);
        return json_encode(['message'=>'permiso actualizado con exito']);
    }
}

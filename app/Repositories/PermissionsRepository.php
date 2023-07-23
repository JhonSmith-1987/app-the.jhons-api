<?php

namespace App\Repositories;

use App\Models\Permissions;
use App\Models\PermissionsUser;

class PermissionsRepository
{

    public static function createPermission(array $data)
    {
        $permission = new Permissions();
        $permission->name = $data['name'];
        $permission->save();
    }

    public static function getPermissions()
    {
        return Permissions::all();
    }

    public static function deletePermission($id, $name)
    {
        PermissionsUser::where('name', $name)->delete();
        return Permissions::destroy();
    }

    public static function updatePermission(array $data, $id)
    {
        $name = $data['name'];
        Permissions::where('id', $id)->update([
            'name'=>$name
        ]);
    }
}

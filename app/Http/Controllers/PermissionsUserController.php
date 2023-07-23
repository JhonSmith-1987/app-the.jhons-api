<?php

namespace App\Http\Controllers;

use App\Services\PermissionUserService;
use Illuminate\Http\Request;

class PermissionsUserController extends Controller
{
    public function createPermissionUser(Request $request)
    {
        $data = $request->all();
        return PermissionUserService::createPermissionUser($data);
    }

    public function getPermissionUsers()
    {
        return PermissionUserService::getPermissionUsers();
    }
    public function getPermissionUsersForIdUser($id_user)
    {
        return PermissionUserService::getPermissionUsersForIdUser($id_user);
    }
}

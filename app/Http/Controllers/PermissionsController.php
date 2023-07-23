<?php

namespace App\Http\Controllers;

use App\Services\PermissionsService;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function createPermission(Request $request)
    {
        $data = $request->all();
        return PermissionsService::createPermission($data);
    }
    public function getPermissions() {
        return PermissionsService::getPermissions();
    }
    public function deletePermission($id, $name)
    {
        return PermissionsService::deletePermission($id, $name);
    }
    public function updatePermission(Request $request, $id)
    {
        $data = $request->all();
        return PermissionsService::updatePermission($data, $id);
    }
}

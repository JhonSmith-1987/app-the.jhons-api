<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function createUser(Request $request)
    {
        $data = $request->all();
        return UserService::createUser($data);
    }
    public function getUsers()
    {
        return UserService::getUsers();
    }
    public function getUsersForId($id)
    {
        return UserService::getUsersForId($id);
    }
    public function deleteUser($id)
    {
        return UserService::deleteUser($id);
    }
    public function updateUser(Request $request, $id) {
        $data = $request->all();
        return UserService::updateUser($data, $id);
    }
}

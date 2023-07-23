<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{

    public static function createUser(array $data)
    {
        UserRepository::createUser($data);
        return json_encode(['message'=>'Usuario creado con éxito']);
    }

    public static function getUsers()
    {
        return UserRepository::getUsers();
    }

    public static function getUsersForId($id)
    {
        return UserRepository::getUsersForId($id);
    }

    public static function deleteUser($id)
    {
        UserRepository::deleteUser($id);
        return json_encode(['message'=>'Usuario eliminado con exito']);
    }

    public static function updateUser(array $data, $id)
    {
        UserRepository::updateUser($data, $id);
        return json_encode(['message'=>'Usuario actualizado con exito']);
    }
}

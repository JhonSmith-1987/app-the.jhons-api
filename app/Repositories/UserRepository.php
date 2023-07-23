<?php

namespace App\Repositories;

use App\Models\Credits;
use App\Models\Loans;
use App\Models\PermissionsUser;
use App\Models\Providers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserRepository
{

    public static function createUser(array $data)
    {
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->user_type = $data['user_type'];
        $user->save();
    }

    public static function getUsers()
    {
        return User::all();
    }

    public static function getUsersForId($id)
    {
        return User::find($id);
    }

    public static function deleteUser($id)
    {
        Providers::where('user_id', $id)->delete();
        Loans::where('user_id', $id)->delete();
        Credits::where('user_id', $id)->delete();
        PermissionsUser::where('user_id', $id)->delete();
        return User::destroy($id);
    }

    public static function updateUser(array $data, $id)
    {
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $user_type = $data['user_type'];
        User::where('id', $id)->update([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'user_type'=>$user_type,
        ]);
    }
}

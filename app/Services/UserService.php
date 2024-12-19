<?php

namespace App\Services;

use App\Models\User;
use GuzzleHttp\Promise\Create;

class UserService
{
    public function getUserList()
    {
        return User::getUserList();
    }

    /**
     * Function create user.
     *
     * @return User
     */
    public function createUser(array $data): User
    {
        return User::create($data);
    }

    public function getUserDetail($id): User
    {
        return User::getUserDetail($id);
    }

    public function updateUser(array $data, $id): User
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function deleteUser($id): User
    {
        $user = User::findOrFail($id);
        $user->delete($id);
        return $user;
    }

    // public function restoreUser($id): User
    // {
    //     // Khôi phục user đã bị xóa mềm
    //     $user = User::withTrashed()->find($id); // Tìm cả bản ghi đã bị xóa mềm
    //     return $user->restore();
    // }
}

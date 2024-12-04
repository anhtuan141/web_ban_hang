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
}

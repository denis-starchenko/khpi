<?php

namespace entities\user;

enum EUserRole
{
    case Admin;
    case User;
}

interface IUser
{
    public function createUser(UserModel $user);

    public function getUser(string $userId);
}
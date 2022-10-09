<?php

namespace entities\user;

use entities\sender\ISender;

class User implements IUser
{
    private ISender $sender;

    function __construct(ISender $sender)
    {
        $this->sender = $sender;
    }

    public function createUser(UserModel $user): UserModel
    {
        // TODO: Implement saveUser() method.
        $admin = $this->getUser($user->getAssociatedAdminId());
        $this->sender->sendSMS('User was created', $admin->getPhoneNumber());

        return new UserModel();
    }

    public function getUser(string $userId): UserModel
    {
        // TODO: Implement getUser() method.

        return new UserModel();
    }
}
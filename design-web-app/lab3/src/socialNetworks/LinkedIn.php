<?php

class LinkedIn implements ISocialNetwork
{
    public function sendMessage(string $message): bool
    {
        return true;
    }

    public function connect(string $email, string $password): ISocialNetwork
    {
        // TODO: Implement connect() method.

        return $this;
    }
}
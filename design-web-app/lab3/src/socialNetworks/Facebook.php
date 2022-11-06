<?php

class Facebook implements ISocialNetwork
{
    public function sendMessage(string $message): bool
    {
        // TODO: Implement sendMessage() method.

        return true;
    }

    public function connect(string $login, string $password): ISocialNetwork
    {
        // TODO: Implement connect() method.

        return $this;
    }
}
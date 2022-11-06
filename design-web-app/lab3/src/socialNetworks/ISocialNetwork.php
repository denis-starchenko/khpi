<?php

interface ISocialNetwork
{
    public function sendMessage(string $message): bool;
    public function connect(string $login, string $password): ISocialNetwork;
}
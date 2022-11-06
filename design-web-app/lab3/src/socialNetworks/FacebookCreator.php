<?php

class FacebookCreator extends SocialNetworkCreator
{
    public function create(string $login, string $password): ISocialNetwork
    {
        $facebook = new Facebook();

        return $facebook->connect($login, $password);
    }
}
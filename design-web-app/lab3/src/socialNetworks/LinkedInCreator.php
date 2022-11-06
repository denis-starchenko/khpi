<?php

class LinkedInCreator extends SocialNetworkCreator
{
    public function create(string $email, string $password): ISocialNetwork
    {
        $linkedIn = new LinkedIn();

        return $linkedIn->connect($email, $password);
    }
}
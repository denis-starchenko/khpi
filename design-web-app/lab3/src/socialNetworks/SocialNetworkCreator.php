<?php

abstract class SocialNetworkCreator
{
    public abstract function create(string $login, string $password): ISocialNetwork;
}
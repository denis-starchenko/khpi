<?php

class EmailNotification implements INotification
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message)
    {
        // TODO: Implement send() method.
    }
}
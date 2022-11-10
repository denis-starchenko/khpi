<?php

class SlackNotification
{
    public function login(string $login, string $apiKey): bool
    {
        return true;
    }

    public function sendNotification(string $chartId, string $title, string $message): bool
    {
        return true;
    }
}
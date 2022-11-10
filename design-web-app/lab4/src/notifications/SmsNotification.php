<?php

class SmsNotification
{
    private string $phoneNumber;
    private string $sender;

    public function sendNotification(string $phoneNumber, string $sender, string $subject, string $text): bool
    {
        return true;
    }
}
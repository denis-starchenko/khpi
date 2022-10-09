<?php

namespace entities\sender;
interface ISender
{
    public function sendSMS(string $body, string $phoneNumber);

    public function sendEmail(string $body, string $email);

    public function sendMessage(string $body, string $messengerId);
}
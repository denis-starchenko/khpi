<?php

class SmsNotificationAdapter implements INotification
{
    private string $phoneNumber;
    private string $sender;
    private SmsNotification $smsNotification;

    public function __construct(string $phoneNumber, string $sender)
    {
        $this->phoneNumber = $phoneNumber;
        $this->sender = $sender;
        $this->smsNotification = new SmsNotification();
    }

    public function send(string $title, string $message): bool
    {
        return $this->smsNotification->sendNotification($this->phoneNumber, $this->sender, $title, $message);
    }
}
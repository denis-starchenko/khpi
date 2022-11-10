<?php

class SlackNotificationAdapter implements INotification
{
    private string $login;
    private string $apiKey;
    private string $chartId;
    private SlackNotification $slackNotification;

    public function __construct(string $login, string $apiKey, string $chartId)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
        $this->chartId = $chartId;
        $this->slackNotification = new SlackNotification();
        $this->slackNotification->login($this->login, $this->apiKey);
    }

    public function send(string $title, string $message)
    {
        return $this->slackNotification->sendNotification($this->chartId, $title, $message);
    }
}
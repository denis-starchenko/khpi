<?php

function sendNotification(INotification $notification)
{
    $notification->send('Hello World', 'This is test notification');
}

$slackNotificationAdapter = new SlackNotificationAdapter('test-login', 'test-api-key', 'chart-id');
$smsNotificationAdapter = new SmsNotificationAdapter('000000000', 'John Snow');

sendNotification($slackNotificationAdapter);
sendNotification($smsNotificationAdapter);
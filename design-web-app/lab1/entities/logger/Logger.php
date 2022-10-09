<?php

namespace entities\logger;
use entities\user\IUser;

class Logger implements ILogger
{
    private ELogLevel $logLevel = ELogLevel::Info;

    public function save(ELogLevel $logLevel, string $logMessage, DateTime $dateTime, IUser $user)
    {
        // save to a log storage
    }
}
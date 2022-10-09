<?php

namespace entities\logger;
use entities\user\IUser;
use DateTime;

enum ELogLevel
{
    case Info;
    case Error;
    case Warning;
}

interface ILogger
{
    public function save(ELogLevel $logLevel, string $logMessage, DateTime $dateTime, IUser $user);
}
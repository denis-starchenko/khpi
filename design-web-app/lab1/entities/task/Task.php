<?php

namespace entities\task;

use entities\logger\ELogLevel;
use entities\sender\ISender;
use entities\logger\ILogger;
use entities\task\ITask;
use entities\user\IUser;
use DateTime;

class Task implements ITask
{
    private IUser $user;
    private ISender $sender;
    private ILogger $logger;

    public function __construct(IUser $user, ISender $sender, ILogger $logger)
    {
        $this->user = $user;
        $this->sender = $sender;
        $this->logger = $logger;
    }

    public function create(string $taskName, string $userId)
    {
        // TODO: Implement save() method.
        $user = $this->user->getUser($userId);
        $this->sender->sendEmail('Task ' . $taskName . ' was saved successfully', $user->email);
        $this->changeStatus(ETaskStatus::Pending, new DateTime(), $userId);
    }

    public function changeStatus(ETaskStatus $taskStatus, DateTime $time, string $userId)
    {
        $user = $this->user->getUser($userId);

        $this->logger->save(
            ELogLevel::Info,
            'Task status was changed to ' . $taskStatus,
            $time,
            $user
        );
    }
}

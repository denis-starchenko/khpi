<?php

namespace entities\task;
enum ETaskStatus
{
    case Pending;
    case Created;
    case Fail;
    case Done;
}

interface ITask
{
    public function create(string $taskName, string $userId);
}

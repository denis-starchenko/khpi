<?php

namespace snapshots;

use entities\UserCabinet;

class UserCabinetSettingsSnapshot
{
    private UserCabinet $userCabinet;
    private bool $newsNotifications;
    private bool $newMessagesNotifications;

    public function __construct(UserCabinet $userCabinet, bool $newsNotifications, bool $newMessagesNotifications)
    {
        $this->userCabinet = $userCabinet;
        $this->newsNotifications = $newsNotifications;
        $this->newMessagesNotifications = $newMessagesNotifications;
    }

    public function restore(): void
    {
        $this->userCabinet->setNewsNotifications($this->newsNotifications);
        $this->userCabinet->setNewMessagesNotifications($this->newMessagesNotifications);
    }
}
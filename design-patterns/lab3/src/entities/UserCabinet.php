<?php

namespace entities;

use snapshots\UserCabinetSettingsSnapshot;

class UserCabinet
{
    private bool $newsNotifications;
    private bool $newMessagesNotifications;

    public function setNewsNotifications(bool $newsNotifications): void
    {
        $this->newsNotifications = $newsNotifications;
    }

    public function setNewMessagesNotifications(bool $newMessagesNotifications): void
    {
        $this->newMessagesNotifications = $newMessagesNotifications;
    }

    public function createSnapshot(): UserCabinetSettingsSnapshot
    {
        return new UserCabinetSettingsSnapshot($this, $this->newsNotifications, $this->newMessagesNotifications);
    }
}
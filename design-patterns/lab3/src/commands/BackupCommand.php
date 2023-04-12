<?php

namespace commands;

use entities\UserCabinet;
use snapshots\UserCabinetSettingsSnapshot;

class BackupCommand
{
    private UserCabinetSettingsSnapshot $backup;
    private UserCabinet $userCabinet;

    public function __construct(UserCabinet $userCabinet)
    {
        $this->userCabinet = $userCabinet;
    }

    public function makeBackup(): void
    {
        $this->backup = $this->userCabinet->createSnapshot();;
    }

    public function undo(): void
    {
        $this->backup->restore();
    }
}
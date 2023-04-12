<?php

$userCabinet = new \entities\UserCabinet();
$backupCommand = new \commands\BackupCommand($userCabinet);

$userCabinet->setNewsNotifications(false);
$userCabinet->setNewMessagesNotifications(false);
$userCabinet->createSnapshot();

$backupCommand->makeBackup();

$userCabinet->setNewsNotifications(true);
$userCabinet->setNewMessagesNotifications(true);

$backupCommand->undo();
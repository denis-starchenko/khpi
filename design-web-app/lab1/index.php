<?php
use entities\sender\Sender;
use entities\logger\Logger;
use entities\user\User;
use entities\user\UserModel;
use entities\task\Task;

$logger = new Logger();
$sender = new Sender();
$user = new User($sender);
$task = new Task($user, $sender, $logger);

$task->create('Some task', 'some-user-id');
$user->createUser(new UserModel());
<?php

$faceBookCreator = new FacebookCreator();
$facebookClient = $faceBookCreator->create('some-login', 'some-password');

$facebookClient->sendMessage('Hello friend');

$linkedInCreator = new LinkedInCreator();
$linkedInClient = $linkedInCreator->create('some-email', 'some-password');

$linkedInClient->sendMessage('Hello friend');
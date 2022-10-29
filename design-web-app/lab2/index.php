<?php

$amazoneFile = AmazonFile::getInstances();
$amazoneFile->connectToStore();
$amazoneFile->readFromStore('test_file');

$localFile = LocalFile::getInstances();
$localFile->connectToStore();
$localFile->readFromStore('test-file');
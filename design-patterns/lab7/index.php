<?php

$noSqlInstance = NoSQL::getInstance();
$postgreInstance = PostgreSQL::getInstance();

$sqlData = $postgreInstance->getData();
$noSqlData = $noSqlInstance->getData(['x' => ['$gt' => 1]]);
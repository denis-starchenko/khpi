<?php

$postgreSQLBuilder = new PostgreSQLBuilder();
$mySQLBuilder = new MySQLBuilder();

$postgreSQL = $postgreSQLBuilder->select()->where()->limit()->getSQL();
$mySQL = $mySQLBuilder->select()->where()->limit()->getSQL();
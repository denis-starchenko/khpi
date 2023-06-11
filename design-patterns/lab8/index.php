<?php

function buildQuery(IBuilder $sqlBuilder): string
{
    return $sqlBuilder->select()->where()->limit()->getSQL();
}

$postgreSQL = buildQuery(new PostgreSQLBuilder());
$mySQL = buildQuery(new MySQLBuilder());
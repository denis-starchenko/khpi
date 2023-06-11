<?php

use PgSql\Connection;

class PostgreSQLBuilder implements IBuilder
{
    private Connection $dbConnection;
    private string $sql;
    public function __construct()
    {
        $this->dbConnection = pg_connect("host=localhost dbname=edb user=enterprisedb password=postgres");
    }

    public function select()
    {
        // TODO: Implement select() method.

        return $this;
    }

    public function where()
    {
        // TODO: Implement where() method.

        return $this;
    }

    public function limit()
    {
        // TODO: Implement limit() method.

        return $this;
    }

    public function getSQL(): string
    {
        return $this->sql;
    }
}
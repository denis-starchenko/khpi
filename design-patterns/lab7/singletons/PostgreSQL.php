<?php

use PgSql\Connection;

class PostgreSQL extends BaseSingleton
{
    private Connection $dbConnection;

    protected function __construct()
    {
        $this->dbConnection = pg_connect("host=localhost dbname=edb user=enterprisedb password=postgres");
    }

    public function getData(): array
    {
        return pg_fetch_all(pg_query($this->dbConnection, 'select * from some_table'));
    }
}
<?php

class MySQLBuilder implements IBuilder
{
    private mysqli $dbConnection;
    private string $sql;

    public function __construct()
    {
        $this->dbConnection = mysqli_connect('example.com:3307', 'mysql_user', 'mysql_password');
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
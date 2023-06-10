<?php

class NoSQL extends BaseSingleton
{
    private \MongoDB\Driver\Manager $dbConnection;
    protected function __construct()
    {
        $this->dbConnection = $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    }

    public function getData(array $filter, array $options = []): \MongoDB\Driver\Cursor
    {
        $query = new MongoDB\Driver\Query($filter, $options);

        return $this->dbConnection->executeQuery('db.collection', $query);
    }
}

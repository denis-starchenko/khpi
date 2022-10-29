<?php

class LocalFile implements IStore
{
    private static array $instances = [];

    protected function __construct(){}

    protected function __clone(){}

    /**
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Serialization disabled for a singleton");
    }

    public static function getInstances(): AmazonFile
    {
        $class = static::class;

        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }

        return self::$instances[$class];
    }

    public function connectToStore(): void {}

    public function saveToStore($file): void {}

    public function readFromStore($fileId): void {}
}
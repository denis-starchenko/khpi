<?php

interface IStore
{
    public function connectToStore(): void;
    public function saveToStore($file): void;
    public function readFromStore($fileId): void;
}
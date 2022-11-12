<?php

class Product
{
    public string $name;
    public string $id;
    public string $description;
    public string $image;

    public function __construct(string $name, string $id, string $description, string $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->id = $id;
        $this->image = $image;
    }
}
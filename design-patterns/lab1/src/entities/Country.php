<?php

namespace entities;

class Country
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
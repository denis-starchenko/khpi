<?php

namespace entities;

class GidCountryNumerator implements ICountryIterator
{
    public ICountryNumerable $aggregate;
    public int $index;

    public function __construct(ICountryNumerable $aggregate)
    {
        $this->aggregate = $aggregate;
    }

    public function hasNext(): bool
    {
        return $this->index < $this->aggregate->count();
    }

    public function next(): Country
    {
        return $this->aggregate->current($this->index);
    }
}
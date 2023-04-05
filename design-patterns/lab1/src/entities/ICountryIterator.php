<?php

namespace entities;

interface ICountryIterator
{
    public function hasNext(): bool;
    public function next(): Country;
}

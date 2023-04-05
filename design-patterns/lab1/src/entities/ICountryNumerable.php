<?php

namespace entities;

interface ICountryNumerable
{
    public function createNumerator(): ICountryIterator;
    public function count(): int;
    public function current(int $index): Country;
}

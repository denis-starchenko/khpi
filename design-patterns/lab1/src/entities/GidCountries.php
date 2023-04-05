<?php

namespace entities;

class GidCountries implements ICountryNumerable
{
    private array $countries;

    public function __construct()
    {
        $this->countries = [new Country('country3'), new Country('country4')];
    }

    public function createNumerator(): ICountryIterator
    {
        return new CountryNumerator($this);
    }

    public function count(): int
    {
        // TODO: Implement count() method.
    }

    public function current(int $index): Country
    {
        // TODO: Implement current() method.
    }
}
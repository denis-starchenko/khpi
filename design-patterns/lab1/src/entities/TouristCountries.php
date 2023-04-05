<?php

namespace entities;

class TouristCountries implements ICountryNumerable
{
    private array $countries;

    public function __construct()
    {
        $this->countries = [new Country('country1'), new Country('country2')];
    }

    public function createNumerator(): ICountryIterator
    {
        return new TouristCountryNumerator($this);
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
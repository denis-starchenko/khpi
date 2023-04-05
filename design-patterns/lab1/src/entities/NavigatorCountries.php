<?php

namespace entities;

class NavigatorCountries implements ICountryNumerable
{
    private array $countries;

    public function __construct()
    {
        $this->countries = [new Country('country7'), new Country('country8')];
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
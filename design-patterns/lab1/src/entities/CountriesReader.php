<?php

namespace entities;

class CountriesReader
{
    public function read(ICountryNumerable $countryNumerator)
    {
        $iterator = $countryNumerator->createNumerator();

        while ($iterator->hasNext())
        {
            var_dump('Country: ', $iterator->next());
        }
    }
}

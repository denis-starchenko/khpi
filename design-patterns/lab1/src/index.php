<?php

$touristCountries = new \entities\TouristCountries();
$gidCountries = new \entities\GidCountries();
$navigatorCountries = new \entities\NavigatorCountries();

$countriesReader = new \entities\CountriesReader();

$countriesReader->read($touristCountries);
$countriesReader->read($gidCountries);
$countriesReader->read($navigatorCountries);

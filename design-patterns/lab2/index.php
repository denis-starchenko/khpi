<?php

$orderPage = new \pages\OrderPage();
$anotherRecipient = new \components\AnotherRecipient($orderPage);
$orderDate = new \components\OrderDate($orderPage);
$pickup = new \components\Pickup($orderPage);

$anotherRecipient->check();
$orderDate->changed();
$pickup->check();
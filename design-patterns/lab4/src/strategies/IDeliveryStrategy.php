<?php

interface IDeliveryStrategy
{
    public function execute($deliveryData);
}
<?php

namespace contexts;

class DeliveryContext
{
    private \IDeliveryStrategy $strategy;

    public function setStrategy(\IDeliveryStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy($deliveryData)
    {
        return $this->strategy->execute($deliveryData);
    }
}
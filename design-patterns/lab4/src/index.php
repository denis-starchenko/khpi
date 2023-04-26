<?php

function switchDelivery($deliveryType)
{
    switch ($deliveryType) {
        case 'companyDelivery':
            return new CompanyDeliveryStrategy();
        case 'thirdCompanyDelivery':
            return new ThirdCompanyDeliveryStrategy();
        default:
            return new PickUpStrategy();
    }
}

$strategy = switchDelivery('pickup');
$context = new \contexts\DeliveryContext();

$context->setStrategy($strategy);
$context->executeStrategy(['address' => 'some address']);
<?php

function processItem(\entities\ItemAbstract $item)
{
    $item->processItem();
}

$product = new \entities\Product();
$order = new \entities\Order();
$user = new \entities\User();

processItem($product);
processItem($order);
processItem($user);

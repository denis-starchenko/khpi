<?php

namespace entities;

abstract class ItemAbstract
{
    public function processItem()
    {
        $this->getItem();
        $this->validateItem();
        $this->validationHook();;
        $this->saveItem();
        $this->getResponse();
        $this->responseHook();
    }

    protected function getItem()
    {}

    protected function validateItem()
    {}

    protected function saveItem()
    {}

    protected function validationHook()
    {}

    protected function getResponse()
    {}

    protected function responseHook()
    {}
}
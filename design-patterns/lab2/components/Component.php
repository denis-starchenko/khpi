<?php

namespace components;

use interfaces\IMediator;

class Component
{
    public $value;
    protected IMediator $mediator;

    public function __construct(IMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function click(): void
    {
        $this->mediator->notify($this, 'click');
    }

    public function keypress(): void
    {
        $this->mediator->notify($this, 'keypress');
    }
}
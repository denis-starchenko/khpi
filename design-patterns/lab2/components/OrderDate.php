<?php

namespace components;

class OrderDate extends Component
{
    public function changed(): void
    {
        $this->mediator->notify($this, 'changed');
    }
}
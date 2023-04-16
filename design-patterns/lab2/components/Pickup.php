<?php

namespace components;

class Pickup extends Component
{
    public function check(): void
    {
        $this->mediator->notify($this, 'check');
    }
}
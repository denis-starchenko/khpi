<?php

namespace components;

class AnotherRecipient extends Component
{
    public function check(): void
    {
        $this->mediator->notify($this, 'check');
    }
}
<?php

namespace interfaces;

use components\Component;

interface IMediator
{
    public function notify(Component $component, string $event): void;
}

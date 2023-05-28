<?php

namespace entities;

class User extends ItemAbstract
{
    protected function validationHook()
    {
        // if email field changed then generate error
    }
}
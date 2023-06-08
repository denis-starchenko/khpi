<?php

interface IComponent
{
    public function accept(IVisitor $visitor): string;
}
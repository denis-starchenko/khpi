<?php

class Company implements IComponent
{
    private array $departments;

    public function __construct(array $departments)
    {
        $this->departments = $departments;
    }

    public function accept(IVisitor $visitor): string
    {
        return $visitor->visitCompany($this);
    }

    /**
     * @return array
     */
    public function getDepartments(): array
    {
        return $this->departments;
    }
}
<?php

class Department implements IComponent
{
    private array $employees;

    public function __construct(array $employees)
    {
        $this->employees = $employees;
    }


    public function accept(IVisitor $visitor): string
    {
        return $visitor->visitDepartment($this);
    }

    public function getEmployees(): array
    {
        return $this->employees;
    }
}
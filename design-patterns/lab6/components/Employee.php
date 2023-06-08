<?php

class Employee implements IComponent
{
    private float $salary;
    private string $position;

    public function __construct(float $salary, string $position)
    {
        $this->salary = $salary;
        $this->position = $position;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function accept(IVisitor $visitor): string
    {
        return $visitor->visitEmployee($this);
    }
}
<?php

class Report implements IVisitor
{
    public function visitEmployee(Employee $element): string
    {
        return 'formatted data';
    }

    public function visitDepartment(Department $element): string
    {
        return 'department report';
    }

    public function visitCompany(Company $element): string
    {
        return 'company report';
    }
}
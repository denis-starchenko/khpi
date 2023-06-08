<?php

interface IVisitor
{
    public function visitEmployee(Employee $element): string;

    public function visitDepartment(Department $element): string;

    public function visitCompany(Company $element): string;
}
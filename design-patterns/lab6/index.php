<?php

function printReport(array $components, Report $visitor): void
{
    foreach ($components as $component) {
        $component->accept($visitor);
    }
}

$itEmployees = [
    new Employee('2000', 'PHP developer'),
    new Employee('1000', 'QA Engineer'),
];

$departments = [
    new Department($itEmployees),
];

$company = new Company($departments);

$visitor = new Report();

$company->accept($visitor);

printReport($departments, $visitor);
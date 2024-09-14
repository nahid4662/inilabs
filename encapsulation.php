<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            echo "Invalid salary amount.\n";
        }
    }
}

$employee = new Employee("John Doe", 5000);
echo "Employee Name: " . $employee->getName() . "\n";
echo "Employee Salary: " . $employee->getSalary() . "\n";

$employee->setSalary(6000);
echo "Updated Salary: " . $employee->getSalary() . "\n";

$employee->setSalary(-1000);  // Invalid salary
?>

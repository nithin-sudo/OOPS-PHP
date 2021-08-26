<?php
include 'Inheritance.php';

//single level
class Company extends Employee
{
    public $companyName;
    public function __construct($salary,$companyName)
    {
        $this -> companyName = $companyName;
        parent::__construct($salary);
    }
}

echo "\nAt single level\n";

//child class object at single level
$company = new Company("45000","MIRAMAX");
echo "\n".$company -> salary;
echo "\n".$company -> companyName;

$company -> setEmployeeName("Karthik");
echo "\n".$company -> getEmployeeName();

$company -> setAge("29");
echo "\n".$company -> getAge();
?>
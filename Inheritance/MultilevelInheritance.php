<?php
include 'SingleLevel.php';
//multilevel
class NewEmployee extends Company
{
    public $level;
    public function __construct($salary,$companyName,$level)
    {
        $this -> level = $level;
        parent::__construct($salary,$companyName);
    }

}

echo "\nAt multi level\n";
//child class object at multilevel
$newEmployee = new NewEmployee("60800","WB","Fresher");
echo "\n".$newEmployee -> salary;
echo "\n".$newEmployee -> companyName;
echo "\n".$newEmployee -> level;

//getters and setters
$newEmployee -> setEmployeeName("Manoj");
echo "\n".$newEmployee -> getEmployeeName();

$newEmployee -> setAge("39");
echo "\n".$newEmployee -> getAge();
?>
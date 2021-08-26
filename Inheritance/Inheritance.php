<?php
class Employee
{
    private $employeeName;
    private $age;
    public $salary;

    public function __construct($salary)
    {
        $this->salary = $salary;
    }

    public function getEmployeeName()
    {
        return $this->employeeName;
    }
    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;

        return $this;
    }
 
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}

echo "\nParent Class:\n";

//for constructor
$employee = new Employee("25000");
echo $employee->salary;

//for getters and setters
echo "\nGetters And Setters:\n";
$employee -> setEmployeeName('Nithin');
echo "\n".$employee -> getEmployeeName();

$employee -> setAge(22);
echo "\n".$employee -> getAge();

?>
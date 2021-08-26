<?php
class Employee
{
    private $employeeName;
    private $age;
    public $salary;

    public function __construct($salary)
    {
        echo "setting salary with constructor\n";
        $this->salary = $salary;
    }

    /**
     * Get the value of employeeName
     */ 
    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    /**
     * Set the value of employeeName
     *
     * @return  self
     */ 
    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}

//for constructor
$employee = new Employee("25000");
echo $employee->salary;

//for getters and setters
echo "\nGetters And Setters: ";
$employee -> setEmployeeName('Nithin');
echo "\n".$employee -> getEmployeeName();

$employee -> setAge(22);
echo "\n".$employee -> getAge();
?>
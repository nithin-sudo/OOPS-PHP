<?php
include 'Interface.php';

//Parent class which is abstract
abstract class EmployeeDetails
{
    abstract public function employeeDetails($age,$salary);
}

//child class extending the abstract class and implemeting interface
class ShowDetails extends EmployeeDetails implements IEmployee
{
        function employeeDetails($age,$salary)
        {
            echo " Age: {$age} Salary: {$salary}";
        }
        function employeeName($name)
        {
            echo "Name: {$name}";
        }
        function employeeLevel($level)
        {
            echo " Level : {$level}";
        }
}

//creating object for child class
$showDetails = new ShowDetails();
$showDetails -> employeeName("Nithin");
$showDetails -> employeeDetails("25","23450");
$showDetails -> employeeLevel("Fresher");
?>
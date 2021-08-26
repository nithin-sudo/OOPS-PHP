<?php
include 'Interface.php';

//parent class 
class Division
{
    function division()
    {
        $a=10;
        $b=20;
        $c = $b/$a;
        echo "\nI am the Parent ";
        echo "\nDivision is : {$c}";
    }
}

//child class extending parent and implementing interface
class Multiplication extends Division implements Arithematic
{
    function Add()
    {
        $a = 2;
        $b = 4;
        $c = $a+$b;
        echo "\nI am the child implementing parent and interface";
        echo "\n Addition is : {$c}";
    }
    function sub()
    {
        $a = 2;
        $b = 4;
        $c = $a-$b;
        echo "\nsubtraction is : {$c}";
    }
    function multiplication()
    {
        $a = 2;
        $b = 4;
        $c = $a*$b;
        echo "\nMultiplication is : {$c}";
    }
}

//object for child class calling all the implemneted methods.
$testInterface = new Multiplication();
$testInterface -> division();
$testInterface -> Add();
$testInterface -> sub();
$testInterface -> multiplication();

?>
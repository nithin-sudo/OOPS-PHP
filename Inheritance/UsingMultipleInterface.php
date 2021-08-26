<?php
include 'Interface.php';

//parent class implementing two interfaces.
class Calculation implements Arithematic,SayHi
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

    function Hi()
    {
        echo "\nhey Hi";
    }
}


$calc = new Calculation();
$calc -> Add();
$calc -> sub();
$calc -> Hi();
?>
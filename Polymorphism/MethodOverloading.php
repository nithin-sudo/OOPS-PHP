<?php
class Addition
{
    //using the magic function __call()
   function __call($functionName,$args)
   {
       if($functionName == "addUp")
       {
           $countArgs = count($args);

           if($countArgs == 2)
           {
               echo "<h2>Function 1: \n";
               echo "<h2>Addition of ".$args[0].",".$args[1]." is ".$args[0]+$args[1]."\n";
           }
           else if($countArgs == 3)
           {
            echo "<h2>Function 2: \n";
            echo "<h2>Addition of ".$args[0].",".$args[1].",".$args[2]." is ".$args[0]+$args[1]+$args[2];
           }
       }
   }
}

$addition = new Addition();
$addition -> addUp(12,12);
$addition -> addUp(12,12,12);
?>
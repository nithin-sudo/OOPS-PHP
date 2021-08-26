<?php
include 'SingleLevel.php';

//hierarchichal
class EmployeeVehicle extends Company
{
    public $vehicle;
    public function __construct($salary,$companyName,$vehicle)
    {
        $this -> vehicle = $vehicle;
        parent::__construct($salary,$companyName);
    }
}

echo "\n hierarchical\n";
//hierarchical

$empVehicle = new EmployeeVehicle("3200","Columbia","car");
echo "\n".$empVehicle -> salary;
echo "\n".$empVehicle -> companyName;
echo "\n".$empVehicle -> vehicle;
?>
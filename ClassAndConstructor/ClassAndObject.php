<?php
class User
{
    public $userName = 'Nithin';
    public $emailId = 'sathramnithin@gmail.com';

    public function addFriend(){
        return $this -> userName ." added a new Friend";
    }
}
$userOne = new User();
echo $userOne -> userName ."\n";
echo $userOne -> emailId ."\n";
echo $userOne -> addFriend()."\n";

$userTwo = new User();
$userTwo -> userName = 'Khyathi';
$userTwo -> emailId = 'khyathi@gmail.com';

echo $userTwo -> userName ."\n";
echo $userTwo -> emailId ."\n";
echo $userTwo -> addFriend()."\n";

 print_r(get_class_vars('User'));
 print_r(get_class_methods('User'));
?>
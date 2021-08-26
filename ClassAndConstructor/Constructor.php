<?php
class User
{
    public $userName;
    public $emailId;

    public function __construct($userName,$emailId)
    {
        $this->userName = $userName;
        $this->emailId = $emailId;
    }
    public function addFriend(){
        return $this -> userName ." added a new Friend";
    }
}

$userOne = new User('nithin','sathram@gmail.com');
$userTwo = new User('Khyathi','khyathi@gmail.com');

echo $userOne -> userName ."\n";
echo $userOne -> emailId ."\n";
echo $userOne -> addFriend()."\n";

echo $userTwo -> userName ."\n";
echo $userTwo -> emailId ."\n";
echo $userTwo -> addFriend()."\n";
?>
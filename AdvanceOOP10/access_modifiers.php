<?php
class Userdata
{
    public $user;
    public $userId;

    protected $age = "20";

    public function __construct($username, $userid)
    {
        $this->user = $username;
        $this->userId = $userid;
    }

    public function display()
    {
        echo $this->age . "Inside class" . "<br/>";
        echo "Username is: {$this->user} and user id is: {$this->userId}";
    }
}
class Admin extends Userdata
{
    public $level;
    public function display()
    {
        echo $this->age . "In the sub class" . "<br/>";
        echo "Username is: {$this->user} and user id is: {$this->userId} and user level is: {$this->level} ";
    }
}

$user = "Rabby";
$id = "20";
$ur = new Userdata($user, $id);

echo "<br/>";
$ur->display();

echo "<br/>";
$user = "Admin";
$id = "1";
$ad = new Admin($user, $id);
$ad->level = "Administrator";
$ad->display();

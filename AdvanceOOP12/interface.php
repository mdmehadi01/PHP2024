<?php
class Userdata
{
    public $user;
    public $userId;

    public function __construct($username, $userid)
    {
        $this->user = $username;
        $this->userId = $userid;
    }

    public function display()
    {

        echo "Username is: {$this->user} and user id is: {$this->userId}";
    }
}
class admin extends Userdata
{
    public $level;
    public function display()
    {

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
$admin = new admin($user, $id);
$admin->level = "administrator";
$admin->display();
///polymorphism
echo "<br/>";

if ($admin instanceof Userdata) {
    echo "Inherited.";
}

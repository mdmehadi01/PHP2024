<?php
final class Userdata /////final key word use korle ar override kora jai na error debe ta hole
{
    public $user;
    public $userId;

    public function __construct($username, $userid)
    {
        $this->user = $username;
        $this->userId = $userid;
    }

    public final function display()
    {
        echo "Username is: {$this->user} and user id is: {$this->userId}";
    }
}
class Admin extends Userdata
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
$ad = new Admin($user, $id);
$ad->level = "Administrator";
$ad->display();

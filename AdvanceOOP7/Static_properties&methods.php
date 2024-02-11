<?php
class Userdata
{
    public $user;
    public $userId;

    const NAME = "Md.Mehadi Hassan Hridoy";

    public static $age = "30";

    public function __construct($username, $userid)
    {
        $this->user = $username;
        $this->userId = $userid;

        echo "Username is: {$this->user} and user id is: {$this->userId}";
    }

    public static function display()
    {
        echo "Full name is: " . Userdata::NAME  . "<br/>";
        echo "Age is: " . self::$age;
    }
    public function __destruct()
    {
    }
}

$user = "Rabby";
$id = "20";
$ur = new Userdata($user, $id);

echo "<br/>";
Userdata::display();

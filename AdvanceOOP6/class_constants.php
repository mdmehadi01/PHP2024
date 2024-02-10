<?php

class userData
{

    public $user;
    public $userId;

    const NAME = "Md.Mehadi Hassan Rabby";

    public function __construct($username, $userid)
    {
        $this->user = $username;
        $this->userId = $userid;

        echo "The username is: {$this->user} and userid is: {$this->userId}";
    }

    public function display()
    {
        echo "Full name is: " . userData::NAME;
    }
    public function __destruct()
    {
    }
}
$user = "Rabby";
$id = "25";
$ur = new userData($user, $id);
echo "<br/>";
$ur->display();

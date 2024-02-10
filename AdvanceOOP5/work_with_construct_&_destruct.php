<?php
class Userdata
{
    public $user;
    public $userId;

    public function __construct($username, $userid)

    {
        $this->user = $username;
        $this->userId = $userid;

        echo "User name is {$this->user} and userId is {$this->userId}";
    }
    public function __destruct()
    {
        unset($this->user);
        unset($this->userId);
    }
}

$user = "Hassan";
$id = "20";

$ur = new Userdata($user, $id);

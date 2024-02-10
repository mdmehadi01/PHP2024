<?php

class person
{
    public $name;
    public $age;
    public $id;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function __destruct()

    {
        if (!empty($this->id)) {
            echo "Saving Person";
        }
    }
}

$personeOne = new person("Issita", 20);
$personeOne->setId(12);
unset($personeOne);

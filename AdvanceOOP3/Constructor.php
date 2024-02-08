<?php

class person
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function personalDetails()
    {
        echo "Person name is {$this->name} and Person age is{$this->age}";
    }
}

$personOne = new person("Isita", "20");
$personOne->personalDetails();

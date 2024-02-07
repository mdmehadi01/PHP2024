<?php

class person #class
{
    public $name; #   property
    public $age;

    public function personeName() # method
    {
        echo "Person Name is: " . $this->name . "<br/>";
    }
    public function personAge($value) #  method
    {
        echo "The Person Age is: " . $this->age = $value;
    }
}

$personOne = new person();
$personOne->name = "Issita";
$personOne->personeName();

$personOne->personAge("19");

// $personTwo = new person();
// $personTwo->age = "20";
// $personTwo->age();

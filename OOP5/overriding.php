<?php
// class base
// {
//     public $name = "Parent Class";
// }

// class derived extends base
// {
//     public $name = "Child Class";
// }

// $test = new derived();
// echo  $test->name;


class base
{
    public $name = "Parent Class";
    public function calc($a, $b)
    {
        return $a + $b;
    }
}

class derived extends base
{
    public $name = "Child Class";

    public function calc($a, $b)
    {
        return $a + $b;
    }
}

$test = new base();
echo  $test->calc(49, 10);

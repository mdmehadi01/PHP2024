<?php

class calculation
{
    public $a, $b, $c;

    function sun()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sum()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}



$c1 = new calculation();

$c1->a = 40;
$c1->b = 19;


$c2 = new calculation();

$c2->a = 40;
$c2->b = 19;

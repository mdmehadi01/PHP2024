<?php

class calculation
{
    public $a, $b, $c;

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
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

echo "The sum of two number is: " . $c1->sum() . "\n";
echo "The sub of two number is: " . $c2->sub() . "\n";

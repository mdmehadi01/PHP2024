<?php
class person
{
    public $name = "No Name";
    public $Age = 0;

    function __construct($name, $Age)
    {
        $this->name = $name;
        $this->Age = $Age;
    }
    function show()
    {
        echo $this->name . "-" . $this->Age  . "\n";
    }
}
$p1 = new person("Md.Mehadi Hassan", 20);
$p2 = new person("Md.Mehadi Hassan", 21);
//$p1->name="Md.Mehadi Hassan Rabby";
//$p1->Age = 20;

$p1->show();
$p2->show();

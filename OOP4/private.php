<?php
//privated
class base
{
    private $name;
    public function __construct($n)
    {
        $this->name = $n;
    }
    private function show()
    {
        echo "Your Name :" . $this->name . "<br>";
    }
}
class derived extends base
{
    public function get()
    {
        echo "Your Name :" . $this->name . "<br>";
    }
}

$test = new base("md.Mehadi"); //private property k drive class a use kora jai na
$test->name = "Md.Rabby"; //overwrite korlam
$test->show();

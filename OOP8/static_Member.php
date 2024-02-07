<?php
//simple oop system
// class base
// {
//     public $name = "Md.Mehadi Hassan Rabby";
//     public function show()
//     {
//         echo $this->name;
//     }
// }

// $test = new base();
// $test->show();




// class base
// {
//     public static $name = "Rabby";

//     public static function  show()
//     {
//         echo self::$name;
//     }
//     public function __construct($n)
//     {
//         self::$name = $n;
//     }
// }


// $test = new base("Boom Boom");
// $test->show();
# echo base::$name;
# base::show();


#ki vabe static member k Inherite korbo

class base
{
    public static $name = "Rabby";
}

class derived extends base
{

    public static function  show()
    {
        echo parent::$name;
    }
}



$test = new derived();
$test->show();
# echo base::$name;
# base::show();

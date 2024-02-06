<!DOCTYPE html>
<html>

<body>

    <?php
    // Interface definition
    interface Animal
    {
        public function makeSound();
    }

    // Class definitions
    class Cat implements Animal
    {
        public function makeSound()
        {
            echo " Meow ";
        }
    }

    class Dog implements Animal
    {
        public function makeSound()
        {
            echo " Bark ";
        }
    }

    class Mouse implements Animal
    {
        public function makeSound()
        {
            echo " Squeak ";
        }
    }

    // Create a list of animals
    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();
    $animals = array($cat, $dog, $mouse);

    // Tell the animals to make a sound
    foreach ($animals as $animal) {
        $animal->makeSound();
    }
    ?>

</body>

</html>

<?php

interface parent1
{
    function clac($a, $b);
}
interface parent2
{
    function sub($c, $d);
}
class childClass implements parent1, parent2
{
    public function clac($a, $b)
    {
        echo $a + $b;
    }
    public function sub($c, $d)
    {
        echo $c - $d;
    }
}

$test = new childClass();
$test->clac(20, 35);
echo "<br>";
$test->sub(80, 35);


?>
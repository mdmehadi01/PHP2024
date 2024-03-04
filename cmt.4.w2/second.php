<?php
$a=87;
$b=65;
$c=22;
if($a > $b && $a>$c){
    echo"largest number is a=".$a;
}
else if($b>$a && $b>$c){
    echo"Largest number is b=".$b;
}
elseif($c>$a && $c>$a){
    echo"largest number is c=".$c;
}
else{
    echo"all number are equal";
}
?>
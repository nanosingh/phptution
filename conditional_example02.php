<?php

$a = 1;
$b = 2;
$c = 3;

if ($a < $b)
{
    if($b<$c)
    {
        echo $a;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo $c;
    }
    elseif ($c<$b)
    {
        echo $a;
        echo "<br>";
        echo $c;
        echo "<br>";
        echo $b;
    }
    else
    {
        echo $a;
        echo "<br>";
        echo " Value of B = ". $b ."Value of C " .$c ;
    }
}
elseif ($b < $a) 
{
    if ($a<$c)
    {
        echo $b;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo $c;
    }
    elseif ($c<$a) 
    {
        echo $b;
        echo "<br>";
        echo $c;
        echo "<br>";
        echo $a;
    }
    else
    {
        echo $b;
        echo "<br>";
        echo " Value of B =". $c ."Value of C " . $a; 
    }
}
else 
{
    echo "Equal Value = ". $a;
}




?>
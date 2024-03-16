<?php

$a = 10;
$b = 10;
$c = 10;

if (($a<=$b) AND ($a<=$c))
{
    if($b<=$c)
    {
        echo $a;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo $c;
        echo "<br>";
    }
    elseif ($c<=$a)
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
elseif (($b<=$a) AND ($b<=$c))
{
    if($a<=$c)
    {
        echo $b;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo $c;
        echo "<br>";
    }
    elseif ($c<=$a)
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
        echo " Value of B = ". $a ."Value of C " .$c ;
    }
    
    
}
elseif (($c<=$a) AND ($c<=$b))
{
    if($a<=$b)
    {
        echo $c;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo $b;
        echo "<br>";
    }
    elseif ($b<=$a)
    {
        echo $c;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo $a;
    }
    else
    {
        echo $c;
        echo "<br>";
        echo " Value of B = ". $a ."Value of C " .$b ;
    }
}
else
{
    echo " Value of ABC Equal =". $a ;
}








?>
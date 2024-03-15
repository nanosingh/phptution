<?php

$divident = 109;
$divisor = 10;
 
if ($divisor == 0)
{
    echo "Error, Invalid Operation";

}
else 
{
    $remainder = $divident % $divisor ;

    if ($remainder == 0)
    {
        
        echo "Remainder = 0";
    }
    else 
    {
        echo "You Have Get Remainder  = " .$remainder ;
    }

        
}

?>
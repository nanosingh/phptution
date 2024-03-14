<?php
//simple Condtion

/* Sytanx 
if(condition){
    True statement;
}else{
    False statement;
} */



$marks =  100;

if($marks == 100){
    echo "Perfect";
}else{
    echo 'Not Perfect';
}

echo '<br />';
// multi level

$per = 700;
// multi condition
if($per <= 100 AND $per >= 0){
    echo  'Number is valid!';
    //echo '<br /><br/> Nested!<br />';
    echo '<br />';

            //nested condition
            if($per <=100 AND $per >=60){ 
                echo "Yor are passed with First Division."; 
            }elseif($per <60 AND $per >=45){
                echo "Yor are passed with Second Division."; 
            }elseif($per <45 AND $per >=33){
                 echo "Yor are passed with Third Division."; 
            }else{
                echo 'Failed';
            }

}else{
    echo "Invalid percentage! Must be 0 to 100 and current Percentage is: ". $per;
}


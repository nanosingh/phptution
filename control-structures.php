<?php
// first = 60;
// second = 45;
// third = 33;

$per = 150;

// if else condition

if($per <= 100 && $per >= 60){
    echo 'Passed with <b>First</b> Division.';
}elseif($per <60 AND $per >=45){
    echo 'Passed with <b>Second</b> Division.';
}elseif($per <45 AND $per >=33){
    echo 'Passed with <b>Third</b> Division.';
}else{
    echo 'Sorry, Better Luck next again. Status: <b>Failed!</b>.<br /><br />';
}




// Switch
$per = 60;
switch($per){
    case 50:
        echo "Passed with 50%";
        break;
    case 100:
        echo 'Passed with 100%';
        break;
    case 33:
        echo 'Passed with 33%';
        break;
    
        default:
        echo "Ÿou are Failed";
}

?>
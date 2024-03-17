<?php 
$audi = '40L';
$BMW = '60L';
$Jaguar = '90L';

$cars = array('Áudi', 'BMW', 'Jaguar', 'Bentle');
// echo '<pre>';
// print_r($cars);

foreach($cars as $car){
    echo "<br />". $car . ' Current price is: ';
    if($car =='Áudi'){ echo $audi; }else
    if($car =='BMW'){ echo $BMW; }else
    if($car =='Jaguar'){ echo $Jaguar; }else{ echo 'Price not Available';}
}

?>
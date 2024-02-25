<?php 
/*
Integers
Double
strings
boolean
array
object
*/

$int = 90;
$double = 90.5;
$string = "This is string";
$boolean = NULL;
$array = array("Narendra", "Äditya", "Mohit", 100);

$arr = array(
    'Name' => 'Narendra',
    'Age' => '30',
    'Gender' => 'Male',
    'Marks' => array(
        'Hindi' =>85, 'English'=>88, 'Math'=>99
    )
);

class person{
    function name(){
    $a = "This is name section";
    }
    function age(){
    echo "This is Age Section";
        return $a;
}
}

$object = new person;

// testing boolean

if($boolean){
    echo 'This condition is True!';
}else{
    echo 'This condition is False!';

}

echo "<hr><h2>Óbject</h2><pre>";

//print_r($array);
// print_r($arr);

// echo $arr['Marks']['English'];

echo $object->age();
//echo $object->name();
echo $a;
class cars{
    function model($key){
       $array = array(
        'model' => 'í20',
        'color' => 'black',
        'milage' => '14',
        'Km' => '9000'
       );

       return $array;
    }

}
$obj = new cars;
$ca = $obj->model('color');
// echo $ca['color'];

foreach($ca as $car){
    echo '<br />'.$car;
}

$int = 21;
echo '<br />Integer Value:'. $int;


// constant

define('INTE', 725);

echo "<br />";

echo INTE;
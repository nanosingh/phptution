<?php 

// //PHP Array Types
// Indexed Array 
// Associative Array 
// Multidimensional Array 

// // work
// Create arrays
// Access
// Update
// add 
// remove
// sort 
    
$degree = array('B.Tech', 'B.Sc', 'BBA', 'BA');





echo count($degree);
echo "<br>";
echo $degree[0];
echo "<br>";
echo $degree[1];
echo "<br>";
echo $degree[2];
echo "<br>";
echo $degree[3];

var_dump($degree);

$mix = [
    'ram',
    'Mohan',
    'rai',
    25,
    23.45
];

echo '<pre>';
var_dump($mix);

$mixed = [
    'ram' => '10000', 
    'Mohan'=>'20000',
    'rai'=>'30000'
];

echo '<br>';
echo $mixed['ram'];
echo '<br>';
echo $mixed['Mohan'];
echo '<br>';
echo $mixed['rai'];

echo "<hr>";
$color = [];
$color[1]='red';
$color[2]='green';
$color[3]='blue';
$color[1]='yellow';



print_r ($color);
echo $color[1];


echo "<hr/>";

echo "<br>";
sort($color);

print_r($color);

rsort(); // descending order sorting
asort(); // sorting in ascending order of assocaiatev array according to value
ksort(); // sorting in ascending order of assocaiatev array according to key

?>
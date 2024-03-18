<?php 
// array functions
$pan = strtoupper('asdpk3450d');
$gst = '09asdpk3450d1z1';

$arr = array(
'pan' => $pan,
'gst' => $gst,
);

$colors = array('red', 'yellow', 'green', 'blue', 'black', 'brown');

// array all key lower to upper case
$upper = array_change_key_case($arr, CASE_UPPER);

// chunk splits an array into chunks of array
$chunk = array_chunk($colors, 2);


//array column, return the value from a single column inthe the input array

$ar = array(
    array(
    'Name' => 'Árun',   
    'pan' => "asdpk3450d",
    'gst' => "09asdpk3450d1z1",
),
array(
    'Name' => 'Varun',   
    'pan' => "asdpk3450e",
    'gst' => "09asdpk3450e1z1",
),
array(
        'Name' => 'Tarun',   
        'pan' => "asdpk3450f",
        'gst' => "09asdpk3450f1z1",
    ),
    array(
        'Name' => 'Garun',   
        'pan' => "asdpk3450g",
    'gst' => "09asdpk3450g1z1",
    )
    );
$name = array_column($ar, 'Name');
$pan = array_column($ar, 'pan');


//array Combine
$combine = array_combine($name, $pan);

// merger array
$merge = array_merge($name, $pan);

// count value
$count_value = array_count_values($merge);

//difference between two array
$a1 = array("yellow", "green", "red", "blue", "black");
$a2 = array("yellow", "green", "red", "blue", "brown");
$diff = array_diff($a2, $a1);


// Array Intersect, Compare the array and return the matches
$intersect = array_intersect($a1, $a2);

//Array sum 
$num = array(10,15,20,15,50);
echo $sum = array_sum($num);


// In Array we use a1 array in above as example
if(in_array("brown", $a1)){
    echo "Found!";
}else{
    echo "Not Found!";
}

echo "<pre>";
print_r($num);



?>

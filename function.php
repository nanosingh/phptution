<?php 

//implode => array to string

$arr = array(
    'Mon', 'Tue', 'Wed', 'Fri'
);

print_r($arr);
$ts = implode(" | ", $arr);



?>
<table width="100%" border='1'>
    <tr>
        <th>Train No.</th>
        <th>Train Name</th>
        <th>Running Days</th>
    </tr>
    <tr>
        <td>6656</td>
        <td>XYZ Express</td>
        <td><?= $ts; ?></td>
    </tr>
</table>


<?php 
//explode => String to array

$exp = explode(" | ", $ts);
print_r($exp);
?>



<br /><hr><br />

<?php 

// HTMLEntities
$str ='<a href="#">Hello and .&copy .Welcome</a>';
echo "<br>";
//echo $str;
echo "<br>";
echo htmlentities($str);

echo "<br>";
//HTML Entities Decode

echo html_entity_decode($str);
echo '<br>';
$string = "hello welcome to first page of html entities";
echo $string;
echo '<br>';
$low = strtoupper($string);
echo lcfirst($low);

echo "<br>";
$all_lower= strtolower($low);
echo $all_lower;
$first_upper= ucwords($all_lower);
echo "<br>";
echo $first_upper;

echo "<br>";
$value = 2767.99;
setlocale(LC_MONETARY, "en_IN");
$money_format= money_format("%i", $value);
echo $money_format;


?>


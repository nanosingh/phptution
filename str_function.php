<?php

// explode function is used to convert string to array

$str = "Hello this function is used to convert string to array";

$arr = explode(" ", $str);

echo "<pre>";
print_r($arr);
echo "</pre>";

//implode function is used to convert array to string

$emp_id = array(1,2,3,4);
$emp_name = array('Danil','Jons peeter','Imran','Davil');
$emp_post = array('Manager','Super Visor','Poien',"CEO");
$string = implode(" || ", $arr);

$emp_idd = implode(' ',$emp_id);
$emp_namee = implode(' ',$emp_name);
$emp_postt = implode(' ',$emp_post);

echo "<br>";
echo $emp_idd;
echo "<br>";
echo $emp_namee;
echo "<br>";
echo $emp_postt;
?>

<table width ='50%' border= '2'>
    <tr>
        <th>Emp ID</th>
        <th>Emp Name</th>
        <th>Emp Post</th>
    </tr>
    <tr>
        <td><?=$emp_idd; ?></td>
        <td><?=$emp_namee; ?></td>
        <td><?=$emp_postt; ?></td>
    </tr>
    <tr>
        <td><?=$emp_id[0]; ?></td>
        <td><?=$emp_name[0]; ?></td>
        <td><?=$emp_post[0]; ?></td>
    </tr>
    <tr>
        <td><?=$emp_id[1]; ?></td>
        <td><?=$emp_name[1]; ?></td>
        <td><?=$emp_post[1]; ?></td>
    </tr>
    <tr>
        <td><?=$emp_id[2]; ?></td>
        <td><?=$emp_name[2]; ?></td>
        <td><?=$emp_post[2]; ?></td>
    </tr>
    <tr>
        <td><?=$emp_id[3]; ?></td>
        <td><?=$emp_name[3]; ?></td>
        <td><?=$emp_post[3]; ?></td>
    </tr>


</table>







<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'student';


$conn = mysqli_connect($host, $user, $pass, $db);
if($conn){
	//echo 'Connected to db!';
}else{
	die('Connection Fail'. mysqli_connect_error());
}

$sql = "select * from student_profile order by id ASC";
$row = mysqli_query($conn, $sql);
//echo mysqli_num_rows($row);
//echo "<hr />First 3 Records";
?>
<a href="insert.php">Add Record</a>
<?php 
echo '<table width="100%" style="border:1px solid green";>
<tr>
<th align="left">ID</th>
<th>Roll No</th>
<th align="right">Name</th>
<th align="right">Action</th>
</tr>';
if(mysqli_num_rows($row) >0){
foreach($row as $value){
?>
<tr>
    <td><?= $value['id']; ?></td>
    <td align="center"><?= $value['roll_no']; ?></td>
    <td align="right"><?= $value['name']; ?></td>
    <td align="right"><a href="getdata.php?update=<?= $value['id']; ?>">Update</a> | <a href="delete.php?id=<?= $value['id']?>">Delete</a></td>
</tr>
<?php
}
?>
</table>
<?php
}else{
    echo "</table>";
    echo "No record Found!";
}
mysqli_close($conn);
?>





<a href="https://google.com/search?q=itways">Search</a>
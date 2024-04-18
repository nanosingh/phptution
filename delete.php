<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'student';
$db2 = 'db2';

$id = $_GET['id'];
$conn = mysqli_connect($host, $user, $pass, $db);
if($conn){
	echo 'Connected to db!';
}else{
	die('Connection Fail'. mysqli_connect_error());
}

$sql = "delete from student_profile where id ='$id'";
$row = mysqli_query($conn, $sql);
if($row){
    echo "Record Deleted!";
}else{
    echo "Not Deleted!";

}
mysqli_close($conn);
?>
<br /><center>
<a href="read2.php">View Records</a></center>
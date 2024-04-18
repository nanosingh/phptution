<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'student';

$conn = mysqli_connect($host, $user, $pass, $db);
if($conn){
	echo 'Connected to db!';
}else{
	die('Connection Fail'. mysqli_connect_error());
}
$id = $_POST['id'];
$rollno = $_POST['roll_no'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$father = $_POST['father'];
$email = $_POST['email'];
$address = $_POST['address'];
$status = $_POST['status'];
$gender = $_POST['gender'];

$sql = "update student_profile set roll_no='$rollno', name='$name', dob='$dob', father='$father', email='$email', address='$address', status='$status', sex='$gender' where id = '$id'";
// echo $sql; 
// die;

if(mysqli_query($conn, $sql)){
	echo "Record Updated!";
}else{
	echo "Not able to Update Record: ". mysqli_error($conn);
}
mysqli_close($conn);
?>
<a href="read2.php">Show All Data</a>
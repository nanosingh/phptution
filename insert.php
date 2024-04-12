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

//$sql = "create table fee(id INT AUTO_INCREMENT, student_id INT(20) NOT NULL, fee_recieved INT(50) NOT NULL, primary key(id))";

$sql = "insert into fee (id, student_id, fee_recieved) values('2', '2', '1000')";


if(mysqli_query($conn, $sql)){
	echo "Record Created!";
}else{
	echo "Not able to create Table: ". mysqli_error($conn);
}
mysqli_close($conn);
?>
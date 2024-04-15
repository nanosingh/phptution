<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'student';
$db2 = 'db2';

$conn = mysqli_connect($host, $user, $pass, $db);
if($conn){
	echo 'Connected to db!';
}else{
	die('Connection Fail'. mysqli_connect_error());
}

$sql = "select * from student_profile";
$row = mysqli_query($conn, $sql);
//echo mysqli_num_rows($row);
if(mysqli_num_rows($row) >0){
    while($value = mysqli_fetch_assoc($row)){
echo "<pre>";
        print_r($value);
        echo "<br />Roll No: ". $value['roll_no'];
        echo "<br />Name: {$value['name']}";
        echo "<br />DOB: {$value['dob']}";
        echo "<br />Father: {$value['father']}";
        echo "<br />email: {$value['email']} <hr />";
    }
}else{
    echo "No record Found!";
}
mysqli_close($conn);
?>
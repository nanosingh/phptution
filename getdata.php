<?php 

if(isset($_GET['update'])){
echo $uid = $_GET['update'];




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

$sql = "select * from student_profile where id = $uid";
$row = mysqli_query($conn, $sql);

//echo mysqli_num_rows($row);
if(mysqli_num_rows($row) >0){
    $value = mysqli_fetch_assoc($row);
    // print_r($value);
}else{
    echo "No record Found!";
}
mysqli_close($conn);
}else{
    echo "Parameter Not Found";
}
?>

<body>
    <form action = "update.php" method="POST">
        ID : <input type="number" name="showid" value="<?= $value['id']; ?>" disable><br />
        Roll No. : <input type="number" name="roll_no" value="<?= $value['roll_no']; ?>" ><br />
        Name : <input type="text" name="name" value="<?= $value['name']; ?>" ><br />
        DOB : <input type="date" name="dob" value="<?= $value['dob']; ?>" ><br />
        Father : <input type="text" name="father" value="<?= $value['father']; ?>" ><br />
        Email : <input type="text" name="email" value="<?= $value['email']; ?>" ><br />
        Gender : <input type="text" name="gender" value="<?= $value['sex']; ?>" ><br />
        Address : <textarea name="address"><?= $value['address']; ?></textarea><br />
        Status : <input type="number" name="status" value="<?= $value['status']; ?>" ><br />
        <input type="hidden" name="id" value="<?= $value['id'];?>">
        <br />
        <input type="submit" value="UPDATE">
    </from>
</body>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programs with Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
table, th, td {
  border:1px solid black;
}
</style>
</head>

<body>
    <?php
    
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $bd = 'student';

    $conn = mysqli_connect($host, $user, $pass, $bd);
    if($conn){
        echo 'Connected';
    }else{
        die('Connection Failed'. mysqli_connect_error());
        
    }

    $name = $_GET['name'];
    $roll_no = $_GET['roll_no'];
    $address = $_GET['address'];
    $sql_insert = "INSERT INTO stu_profile (name, roll_no, address )
    VALUES ('$name', '$roll_no','$address')";
    
    ?>
    <div class="container">
        <div class="row" style="text-align:justify;">
            <div class="col-sm-12">

                <div style="border:1px dashed blue; padding: 15px; background-color:ACE2E1;">
                    <center>
                        <h2>JCESS Student Database</h2>

                    </center>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2" style="text-align:justify;">
            <div class="col-sm-6">
                <form action='' method='get'>
                    <div style="border:1px dashed blue; padding: 15px; background-color:ACE2E1;">
                        <center>
                            <h2>Enter Student Detail</h2>

                        </center>
                        
                        <input type='text' name='name' value='Student Name' class='form-control mb-3' required>

                        <input type='text' name='roll_no' value='Roll Number' class='form-control mb-3' required>
                        <input type='text' name='address' value='Student Address' class='form-control mb-3'>
                        <input type='submit' name='submit' class='btn btn-primary'>
                    </div>
                    <?php

                  

                   if(mysqli_query($conn,$sql_insert)){
                    echo "Record Inserted";
                }   else {
                    echo "Sorry! Record Not Inserted";
                }
                   ?>
                </form>
                
            </div>
            <div class="col-sm-6">
                <form action='' method='get'>
                    <div style="border:1px dashed blue; padding: 15px; background-color:ACE2E1;">
                        <center>
                            <h2>Show Enter Detail</h2>

                        </center>

                    </div>
                    <div class='col-sm-12'>
                        <div style="border:1px dashed blue; padding: 15px; background-color:ACE2E1;">
                       <table >
                        <tr>
                            <th>Name</th>
                            <th>Roll No: </th>
                            <th>Address </th>
                    
                    </tr>    
                        <tr>

                                <td><?=$_GET['name'] ?></td></br>
                                
                                <td><?=$_GET['roll_no']?></td></br>
                                <td><?=$_GET['address']?></td></br>

                            </tr>
            </table>

                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


    <?php mysqli_close($conn); ?>
</body>

</html>
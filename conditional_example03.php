<!DOCTYPE html>
<html>
<head>
    <title>Greeting Program</title>
</head>
<body>
    <h2>Welcome to the Our Program</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        First_Number: <input type="number" name="var1">
        <br><br>
        Second_Number: <input type="number" name="var2">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Function to validate input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
        $var1 = test_input($_POST["var1"]);
        $var2 = test_input($_POST["var2"]);

        echo '<br /><br/> <br />';


        if ($var1 > $var2) {
        // Display greeting and age after ten years
        echo "Hello ! First Number is Greater than Second Number";
    }
    else 
    {
        echo "Hello ! Second Number is Greater than First Number";
    }
    ?>
</body>
</html>

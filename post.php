<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
 
</head>
<body>

    <div class ="container text center">
        <div class = "row">
            <div class = "col">

                <form action = "" method = "POST"> 
                    <div class = "col mb-3">
                        <label for= "side1" > Please Input First Number: </label>
                        <input type = "number" name = "side1" id = "side1">

                    </div>
                    <div class = "col mb-3">
                        <label for= "side2" > Please Input Second Number: </label>
                        <input type = "number" name="side2" id = "side2">

                    </div>
                    <div class = "col mb-3">
                        <button type ="submit" name = "submit" class = "btn btn-Success"> Submit</button>

                    </div>
                </form>
                <label> </label>
            
            </div>
            <div class = "col md-3">

                <?php
                    if(isset($_POST['submit']))
                    {
                        $side1 = $_POST['side1'];
                        $side2 = $_POST['side2'];
                        echo "Your First Input No. = ". $side1;
                        echo "<br>";
                        echo "Your Second Input No. = ". $side2;

                    }
                ?>
                <input type = number>
                <input type = number>
            
            </div>
            <div class = "col md-3">
                <?php
                $avg = ($side1 + $side2)/2;
                echo "Average of First & Second No. = " . $avg;
                ?>
            </div>
        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
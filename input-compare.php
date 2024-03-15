<!DOCTYPE html>  
<html lang="en">  
<head>  
  <title>Bootstrap Example</title>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>  
</head>  
<body>  
  
<div class="container">  
    <div class="row">
    <div class="col-sm-6">
  <h2>Form</h2>  
  <form method="POST" action="">  
    <div class="form-group">  
      <label for="value1">First Value:</label>  
      <input type="text"  class="form-control" id="value1" name="value1" placeholder="Enter email">  
    </div>  
    <div class="form-group">  
      <label for="value2">Second Value:</label>  
      <input type="text"  class="form-control" id="value2" name="value2"  placeholder="Enter password">  
    </div>  
    <!-- <div class="form-check">  
      <label class="form-check-label">  
        <input class="form-check-input" type="checkbox"> Remember me  
      </label>  
    </div>   -->
    <button type="submit" name="enter" class="btn btn-primary">Submit</button>  
  </form>  
</div>
<div class="col-sm-6">
    <?php
    phpinfo(); 
    if(isset($_POST['enter']) ){
        $a =  $_POST['value1'];
        $b = $_POST['value2'];

        if(is_int($a==false))
        {
            echo "Please provide correct input for first value";
        }
        if(is_int($b==false))
        {
            echo "Please provide correct input for Second value";
        }
        if($a>$b){ echo "First value ".$a." is greater than Second value ".$b; }
        elseif($a<$b){ echo "First value ".$a." is Less than Second value ".$b; }
        elseif($a==$b){ echo "First value ".$a." is Equals to Second value ".$b; }
        else{ echo "Wrong Input"; }
    }else{
        echo "Wrong Input Out";
    }

    
    ?>
</div>
</div>

</div>  
  
</body>  
</html> 
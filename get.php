<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programs with Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
  <div class="row mt-5" style="text-align:justify;">
    <div class="col-sm-6 " > 
        <form action = '' method = 'GET'>
          <input type = 'text' name = "gst">
          <input type = 'submit' name= 'submit'>
        </form>

    <form action= "" method = "GET">
    <div class="row mb-5">
    <label for="side-1" class="col-sm-2 col-form-label">Side 1</label>
    <div class="col-sm-10">
      <input type="number"  class="form-control" id="side-1" name="side1">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="side-2" class="col-sm-2 col-form-label">Side 2</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name= "side2" id="side-2">
    </div>
  </div>


  <div class="row mb-5">
    
    <div class="col-sm-10">
   <input type= "submit" class = "btn btn-primary" name = "submit">
    <!-- <a href= '#' class = "btn btn-primary">  Click Here</a>  -->

    </div>
  </div>
</form>


    </div>

    <div class="col-sm-6">
      <?php
      if (isset($_GET['gst']))
      {

       $side1= "https://razorpay.com/gst-number-search/" . $_GET['gst']; 
       echo '<a target="_blank" href = "'.$side1.'" class = "btn btn-primary" >SEARCH</a>';
      } 
      if (isset($_GET['submit']))
      {

       $side1= $_GET['side1']; 
        $side2= $_GET['side2']; 
        $res = $side1*$side2;
        $ans = $res/2;
        echo "Base of Traingle = ". $side1;
        echo "<br>";
        echo "Height of Traingle = ". $side2;
        echo "<br>";
        echo "Area of Triangle = " . $ans;
       }
        
        ?>
    </div>
  </div>

  
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
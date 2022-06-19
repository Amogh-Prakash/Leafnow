<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="agrostyle.css">
    <title>Add Seeds</title>
    <style>
      body{
        background-color:  #b3b3b3;
      }
    </style>
  </head>
  <body>
    <p id = "par1" style = "font-size: 40px ; color: black ;text-align: center">Add a new Seed!</p>
    <!-- Create a form and add the new Seed  -->
    
    <form action = "addcrop_todb.php" method = "POST">
  <div class="mb-3">
    <label for="cname" class="form-label">Seed-Name</label>
    <input type="text" class="form-control" id="cname" name="cname" aria-describedby="emailHelp" required>
    <div id="cname" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="rate" class="form-label">Rate</label>
    <input type="text" class="form-control" id="rate" name="rate" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text"></div>
    <p style = "opacity:70%">Rate per pack </p>
  </div>
 
  <button type="submit" id="btnfarmer" class="btn btn-primary">ADD</button>
  </div>
</form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

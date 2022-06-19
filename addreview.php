<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$con = mysqli_connect($server,$username,$password,$database);
session_start();
$_SESSION['f_name'] =$_GET['id'];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
.mb-3{
    width: 30%;
    margin: 20px;
}
#ha{
      font-size: 40px;
      color: rgb(3, 90, 15);
      text-align: center;
      margin: 30px;
}

</style>
    <title>Add Review</title>
  </head>
  <body>
    <h1 id="ha">Add a review</h1>
   
   
<form action = "addreview_todb.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Crop name</label>
    <input type="text" class="form-control" id="c_name" name="c_name" required aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="review" class="form-label">Review</label>
    <br>
    <textarea id="review" name="review" rows="7" cols="52" required>
</textarea >
 </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Submit</button>
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
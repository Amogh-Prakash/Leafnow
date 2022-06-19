<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$con = mysqli_connect($server,$username,$password,$database);
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: index.php");
  exit;
}
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
         .ref{
        background-color: rgba(19, 69, 231, 0.719);
      text-decoration: none;
      padding : 6px;    
      margin :10px;
      font-size: 1.2em;
      color: aliceblue;
    }
      #ha{
      font-size: 40px;
      color: rgb(3, 90, 15);
      text-align: center;
    }
    body{
      background-color: #e0b3ff;
    }
    </style>
    <title>Buyer Page</title>
  </head>
  <body>
  <p id = "ha">Seeds List</p>


<table class="table" id = "myTable2">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Seed Name</th>
      <th scope="col">Rate</th>
      <th scope="col">Seller Name</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql1 = "SELECT * FROM `cropdb` ";
    $result = mysqli_query($con,$sql1);
    $sno = 0;
    while($row = mysqli_fetch_assoc($result)){
      $sno = $sno+1;
    echo " <tr>
      <th scope='row'>".$sno."</th>
      <td>".$row['c_name']."</td>
      <td>".$row['rate']."</td>
      <td>".$row['f_name']."</td>
      <td>".$row['f_contact']."</td>
      <td>
      <a href ='addreview.php?id= ".$row['f_name']."' class = 'ref'>Review</a>
      </td>
    </tr>";
    }  
?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
  </body>
</html>
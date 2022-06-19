<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$conn = mysqli_connect($server,$username,$password,$database);
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
    .h1{
        margin : 20px;
        font-size: 40px ;
         color: black ;
         text-align: center
    }
</style>
    <title></title>
  </head>
  <body>
    <h1 class ="h1">Seller's DataBase</h1>

    <table class="table" id = "myTabl2">
    <thead>
      <tr>
        <th scope="col">S.No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Contact.No</th>
      </tr>
    </thead>
    <tbody>
    <?php

      $sql1 = "SELECT * FROM `farmerdb`";
      $result = mysqli_query($conn,$sql1);
      $sno = 0;
      while($row = mysqli_fetch_assoc($result)){
        $sno = $sno+1;
      echo " <tr>
        <th scope='row'>".$sno."</th>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['address']."</td>
        <td>".$row['phone']."</td>
        <td>
        <a href ='deletefarmer.php?id= ".$row['userid']."' class = 'ref'>Remove</a>
        </td>
      </tr>";
      }
      // if(isset($_GET['id'])){
      
      //   $id = $_GET['id'];
      //   echo $id;
      //   $sql4 = "DELETE FROM `farmerdb` WHERE `userid` = '$id'";
      //   $delete = mysqli_query($conn,$sql4);
    
      //   if($delete){
      //       echo '<script>alert("The farmer is removed!")</script>';
      //   header("location:adm_farmerdis.php");
      //   }
    // }
    ?> 





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
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$con = mysqli_connect($server,$username,$password,$database);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="agrostyle1.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css.css">
   
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
      background-color:  #b3b3b3;

        }
    </style>
    <title>My Seeds</title>
  </head>
  <body>
    <p id = "ha">My Seeds</p>
<!-- Display the crops of the farmer-->
    


<table class="table" id = "myTable1">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Seed Name</th>
      <th scope="col">Rate(per pack)</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    session_start();
    $fname1 = $_SESSION['username'];
    $sql1 = "SELECT * FROM `cropdb` WHERE f_name = '$fname1' ";
    $result = mysqli_query($con,$sql1);
    $sno = 0;
    while($row = mysqli_fetch_assoc($result)){
      $sno = $sno+1;
    echo " <tr>
      <th scope='row'>".$sno."</th>
      <td>".$row['c_name']."</td>
      <td>".$row['rate']."</td>
      <td>
      <a href ='displaycrops.php?id= ".$row['c_id']."' class = 'ref'>Delete</a>
      </td>
    </tr>";
    

    }
    
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql = "DELETE FROM `cropdb` WHERE `c_id`= '$id'";
      $delete = mysqli_query($con,$sql);
      
      if($delete){
      echo '<script>alert("The crop is deleted!")</script>';
      header("location:displaycrops.php");
      } 
    }
  ?>
    
    
  </tbody>
</table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

  </body>
</html>
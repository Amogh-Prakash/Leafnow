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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="agrostyle.css" rel="stylesheet" >
    <style>
      body{
        background-image:url('index.jpg');
        background-repeat:no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%; 
      }
      p{
        font-size:20px;
        font-weight: bold;
 color:black;
      }
      h1{
        color:black;
      }

    </style>
    <title>Agro Management</title>
  </head>
  <body>

  <!-- Login Modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
  Login modal
</button> -->

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="loginfarmer.php" method="POST">
            <div class="mb-3">
              <label for="userid" class="form-label">User ID</label>
              <input type="text" class="form-control" id="fname" name = "fname" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Enter the user id  </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="fpasswd" name = "fpasswd">
            </div>
            <div class="mb-3">
                <div>
                    <p>Don't have an account?<a href="signupfarmer.php">Sign Up</a></p>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="loginModal2" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="loginbuyer.php" method="POST">
            <div class="mb-3">
              <label for="userid" class="form-label">User ID</label>
              <input type="text" class="form-control" id="bname" name = "bname" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Enter the user id  </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="bpasswd" name = "bpasswd">
            </div>
            <div class="mb-3">
                <div>
                    <p>Don't have an account?<a href="signupbuyer.php">Sign Up</a></p>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
      
    </div>
  </div>
</div>
<!-- As a heading -->

<h1 id = "h1" >LEAF NOW-<p>Keep planting seeds you never know what may take route</p></h1>
<div class="container">
    <div class="cont1">
        <h2>For Sellers</h2>
        <p>We'll take care of your Seed needs.</p>
        <button type="button" class=' login1 btn-lg btn-primary ' data.target = "modal" data.target = '#loginModal'>Login</button>
    </div>
    <div class="cont2">
        <h2>For Buyers</h2>
        <p>Sow a seed today,Harvest Tomorrow.</p>
        <button type="button" class='login2 btn-lg btn-primary'>Start Buying</button>
    </div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        logini = document.getElementsByClassName('login1');
        Array.from(logini).forEach((element)=>{
            element.addEventListener("click",(e)=>{
                console.log("login1",e);
               $('#loginModal').modal('toggle');
        })
        })
        

    </script>
    <script>
        logini = document.getElementsByClassName('login2');
        Array.from(logini).forEach((element)=>{
            element.addEventListener("click",(e)=>{
                console.log("login2",e);
               $('#loginModal2').modal('toggle');
        })
        })
        

    </script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  </body>
</html>
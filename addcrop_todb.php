<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$con = mysqli_connect($server,$username,$password,$database);

    if($con){
    $cname=$_POST["cname"];
    $rate=$_POST["rate"];

    session_start();
    
    $fname = $_SESSION['username'];

    $sql1 = "SELECT phone from farmerdb where name = '$fname'";
    $res = mysqli_query($con , $sql1);
    $user = mysqli_fetch_assoc($res);
    $fcontact = implode($user);

    $sql = "INSERT INTO `cropdb` (`c_id`, `c_name`, `rate`, `f_name`, `f_contact`) VALUES (NULL, '$cname', '$rate', '$fname', '$fcontact')";
    $result2 = mysqli_query($con, $sql);

    if($result2){
      
      echo" Crop is added successfully!";
      header('location:farmer.php');
    }
    }

    ?>
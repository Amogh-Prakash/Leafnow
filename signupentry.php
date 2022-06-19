<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$con = mysqli_connect($server,$username,$password,$database);

    if($con){
    $name=$_POST["fname"];
    $farmerid=$_POST["fid"];
    $email=$_POST["femail"];
    $addr=$_POST["faddr"];
    $phone=$_POST["fphone"];
    $passwd=$_POST["fpasswd"];

    $existsSql = "SELECT * FROM 'farmerdb' where userid = 'farmerid'";
    $result = mysqli_query($con, $existsSql);
    $num = mysqli_num_rows($result);
    if($num>0){
        echo "User ID already taken";
    }


    $sql = "INSERT INTO `farmerdb` (`name`, `userid`, `email`, `address`, `phone`, `passwd`) VALUES ('$name', '$farmerid', '$email', '$addr', '$phone', '$passwd');";
    $result2 = mysqli_query($con, $sql);

   header('location:index.php');
    }
?>
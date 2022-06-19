<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$con = mysqli_connect($server,$username,$password,$database);

    if($con){
    $name=$_POST["bname"];
    $buyerid=$_POST["bid"];
    $phone=$_POST["bphone"];
    $passwd=$_POST["bpasswd"];

    $sql = "INSERT INTO `buyerdb` (`name`, `userid`, `phone`, `passwd`) VALUES ('$name', '$buyerid', '$phone', '$passwd');";
    $result = mysqli_query($con, $sql);

   header('location:index.php');
    }
?>
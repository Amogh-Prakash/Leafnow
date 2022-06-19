<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$con = mysqli_connect($server,$username,$password,$database);

$f_id = $_GET['id'];
$sql = "DELETE FROM `farmerdb` WHERE `userid`='$f_id'";
$result = mysqli_query($con,$sql);


?>
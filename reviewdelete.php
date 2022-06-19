<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$con = mysqli_connect($server,$username,$password,$database);

$feed_id = $_GET['id'];
$sql = "DELETE FROM `reviewdb` WHERE `feedback_id` = '$feed_id'";
$result = mysqli_query($con,$sql);

if($result){
    echo '<script>alert("The review is deleted!")</script>';
  
}
header("location:adm_reviewdis.php");
?>
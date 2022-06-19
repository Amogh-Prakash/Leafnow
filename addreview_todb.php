<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$con = mysqli_connect($server,$username,$password,$database);
session_start();

    if(isset($_POST['review'])){ 
    $c_name=$_POST['c_name'];
    $review = $_POST['review'];
    $b_id = $_SESSION['buyerid'];
    $f_name =$_SESSION['f_name'];

    $sql3 = "INSERT INTO `reviewdb`(`feedback_id`, `f_name`, `c_name`, `review`, `b_id`) VALUES ('','$f_name','$c_name','$review','$b_id')";
    $result = mysqli_query($con,$sql3);

    if($result){
        header("location:buyer.php");
    }
}
    ?>
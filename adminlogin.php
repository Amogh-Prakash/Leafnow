<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$conn = mysqli_connect($server,$username,$password,$database);

    $username = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * from admindb where userid = '$username' AND passwd = '$pass'";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);

    if($num==1){
        session_start();
        header("location:adminpage.php");
    }
    else{
        echo '<script>alert("Invalid credentials")</script>';
    
        }

        ?>
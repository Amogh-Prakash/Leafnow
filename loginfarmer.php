<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$conn = mysqli_connect($server,$username,$password,$database);

    $farmerid = $_POST["fname"];
    $passwd = $_POST["fpasswd"];

    $sql = "SELECT * from farmerdb where userid = '$farmerid' AND passwd = '$passwd'";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);

    if($num==1){
        $sql1 = "SELECT name from farmerdb where userid = '$farmerid' AND passwd = '$passwd'";
        $res = mysqli_query($conn , $sql1);
        $user = mysqli_fetch_assoc($res);
        $username = implode($user);
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username; 
        $_SESSION['farmerid'] = $farmerid;
        header('location:farmer.php');
    }
    else{
        echo '<script>alert("Invalid credentials")</script>';
        
    }

?>

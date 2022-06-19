<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$conn = mysqli_connect($server,$username,$password,$database);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM `buyerdb` WHERE userid = '$id'";
    $delete = mysqli_query($conn,$sql);

    if($delete){
        echo '<script>alert("The buyer is removed!")</script>';
    }
}
?> 
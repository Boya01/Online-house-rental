<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="house_rental";
$conn = new mysqli($servername,$username,$password,$db);

if($conn-> connect_error){
    die("connection failed: ".$conn->connect_error);
}
// "<script> alert('submitted succesfully')</script>";
// echo "connected succesfully <br> <br>";
?>
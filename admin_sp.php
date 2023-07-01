<?php 
// INSERT INTO `admin`(`admin_id`, `admin_fname`, `admin_mname`, `admin_lname`, `admin_status`, `admin_level`, `admin_pwd`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
include('../connect/connect.php');
 session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
$fname = $_POST['fname'];
$lname =$_POST['lname'];
$uname =$_POST['uname'];
$email =$_POST['admin_email'];
$status =$_POST['status'];
$level  =$_POST['level'];
$pwd =$_POST['pwd'];

$sql ="INSERT INTO `admin`(`admin_fname`, `admin_lname`, `admin_username`, `admin_email`, `admin_pwd`, `admin_status`, `admin_level`) VALUES ('$fname','$lname','$uname ','$email','$pwd','$status','$level')";

if(mysqli_query($conn, $sql)){
    "<script> alert('submitted succesfully')</script>";
}
else{
    echo'error';
}
if(mysqli_query($conn, $sql)){
    header("location: admin.php");
   }
   else {
    echo "try again";
   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(white,green);
            transform: translate(30%,5%);
        }
        .signup{
            background: inherit;
            max-width: 400px;
            height: 80%;
         
        }
        input{
        float:right;
           margin: 2px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="signup">
            <h1>ADMIN SIGN UP</h1>
        <label for="">First Name</label>
        <input type="text" name="fname" required><br><br>
        <label for="">Last Name</label>
        <input type="text" name="lname" required><br><br>
        <label for="username">Enter a Username</label>
        <input type="text" name="uname" required><br><br>
        <label for="">Enter your email</label>
        <input type="text" name="admin_email" required><br><br>
        <label for="">Status </label>
        <input type="text" name="status" required><br><br>
        <label for="">Level </label>
        <input type="text" name="level" required><br><br>
        <label for="">Password </label>
        <input type="password" name="pwd" required><br><br>
        <input type="submit" name="submit" value="submit">
    </div>
</body>
</html>
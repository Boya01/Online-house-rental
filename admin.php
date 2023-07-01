<?php

include('connect/connect.php');
if(isset($_POST['submit'])){
    $house_pic = $_FILES['file']['name'];
    //$error = $house_pic['error'];
   // print_r($error);
    $tmpname = $_FILES['file']['tmp_name'];
    $newlocation = "upload/". $house_pic;
  
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES['file']['name']);
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $allowed = array('pdf', 'jpg', 'jpeg', 'png');
    print_r($allowed);
    $fname =$_POST['admin_fname'];
   
    $lname =$_POST['admin_lname'];
    $email =$_POST['admin_email'];
    $uname =  $_POST['admin_username'];
    $pwd =$_POST['admin_pwd'];
    $status =$_POST['admin_status'];
    $level=$_POST['admin_level'];

    if(file_exists($target_file)) {
        echo"file already exists";
    }
    else if(!in_array($fileType, $allowed)) {
      echo"file type not allowed";
          }
      else{
    $sql ="INSERT INTO `admin`(`admin_fname`, `admin_lname`, `admin_username`, `admin_email`, `admin_pwd`, `admin_status`, `admin_level`,`admin_picture`) VALUES ('$fname','$lname','$uname','$email','$pwd','$status',' $level','   $newlocation ')";
    mysqli_query($conn, $sql);
if($conn->connect_error){
    die("connection failed:" .$conn->connection_error);
}
if(mysqli_query($conn, $sql)){
    echo"submitted succesfully";
}
else{
    echo"Data not inserted".$sql."<br>".mysqli_error($conn);
}
if(mysqli_query($conn, $sql)){
    header("location:../ADMIN/aadmin.php");
    exit;

   }
   else {
    echo "try again";
   }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <style>
      
        body{
            background-image:url(images/400_monthlycommon_room_for_rent_1547528960_ac047484.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            box-sizing:border-box;
            font-family: Arial;
      
      font-size: 1.1rem;
       
       padding:0px;
       box-sizing:border-box;
       display:flex;
       justify-content: center;
       text-align:center;
    align-items: center;
   }
   h1{
       font-family: Arial;
      
       font-size: 2.1rem;
       text-transform: capitalize;

   }
   .container{
       text-transform: capitalize;
       float:left;
       margin-top:70px;
       text-align:center;
       justify-content:space-between;
       justify-items:center;
       height:60vh;
       background:rgb(73, 165, 42);
       width: 500px;
       padding-top:20px;
       padding-bottom: 100px;
       padding-left: 80px;
       border-radius:30px;
   }  
  
   .form{
    float:left;
        
   }
  .form label{
   float: left;
   height: auto;
 
  }
  .form input{
   
   float: right;
   height: auto;
   border:none;
   background: transparent;
   border-bottom: solid blue 2px;
   width: 300px;
   overflow: hidden;
  }
  button{
   margin-top: 40px;
   height: 40px;
   width: 400px;
   background: white;
   border:solid green 1px;
   border-radius: 12px;
   font-size: 2rem;
   text-transform: capitalize;
   color: blue;
 
   font-weight: bolder;
  }
  button:hover{
   background: blue;
   color:white;
   
  }
    </style>
</head>
<body>
 
   
    <a href=""></a>
    <div class="container">
        <div class="form">
    <form action="" method="post" enctype="multipart/form-data">
       
            <h1>SIGN UP AS AN ADMIN</h1>
        <label for="">First Name:</label>
        <input type="text" name="admin_fname" required ><br><br>
        
        <label for="">Last Name:</label>
        <input type="text" name="admin_lname" required><br><br>
        <label for="">Email Address: </label>
        <input type="text" name="admin_email" required><br><br>
        <label for="">User Name: </label>
        <input type="text" name="admin_username" required><br><br>
        <label for="">Status: </label>
        <input type="text" name="admin_status"required ><br><br>
        <label for="">picture: </label>
        <input type="file" name="file" required ><br><br>
        <label for="">Level: </label>
       <input type="text" name="admin_level" required><br><br>
        <label for="pwd">Create password:</label>
        <input type="password" name="admin_pwd" required><br><br>
     
        <div class="button"><button type="submit" name="submit" value="submit" id="button">Register</button></div>
    </div>
    </div>
</form>
</body>

</html>
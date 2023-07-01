<?php
include('../connect/connect.php');
if(isset($_POST['submit'])){ 
$id = $_POST['updateid'];
$pic =$_POST['admin_pic'];
    $fname =$_POST['admin_fname'];
    $lname =$_POST['admin_lname'];
    $email =$_POST['admin_email'];
    $uname =  $_POST['admin_username'];
    $pwd =$_POST['admin_pwd'];
    $status =$_POST['admin_status'];
    $level=$_POST['admin_level'];
    $sql = "UPDATE `admin` SET `admin_id`=$id,`admin_fname`=$fname,`admin_lname`=$lname,`admin_username`=$uname,`admin_email`=$email,`admin_pwd`=$pwd,`admin_status`=$status,`admin_level`=$level,$pic=`admin_picture` WHERE `admin_id` =$id ";
}
$run = mysqli_query($conn, $sql);
if($conn->connect_error){
    die("connection failed:" .$conn->connection_error);
}

if($run){
    echo"submitted succesfully";
}
else{
    echo"Data not inserted".$run."<br>".mysqli_error($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant </title>
    <style>
        body{
            background-image:url(../images/guest_house.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            box-sizing:border-box;
          
       
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
       margin-top:110px;
       text-align:center;
       justify-content:space-between;
       justify-items:center;
       height:60vh;
       background:rgb(73, 165, 42);
       width: 500px;
       padding: 20px;
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
   color:green;
   
  }
    </style>
</head>
<body>
<?php 
if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
    $edit = "SELECT * FROM `admin` where admin_id='$id' LIMIT 1";
    $edit_run = mysqli_query($conn, $edit);
    if(mysqli_num_rows($edit_run)>0){
        $row =mysqli_fetch_array($edit_run);
        ?>
        
   
    <a href=""></a>
    <form action="" method="post">
        <div class="container">
            <h4>SIGN UP AS An ADMIN</h4>
        <label for="">First Name</label>
        <input type="text" name="admin_fname" required value="<?php  echo $row['admin_fname'] ?>"><br><br>
        <label for="">picture</label>
        <input type="file" name="admin_pic" required value="<?php  echo $row['admin_picture'] ?>"><br><br>
        <label for="">Last Name</label>
        <input type="text" name="admin_lname" required value="<?php  echo $row['admin_lname'] ?>"><br><br>
        <label for="">Email Address: </label>
        <input type="text" name="admin_emaill" required value="<?php  echo $row['admin_email'] ?>"><br><br>
        <label for="">User Name: </label>
        <input type="text" name="admin_username" required value="<?php  echo $row['admin_username'] ?>"><br><br>
        <label for="">status: </label>
        <input type="text" name="admin_status" required value="<?php  echo $row['admin_status'] ?>"><br><br>
        <label for="level">level</label>
        <input type="text" name="admin_level" value="<?php  echo $row['admin_level'] ?>"><br><br>
        <label for="">password: </label>
        <input type="password" name="admin_pwd" required value="<?php  echo $row['admin_pwd'] ?>"><br><br>
      
        <input type="submit" name="update" value="submit" id="button"></div>
</form>
<?php
    }
}
?>
</body>

</html>
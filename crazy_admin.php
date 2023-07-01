<?php

include('../connect/connect.php');
$lname ="";
$fname ="";
$email ="";
$uname  ="";
$pwd="";
$status="";
$level="";
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $fname =$_POST['admin_fname'];
   
    $lname =$_POST['admin_lname'];
    $email =$_POST['admin_email'];
    $uname =  $_POST['admin_username'];
    $pwd =$_POST['admin_pwd'];
    $status =$_POST['admin_status'];
    $level=$_POST['admin_level'];
    $sql ="INSERT INTO `admin`(`admin_fname`, `admin_lname`, `admin_username`, `admin_email`, `admin_pwd`, `admin_status`, `admin_level`) VALUES ('$fname','$lname','$uname','$email','$pwd','$status',' $level')";
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
$lname ="";
$fname ="";
$email ="";
$uname  ="";
$pwd="";
$status="";
$level="";
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
    <center>
   
    <a href=""></a>
    <div class="container">
        <div class="form">
    <form action="" method="post">
       
            <h1>SIGN UP AS AN ADMIN</h1>
        <label for="">First Name:</label>
        <input type="text" name="admin_fname" required value="<?php echo $fname;?>"><br><br>
        
        <label for="">Last Name:</label>
        <input type="text" name="admin_lname" required value="<?php echo $lname;?>"><br><br>
        <label for="">Email Address: </label>
        <input type="text" name="admin_emaill" required value="<?php echo $email;?>"><br><br>
        <label for="">User Name: </label>
        <input type="text" name="admin_username" required value="<?php echo  $uname;?>"><br><br>
        <label for="">Status: </label>
        <input type="text" name="admin_pwd" required value="<?php echo  $pwd;?>"><br><br>
        <label for="">Level: </label>
        <input type="text" name="admin_status" required value="<?php echo $status;?>"><br><br>
        <label for="pwd">Create password:</label>
        <input type="password" name="admin_level" value="<?php echo  $level;?>"><br><br>
        <div class="button"><button type="submit" name="submit" value="submit" id="button">Register</button></div>
    </div>
    </div>
</form>
</body>
</center>
</html>

    
       // <? dem other method of fetch and echo;
    //$sql =  "SELECT * FROM building";
      //  $building =$conn ->query($sql);
       // if (!$building) {
         ////   die("failed to query".$conn -> error);}
            //  header("location: edit_house.php");
            // while ($row = $building -> fetch_assoc()) {

// echo"
// <tr><td>$row[building_id]</td><td>$row[landlord_id]</td><td>$row[localization_id]</td><td>$row[building_documents]</td><td>$row[description]</td>
// <td> <a href='edit_building.php?id=$row[building_id]'>UPDATE</a> </td>
// <td><button><a href='delete_admin.php?building_id=$row[building_id]'>DELETE</a></button></td></tr>
// ";

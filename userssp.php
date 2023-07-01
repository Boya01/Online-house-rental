<?php
 session_start();
include('connect/connect.php');
include('nav-bar.php');

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
    $fname =$_POST['fname'];
    $username =$_POST['uname'];
    $lname =$_POST['lname'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $gender =$_POST['gender'];
    $tel =$_POST['tel'];
    $nic =$_POST['nic'];
    $dob =$_POST['dob'];
    $pwd =$_POST['pwd'];
   
 
  
    //checkx
    if(file_exists($target_file)) {
        echo"file already exists";
    }
    else if(!in_array($fileType, $allowed)) {
      echo"file type not allowed";
          }
      else{
   

// if(emptyinputsignup( $fname,$lname,$email, $address,$gender,$tel, $nic,$pic,$pwd)!==false){
// header("location:users.php?error=emptyinput");
// exit();
// }
// if(userexist($conn,$username,$email)!==false){
//     header("location:users.php?error=usernametaken");
//     exit();

// }

    
    $sql = "INSERT INTO `user`(`user_fname`, `user_lname`, `user_password`, `user_email`, `gender`, `user_telephone`, `user_dob`, `user_address`, `user_pic`, `user_nic`, `user_name`) VALUES ('$fname','$lname','$pwd','$email','$gender','$tel','$dob','$address','$newlocation','$nic','$username')";
    if(mysqli_query($conn, $sql)){
       
        echo "<script> alert('user created')</script>";
        header("location:userslogin.php");
        
    }
    // else if{
    //     echo 'error'.$sql.mysqli_error($conn);
    //     echo"<script>alert('$user_id')</script>";
    //  }
     else{
        die("connection failed:" .$conn->connection_error);
    }
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User </title>
    <style>
          *{
padding: 0;
margin:0;
box-sizing: border-box;

        }
        body{
            background:url(images/FB_IMG_16788820664998484.jpg);
            background-position:center;
            background-repeat:no-repeat;
            background-size:cover;
            display: flex;
            justify-content: center;
            align-items: center;
         
        }
        .container{
            background: green;
            width: 100%;
            max-width: 680px;
            padding: 28px;
            padding-bottom: 18px;
             margin-top:19px;

        }
        .container h1{
            text-align: center;
        }
        .tenant{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px ;
        }
        .content:nth-child(2n){
            justify-content: end;
        }
        .content{
            display: flex;
            flex-wrap: wrap;
            width: 50%;
            padding-bottom: 20px;
        }
        .content label{
            width: 95%;
            margin: 5px;
        }
        .content input{
            height: 40px;
            width: 95%;
            border-radius: 7px;
            outline: none;
            border: 1px solid grey;
        }
        .btn input{
            font-size: 1.2rem;
             display: block;
            width: 400px;
            background: rgb(169, 193, 13);
            margin-left:80px ;
            color: black;
            border-radius: 12px;
            height: 40px;
            font-weight: bolder;
        }
        .btn input:hover{
            cursor: pointer;
            background: rgb(216, 248, 4);

        }
    </style>
</head>
<body>
 
    <a href=""></a>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>SIGN UP </h1>
            <div class="tenant">
        <div class="content">
        <label for="">First Name</label>
        <input type="text" name="fname" required><br><br>
    </div>
    <div class="content">
        <label for="">Last Name</label>
        <input type="text" name="lname" required><br><br>
    </div>
    <div class="content">
        <label for="">Email Address </label>
        <input type="text" name="email" required><br><br>
    </div>
    <div class="content">
<label for="">Gender</label>
<p>
    <select name="gender" id="" required><option value="" select hidden>Selelect Gender</option>
        <option value="female">Female</option>
        <option value="Male">Male</option></select></p> <br></div>
        <div class="content">
        <label for="tel">Telephone</label>
        <input type="text" name="tel" required><br><br>
    </div>
    <div class="content">
        <label for="">Resident Address</label>
        <input type="text" name="address" required><br><br>
    </div>
    <div class="content">
        <label for="nic">National ID Number</label>
        <input type="text" name="nic"><br><br>
    </div>
    <div class="content">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" required><br><br>
    </div>
    <div class="content">
        <label for="username">User Name:</label>
        <input type="text" name="uname"><br>
    </div>
   
    <div class="content">
        <label for="pic">picture</label>
        <input type="file" name="file"><br>
    </div>
    <div class="content">
        <label for="pwd">Create password</label>
        <input type="password" name="pwd"><br><br>
    </div>
        <div class="btn">
        <input type="submit" name="submit" value="submit" id="button"></div>
</form>
    </div>
    </div>
</body>

</html>
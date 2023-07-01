<?php
session_start();
include('connect/connect.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password =$_POST['pwd'];
   
    $sql = "SELECT * FROM `landlord` WHERE landlord_email='". $email ."' AND landlord_pwd='". $password ."'";
    $result = $conn -> query($sql);

    if($result -> num_rows > 0) {
        // echo"<script>alert('Login successful.!!')</script>";
        header("refresh:.1; url=landlorddboard.php");
    }
    else {
        echo  $conn-> error;
       echo"<script>alert('Login Failed.!!')</script>";
       
    }
    
    $sql = "SELECT * FROM `landlord` WHERE landlord_email='$email' AND landlord_pwd='$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $user_id = $row['landlord_id'];
            $_SESSION['landlord_id'] = $user_id;
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
    <title>Document</title>
    <style>
body{
    background-color: rgb(1, 54, 54);
}
.admin{
    text-align: center;
    padding:30px;
    background-color: rgba(0, 0, 0,0.1);
   height: 500px;
   width: 600px;
    transform: translate(300px, 100px);
    /* padding-top: 100px; */
}
label{
    font-size: 30px;
 float: left;
 
}
  input{
    font-size: 20px;
 float: right;
 margin-right: 70px;
  }  
    </style>
</head>
<body>
    <form action="" method="post">
    <div class="admin">
        <h1>LOGIN  AS A LANDLORD</h1>
    <label for="Uname">Email Address:</label>
    <input type="text" name="email" placeholder="Enter your Name"><br><br><br><br><br>
    <label for="pwd">Enter Password:</label>
    <input type="password" name="pwd" placeholder="Enter your password"><br><br><br><br><br>
     
    <input type="submit" style="background: rgba(0, 0, 0,0.4); color: rgb(255, 255, 255); padding: 8px;margin-right: 40%;" name="submit" value="LOGIN" ><br><br><br><br><br>
 <?php echo'<a href="tenant_sp.php" style="color:white";>NOT HAVING AN ACCOUNT YET</a>';
 ?>
    </div>
    </form>
</body>
</html>

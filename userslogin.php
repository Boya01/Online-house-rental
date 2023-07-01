<?php
 session_start();
include('connect/connect.php');
include('nav-bar.php');
if(isset($_POST['submit'])){
    $email=$_POST['user_email'];
    $password =$_POST['pwd'];
   
    $sql = "SELECT * FROM `user` WHERE user_email='". $email ."' AND user_password='". $password ."'";
    $result = $conn -> query($sql);

    if($result -> num_rows > 0) {
        // echo"<script>alert('Login successful.!!')</script>";
        header('location:udashboard.php');
    }
    else {
        echo  $conn-> error;
       echo"<script>alert('Login Failed.!! password or email is incorrect')</script>";
       
    }

    $sql = "SELECT * FROM `user` WHERE user_email='$email' AND user_password='$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $user_id = $row['user_id'];
            $_SESSION['user_id'] = $user_id;
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
    background: url(images/FB_IMG_16788817538318421.jpg);
    background-repeat:no-repeat;
    background-size: cover;
    background-position: center;
}
.admin{
    text-align: center;
    padding:30px;
    /* background-color: rgba(0, 0, 0,0.5); */
   height: 400px;
   width: 600px;
    transform: translate(500px, 100px);
    border-radius:70px;
    padding-top: 100px;
}
label{
    font-size: 30px;
 float: left;
 
}
h1{
    color:white;
    margin-top:-30px;
    margin-bottom:40px;
}
  input{
    font-size: 30px;
 float: right;
 margin-right: 10px;
  }  
  #login{
    width:450px;
   position:relative;
   left:180px;
   border-radius:24px;
  }
  #login:hover{

  }
    </style>
</head>
<body>
    <form action="" method="post">
    <div class="admin">
        <h1>USERS LOGIN</h1>
    <label for="email">Email address:</label>
    <input type="text" name="user_email" placeholder="Enter your email adress"><br><br><br><br><br>
    <label for="pwd">Enter Password:</label>
    <input type="password" name="pwd" placeholder="Enter your password"><br><br><br><br><br>
     
    <input type="submit" id="login"style="background: green; color: rgb(255, 255, 255); padding: 8px;margin-right: 40%;" name="submit" value="LOGIN" ><br><br><br><br><br>
 <?php echo'<a href="userssp.php" style="color:white";>NOT HAVING AN ACCOUNT YET</a>';
 ?>
    </div>
    </form>
</body>
</html>

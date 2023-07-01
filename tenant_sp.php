<?php
//  session_start();
include('connect/connect.php');
if(isset($_POST['submit'])){
    $uid =$_POST['user_id'];
    $house_id =$_POST['houser_id'];


// $sql = mysqli_query($conn, "SELECT * FROM tenant WHERE tenant_email='$email' OR tenant_tel='$tel' OR tenant_nic='$nic'");
// if(mysqli_num_rows($sql)>0) {
//     echo"Account Details already Exist.!!";
// }
// else{
  
    $sql ="INSERT INTO `tenant`(INSERT INTO `tenant`(`house_id`, `user_id`) VALUES ('$house_id','$uid')";
    if(mysqli_query($conn, $sql)){
       
        echo "<script> alert('tenant created')</script>";
        
    }else if($conn->connect_error){
        die("connection failed:" .$conn->connection_error);
    }
    else{
        echo 'cannot create tenant';
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
          *{
padding: 0;
margin:0;
box-sizing: border-box;

        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background:brown;
        }
        .container{
            background: green;
            width: 100%;
            max-width: 680px;
            padding: 28px;
             margin-top:19px;

        }
        .container h1{
            text-align: center;
        }
        .user{
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
    <form action="" method="post">
        <div class="container">
            <h1>SIGN UP AS A NEW TENANT</h1>
            <div class="user">
     
    <div class="content">
        <label for="">House ID</label>
        <input type="text" name="house_id" required><br><br>
    </div>
    <div class="content">
        <label for="">user_id</label>
        <input type="text" name="user_id" required><br><br>
    </div>
 
    </div>
    
    
   
 
    
        <div class="btn">
        <input type="submit" name="submit" value="submit" id="button"></div>
</form>
    </div>
    </div>
</body>

</html>
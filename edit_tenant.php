
<?php

include('../connect/connect.php');

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];

$lname= $_POST['lname'];
$pwd =md5($_POST['pwd']);
$gender =$_POST['gender'];
$house =$_POST['house'];
$pic = $_POST['pic'];
$tel = $_POST['tel'];
$nic = $_POST['nic'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$uname =$_POST['uname'];

$sql = mysqli_query($conn, "UPDATE `tenant` SET `tenant_id`='$id',`house_id`='$house',`tenant_fname`='$fane',`tenant_lname`='$lname',`tenant_email`='$email',`tenant_gender`='$gender',`tenant_nic`='$nic',`tenant_dob`='$dob',`tenant_picture`='$pic',`tenant_tel`='$tel',`tenant_pwd`='$pwd',`user_name`='$uname' WHERE tenant_id ='$id' ");
if($sql){
    echo"<script>alert('updated')</script>";
    header("location:tenants.php");
}
else{
    echo"Data not inserted".$sql."<br>".mysqli_error($conn);
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
            padding: 18px;
             margin-top:19px

        }
        .container h1{
            text-align: center;
        }
        .tenant{
            position:;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px ;
        }
        .content:nth-child(2n){
            justify-content: end;
        }
        .content{
            margin:-18px;
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
            text-align:center;
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


<?php 
if(isset($_GET['tenant_id'])){
    $id = $_GET['tenant_id'];
    $edit = "SELECT * FROM `tenant` where tenant_id='$id' LIMIT 1";
    $edit_run = mysqli_query($conn, $edit);
    if(mysqli_num_rows($edit_run)>0){
        $row =mysqli_fetch_array($edit_run);
        ?>
        
        <form action="" method="POST">
        <div class="container">
<h1>Edit Tenant</h1>
<div class="tenant">
        <!-- `tenant_id`, `house_id`, `tenant_fname`, `tenant_lname`, `tenant_email`, `tenant_gender`, `tenant_nic`, `tenant_dob`, `tenant_picture`, `tenant_tel`, `tenant_pwd`, `user_name -->
       <div class="content">
        <label for="">picture</label>
        <input type="text" name="pic" value="<?php  echo $row['tenant_picture'] ?>"><br><br><br>
        </div>
        
        <div class="content">
            <label for=""></label>
<input type="hidden" name="id" value="<?php  echo $row['tenant_id'] ?>">
</div>
        <div class="content">
<label for="">HOUSE ID:</label>
<input type="text" name="house" value="<?php  echo $row['house_id'] ?>"><br><br><br>
</div>
        <div class="content">
<label for="">First name:</label>
<input type="text" name="fname" value="<?php  echo $row['tenant_fname'] ?>"><br><br><br>
</div>
        <div class="content">
<label for="">Last Name:</label>
<input type="text" name="lname" value="<?php  echo $row['tenant_lname'] ?>"><br><br><br>
</div>
        <div class="content">
<label for="">Email:</label>
<input type="text" name="email" value="<?php  echo $row['tenant_email'] ?>"><br><br><br>
</div>
        <div class="content">
<label for="">Gender:</label>
<input type="text" name="gender" value="<?php  echo $row['tenant_gender'] ?>"><br><br><br>
</div>
        <div class="content">
<label for="">NATIONAL ID</label>
<input type="text" name="nic" value="<?php  echo $row['tenant_nic'] ?>"><br><br><br>
</div>
        <div class="content">
<label for="">DATE OF BIRTH</label>
<input type="text" name="dob" value="<?php  echo $row['tenant_dob'] ?>"><br><br><br>
</div>
        <div class="content">

<label for="">TELEPHONE</label>
<input type="text" name="tel" value="<?php  echo $row['tenant_tel'] ?>"><br><br><br>
</div>
        <div class="content">
<label for="">TENANT PASSWORD</label>
<input type="text" name="pwd"value="<?php  echo $row['tenant_pwd'] ?>"><br><br><br>
</div>
        <div class="content">
<label for="">User Name</label>
<input type="text" name="uname"value="<?php  echo $row['user_name'] ?>"><br><br><br>
</div>
<div class="btn">
<input type="submit" name="submit" value="submit">
    </div>
</form>
</div>
<?php
   }
}
?>





</body>
</html>
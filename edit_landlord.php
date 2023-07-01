
<?php

include('../connect/connect.php');

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];

$lname= $_POST['lname'];
$pwd =md5($_POST['pwd']);

$pic = $_POST['picture'];
$tel = $_POST['tel'];
$nic = $_POST['nic'];
$address = $_POST['address'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$document = $_POST['documents'];

$sql = mysqli_query($conn, "UPDATE `landlord` SET `landlord_id`= '$id',`landlord_fname`='$fname',`landlord_lname`='$lname',`landlord_pwd`='$pwd',`landlord_picture`='$pic',`landlord_tel`='$tel',`landlord_address`='$address',`landlord_email`='$email',`landlord_dob`='$dob',`landlord_documents`='$document',`landlord_nic`='$nic' WHERE  landlord_id='$id' ");
if($sql){
    echo"<script>alert('updated')</script>";
    header("location:landlordboard.php");
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
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: url(/images/400_monthlycommon_room_for_rent_1547528960_ac047484.jpg);
        }
        .container{
            background: green;
            width: 100%;
            max-width: 680px;
            padding: 28px;
            /* margin:0,20px; */

        }
        .container h1{
            text-align: center;
        }
        .landlord{
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
            margin:10px;
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
<div class="container">
 
<h1>landlord</h1>
<?php 
if(isset($_GET['landlord_id'])){
    $id = $_GET['landlord_id'];
    $edit = "SELECT * FROM `landlord` where landlord_id='$id' LIMIT 1";
    $edit_run = mysqli_query($conn, $edit);
    if(mysqli_num_rows($edit_run)>0){
        $row =mysqli_fetch_array($edit_run);
        ?>
      

<?php
   }
}
?>

    <h1>LandLord registration form</h1>
    <form action="" method="POST">
    <div class="landlord">
    <input type="hidden" name="id" value="<?php  echo $row['landlord_id'] ?>">
        <div class="content">
        <label for="fname">First Name</label>
        <input type="text" name="fname" placeholder="first name"   value="<?php  echo $row['landlord_fname'] ?>">
        </div>
        <div class="content">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" placeholder="Last name" value="<?php  echo $row['landlord_lname'] ?>">
    </div>
    <div class="content">
        <label for="pwd">password</label>
        <input type="password" name="pwd" placeholder="password" value="<?php  echo $row['landlord_pwd'] ?>">
    </div>
      <div class="content">
        <label for="pic">picture</label>
        <input type="file" name="pic" style="border: none;" value="<?php  echo $row['landlord_picture'] ?>">
        </div>
        <div class="content">
        <label for="ID">National ID</label>
        <input type="text" name="nic" placeholder="id-card"  value="<?php  echo $row['landlord_nic'] ?>">
        </div>
        <div class="content">
        <label for="tel">Telephone</label>
        <input type="text" name="tel" placeholder="Telephone"  value="<?php  echo $row['landlord_tel'] ?>">
        </div>
        <div class="content">
        <label for="address">Residence Address/locality</label>
        <textarea name="address" row="5" cols="15" value="<?php  echo $row['landlord_address'] ?>"></textarea></div>
        <div class="content">
        <label for="email">e mail address</label>
        <input type="text" name="email" placeholder="" value="<?php  echo $row['landlord_email'] ?>"></div>
        <div class="content">
        <label for="dop" required>Date of birth</label>
        <input type="date" name="dop" placeholder="date of birth"  value="<?php  echo $row['landlord_dob'] ?>"></div>
        <div class="content">
        <label for="documents">Land / House Documents</label>
        <input type="file" name="document" style="border: none;" value="<?php  echo $row['landlord_documents'] ?>">
        </div>
      <div class="btn">
        <input type="submit" name="submit" value="submit">
      </div>
    </div>
</form>
</div>




</body>
</html>
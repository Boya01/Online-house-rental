<!-- INSERT INTO `landlord`(`landlord_id`, `landlord_fname`, `landlord_lname`, `landlord_pwd`, `landlord_picture`, `landlord_tel`, `landlord_address`, `landlord_email`, `landlord_dob`, `landlord_documents`, `landlord_nic`)  -->
<?php
 session_start();
include('../connect/connect.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
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
$fname = $_POST['fname'];

$lname= $_POST['lname'];
$pwd =md5($_POST['pwd']);

$pic = $_POST['pic'];
$nic = $_POST['nic'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$email = $_POST['email'];
$dop = $_POST['dop'];
$document = $_POST['document'];
if(file_exists($target_file)) {
    echo"file already exists";
}
else if(!in_array($fileType, $allowed)) {
  echo"file type not allowed";
      }
  else{


$sql = "INSERT INTO `landlord`(`landlord_fname`, `landlord_lname`, `landlord_pwd`, `landlord_picture`, `landlord_tel`, `landlord_address`, `landlord_email`, `landlord_dob`, `landlord_documents`, `landlord_nic`) VALUES ('$fname','$lname','$pwd','$pic','$tel','$address','$email','$dop','$document','$nic')";
if(mysqli_query($conn, $sql)){
    echo"submitted succesfully";
}
if(mysqli_query($conn, $sql)){
    header("location: landlordlogin.php");
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
    <h1>LandLord registration form</h1>
    <form action="" method="POST">
    <div class="landlord">
        <div class="content">
        <label for="fname">First Name</label>
        <input type="text" name="fname" placeholder="first name" required>
        </div>
        <div class="content">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" placeholder="Last name">
    </div>
    <div class="content">
        <label for="pwd">password</label>
        <input type="password" name="pwd" placeholder="password" required>
    </div>
      <div class="content">
        <label for="pic">picture</label>
        <input type="file" name="pic" style="border: none;">
        </div>
        <div class="content">
        <label for="ID">National ID</label>
        <input type="text" name="nic" placeholder="id-card">
        </div>
        <div class="content">
        <label for="tel">Telephone</label>
        <input type="text" name="tel" placeholder="Telephone">
        </div>
        <div class="content">
        <label for="address">Residence Address/locality</label>
        <textarea name="address" row="5" cols="15"></textarea></div>
        <div class="content">
        <label for="email">e mail address</label>
        <input type="text" name="email" placeholder=""></div>
        <div class="content">
        <label for="dop" required>Date of birth</label>
        <input type="date" name="dop" placeholder="date of birth"></div>
        <div class="content">
        <label for="documents">Land / House Documents</label>
        <input type="file" name="document" style="border: none;">
        </div>
      <div class="btn">
        <input type="submit" name="submit" value="submit">
      </div>
    </div>
</form>
</div>
</body>
</html>
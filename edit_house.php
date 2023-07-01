
<?php

include('../connect/connect.php');

if(isset($_POST['update_house'])){
    $house_id =$_POST['house_id'];
    $edit_house_pic =$_POST['edit_house_pic'];
    $edit_house_desc =$_POST['edit_house_desc'];
    $edit_house_price =$_POST['edit_house_price'];
    $edit_num_room =$_POST['edit_num_room'];
    $edit_building_id =$_POST['edit_building_id'];
$sql = mysqli_query($conn, "UPDATE `house` SET `house_picture`=' $edit_house_pic',`house_discription`='$edit_house_desc',`house_price`='  $edit_house_price',`number_rooms`=' $edit_num_room',`building_id`='$edit_building_id' WHERE house_id='$house_id' ");
if($sql){
    echo"<script>alert('updated')</script>";
    header("location:houses.php");
}
else{
    echo"<script>alert('failed to updated')</script>";
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
    <STyle>
*{
    margin: 0;
    padding: 0;
}
body{
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    text-transform: uppercase;
}
h1{
    margin-bottom: 50px;
    color:red;
}
.Container{

    width: 500px;
    background: rgb(42, 165, 138);
    text-align: center;
    margin-top: 120px;
    padding: 40px;
   

}
.form{
float: left;
   margin-left: 10px;
   max-width: 300px; 
}
label{
    float: left;
}
.form input{
    margin-top:-20px;
    float:left;
    margin-left:200px;
    background: transparent;
    border-collapse:collapse;
    border: 2px solid red;
   
}
#button{
    margin-left:40%;
    text-align: center;
    width: 100px;
    border: 1px solid red;
    background: rgba(255, 0, 0, 0.44) ;
    border-radius: 8px;
    color:rgb(0, 3, 2); 
    font-size: larger;
    border-radius: 5px;
}
#button:hover{
    background: rgb(255, 0, 0) ;
    color: rgb(42, 165, 138);
}
#file{
    width: 160px;
}
    </STyle>
</head>
<body>
<div class="Container">
 
<h1>House</h1>
<div class="form">
<?php 
if(isset($_GET['house_id'])){
    $house_id = $_GET['house_id'];
    $house_edit = "SELECT * FROM `house` where house_id='$house_id' LIMIT 1";
    $edit_run = mysqli_query($conn, $house_edit);
    if(mysqli_num_rows($edit_run)>0){
        $row =mysqli_fetch_array($edit_run);
        ?>
        <form action="" method="POST">
 
<input type="hidden" name="house_id" value="<?php  echo $row['house_id'] ?>">
<label for="">house pic:</label>
<input type="file" name="edit_house_pic" value="<?php  echo $row['house_picture'] ?>"><br><br><br>
<label for="">house description</label>
<input type="text" name="edit_house_desc" value="<?php  echo $row['house_discription'] ?>"><br><br><br>
<label for="">House Price</label>
<input type="text" name="edit_house_price"value="<?php  echo $row['house_price'] ?>"><br><br><br>
<label for="">Number of rooms</label>
<input type="text" name="edit_num_room" value="<?php  echo $row['number_rooms'] ?>"><br><br><br>
<label for="building">Building ID</label>
<input type="text" name="edit_building_id" value="<?php  echo $row['building_id'] ?>"><br><br><br>
<button type="submit" id="button"name="update_house">UPDATE</button>

</form>
    </div>
    </div>
<?php
   }
}
?>





</body>
</html>
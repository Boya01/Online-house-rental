<?php
include('../connect/connect.php');

if(isset($_POST['submit'])){
   $id =$_POST['building_id'];
   $landlord =$_POST['landlord_id'];
   $localisation =$_POST['localisation_id'];
   $documents =$_POST['document'];
   $desc =$_POST['desc'];
   $sql = mysqli_query($conn,"UPDATE `building` SET `building_id`='$id',`landlord_id`= '$landlord',`localization_id`='$localisation',`building_documents`='$documents',`description`= '$desc; WHERE `building_id`='$id' ");
   
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
</head>
<body>
   
<h1>building</h1>
<?php
if(isset($_GET['building_id'])){
    $id = $_GET['build_id'];
    $edit = "SELECT * FROM `building` where building_id='$id' LIMIT 1";
    $edit_run = mysqli_query($conn, $edit);
    if(mysqli_num_rows($edit_run)>0){
        $row =mysqli_fetch_array($edit_run);
?>
<form action="" method="POST">

 <input type='text' name='building_id' hidden value ="<?php  $id;?>"><br><br><br>
 <label for="Land lord ID">Land lord ID</label>
 <input type="text" name="landlord_id" required value ="<?php echo $landlord;?>" ><br><br><br>
 <label for="">LOCALISATION ID</label>
 <input type="text" name="localisation_id" required value="<?php echo $localisation;?>"><br><br><br>
 <label for="Document">Document</label>
 <input type="text" name="document" required value="<?php echo $documents;?>"><br><br><br>
 <label for="description">Description</label>
 <input type="text" name="desc" required value="<?php echo $desc;?>"><br><br><br>
 <input type="submit" value="submit" name="submit">
</form>
<?php
}
}
?>
</body>
</html>

































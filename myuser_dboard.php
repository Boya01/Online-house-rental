<?php 
session_start();
include('../connect/connect.php');

$user_id = $_SESSION['user_id'];
"<script>alert('$user_id')</script>";

$sql = "SELECT * FROM `user` WHERE user_id='$user_id'";

$user = $conn -> query($sql);

if ($user -> num_rows > 0) {
     header("location: edit_house.php");
    while ($row = $user -> fetch_assoc()) {
  
         echo $row['user_fname'];
    }
}
?>  
<!--   $house_pic = $_FILES['file']['name'];
  //$error = $house_pic['error'];
 // print_r($error);
  $tmpname = $_FILES['file']['tmp_name'];
  $newlocation = "upload/". $house_pic;

  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES['file']['name']);
  $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $allowed = array('pdf', 'jpg', 'jpeg', 'png');
  $house_desc = $_POST['house_desc'];
  $house_price = $_POST['house_price'];
  $num_room = $_POST['num_room'];
  $building_id = $_POST['building_id'];
  /*second file upload */
    $file1= $_FILES['file1']['name'];
    $tmpname = $_FILES['file1']['tmp_name'];
    $newlocation = "upload/". $file1;
    $target_dir1= "upload/";
    $target_file1 = $target_dir1 . basename($_FILES['file1']['name']);
    $fileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    $allowed1 = array('pdf', 'jpg', 'jpeg', 'png');
    // third file upload
    $file2= $_FILES['file2']['name'];
    $tmpname = $_FILES['file2']['tmp_name'];
    $newlocation = "upload/". $file2;
    $target_dir2= "upload/";
    $target_file2 = $target_dir2 . basename($_FILES['file1']['name']);
    $fileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
    $allowed2 = array('pdf', 'jpg', 'jpeg', 'png');
    $file3 =$file['file3']['name'];
  //checkx
  if(file_exists($target_file) || file_exists($target_file1) || file_exists($target_file2)) {
      echo"file already exists";
  }
  else if(!in_array($fileType, $allowed) ||(!in_array($fileType1,$allowed1))||(!in_array($fileType2,$allowed2) ) ){
    echo"file type not allowed"; -->


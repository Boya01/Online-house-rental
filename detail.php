<?php
include('connect/connect.php');
session_start();
$house_id = $_GET['house_id']; ;

$sql = "SELECT * FROM `house` where house_id = '". $house_id ."' ";
$result=mysqli_query($conn, $sql);



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
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
            background:green;
            display:flex;
            justify-content:space-between;
            align-items:center;

        }
         img {
            height: 300px;
        }
    </style>
</head>
<body>
    
    <div class="container">
    <?php  
if ($result -> num_rows > 0) {
    // header("location: edit_house.php");
    while ($row = $result -> fetch_assoc()) {
        # code...

?>
        <div><img  src=" <?php echo $row['house_picture']?>" alt="pic_one"></div>
        <div><img src="<?php echo $row['other_pic_1']?>" alt="pic_two"></div>
        <div><img src="<?php echo $row['other_pic_2']?>" alt="pic_three"></div>
    </div>
    <div class="desc">
        <p>house detail:<?php echo $row['house_discription'];?></p>
    </div>
    <?php }}?>
</body>
</html>
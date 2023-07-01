
<?php 
include('connect/connect.php');
if(isset($_POST['submit'])){
$localisation = $_POST['localisation_id'];
$desc =$_POST['desc'];
$documents =$_POST['document'];
$landlord =$_POST['landlord_id'];
$sql = "INSERT INTO `building`(`landlord_id`, `localization_id`, `building_documents`, `description`) VALUES('$landlord','$localisation','$documents','$desc')";  
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('New record created successfully')</script>";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// $query_run = mysqli_query($conn, $query);
// if(mysqli_query($conn, $query)){
//     echo"submitted succesfully";
// }
// else{echo"error"; }
    


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
       background:url(images/20230201_094628.jpg);
       background-position:center;
       background-size:cover;
       background-repeat:no-repeat;
        padding:0px;
        box-sizing:border-box;
        display:flex;
        justify-content: center;
        text-align:center;
     align-items: center;
    }
    h1{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 2.4rem;
    }
    .container{
        text-transform: capitalize;
        float:left;
        margin-top:150px;
        text-align:center;
        justify-content:space-between;
        justify-items:center;
        height:60vh;
        background:rgb(73, 165, 42);
        width: 500px;
        padding: 20px;
        padding-left: 80px;
    }  
   
    .form{
     float:left;
         
    }
   .form label{
    float: left;
    height: auto;
  
   }
   .form input{
    
    float: right;
    height: auto;
    border:none;
    background: transparent;
    border-bottom: solid blue 2px;
    width: 300px;
    overflow: hidden;
   }
   button{
    margin-top: 40px;
    height: 40px;
    width: 400px;
    background: white;
    border:solid green 1px;
    border-radius: 12px;
    font-size: 2rem;
    text-transform: capitalize;
    color: blue;
    letter-spacing: 6px;
    font-weight: bolder;
   }
   button:hover{
    background: blue;
    color:white
   }

   

    </style>
</head>
<body>
   <div class="container">
<h1>building</h1>
<div class="form">
<form action="" method="POST">
 <label for="Land lord ID">Land lord ID</label>
 <input type="text" name="landlord_id" required><br><br><br>
 <label for="localisation_id">LOCALISATION ID</label>
 <input type="text" name="localisation_id" required><br><br><br>
 <label for="Document">Document</label>
 <input type="file" name="document" required><br><br><br>
 <label for="description">Description</label>
 <input type="text" name="desc" required><br><br><br>
 <button type="submit" value="submit" name="submit">submit</button>
</form>
</div>
</div>
</body>
</html>
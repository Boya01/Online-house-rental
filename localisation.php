<!-- (`localization_id`, `lat`, `log`, `street`, `nieghbourhood`) -->
<?php
include('../connect/connect.php');
if(isset ($_POST['submit'])){
    $lat =$_POST['lat'];
    $log =$_POST['log'];
    $street = $_POST['street'];
    $neighbourhood = $_POST['neighbourhood'];
   
    $sql ="INSERT INTO `localization`(`lat`, `log`, `street`, `nieghbourhood`) VALUES ('$lat','$log','$street','$neighbourhood')";

     if(mysqli_query($conn, $sql)){
        echo"submitted succesfully";
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
    box-sizing:border-box;
}body{
    margin:0;
    padding:0;
    background:rgb(39, 189, 114);
    color:rgb(1, 67, 1);
    display:flex;
     text-align: center;
}
.container{
    
     margin: auto;
     margin-top: 200px;
     width: 400px;
     height: 400px;
     background: green;
     text-align: center;
     padding-top: 40px;
 
}
label{
    float: left;
    margin-right: 1000px;
    padding-left:70px ;
}
h1{
color: red;
}
button{
    background-color: red;
    border: 0px;
}

    </style>
</head>
<body>
    <div class="container">
    
    <h1>LOCALISATION

    </h1>
    <form action="" method="post">
    <label for="">Lat</label>
    <input type="text" required name="lat"><br><br>
    <label for="">Long</label>
    <input type="text" required name="log"><br><br>
    <label for="street">Street</label>
    <input type="text" required name="street"><br><br>
    <label for="neighbourhood">Neighbourhood</label>
   <input type="text" required name="neighbourhood"><br><br>
 
    <button type="submit" name="submit" value="submit">submit</button>
</div>

    </form>
    </div>
</body>
</html>
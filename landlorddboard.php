<?php
session_start();
include('connect/connect.php');
$landlord_id = $_SESSION['landlord_id'] ;

echo"<script>alert('$landlord_id')</script>";

$sql = "SELECT * FROM `landlord` WHERE landlord_id='$landlord_id '";

$user = $conn -> query($sql);

if ($user -> num_rows > 0) {
    //  header("location: edit_house.php");
    while ($row = $user -> fetch_assoc()) {
 
        //  echo $row['user_fname'];
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
            margin:0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT','Calibri', 'Trebuchet MS', sans-serif;
        }
        body{
         
            min-height:100vh;
        }
     
        .side_nav{
            position: fixed;
        display:flex;
            /* justify-content: center;
            align-items: center; */
            width: 20vh;
          
            background: rgb(0, 128, 119);
            color:white;
            flex-direction: column;
            min-height:100vh;
            box-shadow: 0px 0px 1px 12px;
            
        }
        .side_nav .logo{
            display: flex;
                 justify-content: center;
            align-items: center; 
            height: 10vh;
        }
        .side_nav ul  li{
            list-style-type: none;
            display: flex;
            align-items: center;
            justify-content: center;
            align-items: center; 
            width: 20vh;
        }
        #img{
            
            margin-right:-40px;
        }
        .center{
            /* position: absolute; */
            display: block;
            right:0 ;
            width: 80vh;
            height: 100vh;
        }
        .center .header{
            position: fixed;
            top:0px;
            left:20vh;
            width: 100%;
            background: rgb(215, 218, 215);
            height: 15vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow:hidden;
            box-shadow: 0px 0px 8px 0.2px;}

        .center .header input {
              
                width: 300px;
                height: 30px;
                top:3px;
        }
        
   .home a{
            position: absolute;
            display:flex;
            font-size: 1.2rem;
        
            top: 40px;
            left: 5px;
            text-align: right;
            text-decoration: none;
            color:rgb(0, 128, 119);
            align-items: center;
            justify-content: center;
        }
        .home a img{
            position:inherit;
            height:100px;
            width:100px;
            animation:one 100s infinite;
   
}
@keyframes one {
    from{ margin-left:0px;}
    to{margin-left: 80%;}
        
        }
        .home a:hover{
        color:black;
        }

    </style>
</head>
<body>

        <div class="side_nav">
            <div class="logo">
              <img  src=" ./<?php echo $row['landlord_pic']; ?>" alt="profile" style="width: 100px; height:100px;" >
         
          

            </div>
            <ul>
            <?php echo $row['landlord_lname'];?>
            <?php echo $row['landlord_fname'];?>
            <li></li>
            <li><a href="index.php"> Houses &nbsp;</a></li>
            <li><a href=""> payment &nbsp;</a></li>
            <li><a href=""> Help &nbsp;</a></li>
            <li><a href=""> Logout &nbsp;</a></li>
            
        </ul>
        </div>
    
    <div class="center">
        <div class="header">
            <div class="main_nav">
                <input type="search" placeholder="search">
                <button type="submit" id="btn">search</button>
                <div class="home"><a href="index.php"><img id="img" src="images/1670328611300.png" alt="logo" ></a> </div>
            </div>
        </div>
        <div> <h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1></div>
        <span> </span>
        <span></span>
        <span></span>
    </div>
    <?php
    }}?>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>
<h1>cuyqw   dcfiywuvfdiyvfiwuy</h1>

    <?php
    $sql = "SELECT * FROM `landlord` JOIN building ON landlord.landlord_id=building.lanlord_id JOIN house ON building.building_id=house.building_id";
    $results = $conn->query($sql);
    if($results -> num_rows > 0){
       while($row = mysqli_fetch_assoc($results)){
      ?>
       
      <div class="">
           
           <a target="_blank" href="detail.php?house_id= <?php  echo $row['house_id']?>">
             <img src="./<?php echo $row['house_picture']; ?>" alt="Forest" width="120px" height="120px">
           </a>
           <div class=""><?php echo $row['house_discription']; ?><br>
             price/year: <b><?php echo $row['house_price']; ?> </b><br>
        
           </div>
         </div>

 <?php
       }
    } else{
        echo'error';
    }
    ?>
</body>

</html>
<?php
session_start();
include('connect/connect.php');
$user_id = $_SESSION['user_id'] ;

// echo"<script>alert('$user_id')</script>";

$sql = "SELECT * FROM `user` WHERE user_id='$user_id'";

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
            margin-top:20px;
        }
        .center{
            position: fixed;
            left: 0;
            right:0 ;
            width: 100vw;
            height: 100vh;
            

        }
        .center .header{
            position: fixed;
            top:0px;
            width: 100%;
            background: rgb(215, 218, 215);
            height: 15vh;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 0px 8px 0.2px;}

        .center .header input {
              
                width: 300px;
                height: 30px;
                top:3px;
        }
        .main_content{
            display:flex;
            justify-content:center;
            align-items:center;
            gap:200px;
        }.img{
            position:relative;
            left:50px;
           top:-100px; */
        }
        .container .main_content img{
            border-radius:98px;
        }

       

#btn{
        height:30px;
        width:49px;    
        }
@keyframes one {
    from{ margin-left:0px;}
    to{margin-left: 80%;}
        
        }
        .home a:hover{
        color:black;
        }

        .container{
            display: flex;
            align-items: center;
            margin-top: 110px;
        }

        .side{
            width: 18%;
            background-color: tan;
            height: 610px;
        }
        .container a{
        text-decoration:none;
        display:block;
        margin-top:20px;
        text-align:center;
        font-size:1.7rem;
        }
        .container a:hover{
            color:grey;
        }

        .main_content{
            text align: center;
            display:flex;
            justify-content:center;
        }
       .table{
        margin-left:40px;
        margin-top:-180px;
        
        }
        table th{
            float:left;
            padding:30px;
          
           
        }

       

    </style>
</head>
<body>
<div class="center">
        <div class="header">
            <div class="main_nav">
                <input type="search" placeholder="search">
                <button type="submit" id="btn">search</button>
                <div class="home"><a href="index.php"></a> </div>
            </div>
        </div>
<div class="container">
     <div class="side">
        <a href="view-houses.php">View Houses</a>
        <a href="view-houses.php">status</a>
        <a href="view-houses.php">transactions</a>
     </div>


     <div class="main_content">
    <div class="img"><img src="upload/<?php echo $row['user_pic']; ?>" alt="picture" style="height: 200px; width: 200px;"><br><br>
    <th><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name:</th>
    <td><?php echo $row['user_name']; ?></td>
    </div> 
    <div class="table">
     <table>
        <tr>
            <th>First Name:</th>
            <td><?php echo $row['user_fname']; ?></td>
        </tr>
        <tr>
        <th>Last Name:</th>
        <td><?php echo $row['user_lname']; ?></td>
        </tr>

        <tr>
        <th>Gender:</th>
        <td><?php echo $row['gender']; ?></td>
        </tr>

        <tr>
        <th>Email:</th>
        <td><?php echo $row['user_email']; ?></td>
        </tr>

        <tr>
        <th>Telephone:</th>
        <td><?php echo $row['user_telephone']; ?></td>
        </tr>

        <tr>
        <th>Address:</th>
        <td><?php echo $row['user_address']; ?></td>
        </tr>

        <tr>
        <th>NIC:</th>
        <td><?php echo $row['user_nic']; ?></td>
        </tr>
       
     </table>
     </div>
     </div>
</div>

</body>
<?php }}
?>
</html>
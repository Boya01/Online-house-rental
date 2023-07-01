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
            padding:0px;
           box-sizing: border-box;
        }
        body{
          
            margin:0px;
           
        }
    body {
      margin: 0;
    }
    .container{
      float:left;
    }
    
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 15%;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }
    
    li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }
    
    li a.active {
      background-color: rgb(226, 223, 223);
      color: white;
    }
    
    li a:hover:not(.active) {
      background-color: #555;
      color: white;
    }
 
    .photo img{
      float: auto;
      max-height: 70px;
      width: 70px;
      margin-left: 95%;
    }
    .long{
      background:rgb(42, 165, 138);
      height:100px;
      display:flex;
      justify-content:space-between;
    }
    .long img{
      position: relative;
      height: 100px;
     width: 150px;
     float: left; 
    /* background: url('../images/1670328611300.png'); */
     animation:one 16s infinite;
   
}
.logo{
  width:96%;
}
@keyframes one {
    from{ margin-left:0px;}
    to{margin-left: 80%;}
}
.pic{
  margin-top:20px;
}
.pic a{
 
  font-size:2.1rem;
  text-decoration:none;
  margin-right:30px;
}
.pic a:hover{
  color:white;
}
    
    </style>
</head>
<body>
  

    <div clas="container">
      <div class="long">
        <div class="logo"><img src="../images/1670328611300 copy.png" alt="logo" srcset=""></div>
        <div class="pic"><a href="../index.php">Home</a></div>
      </div>
    <ul>
      
        <li><?php echo "<a class='active' href='#home'>Home</a>"?></li>
        <li><?php echo "<a href='aadmin.php'>Admin</a>"?></li>
        <li><?php echo"<a href='../html and css/payment.php'>Rent</a>"?></li>
        <li><?php echo "<a href='Houses.php'>Houses</a>"?></li>
        <li><?php echo "<a href='tenants.php'>Tenant</a>"?></li>
        <li><?php echo "<a href='landlordboard.php'>Landlords</a>"?></li>
        <li><?php echo"<a href='admin_building.php'>Building</a>"?></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
</body>
</html>
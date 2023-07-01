<?php
include('connect/connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>House management system</title>
  <link rel="stylesheet" href="indexx.css">
 <link rel="stylesheet" href="hree.css">
</head>

<body>
  <form action="" method="post">
    <div class="nav_bar">
      <div class="left"><img id="img" src="images/1670328611300.png" alt="logo"></div>
      <div class="right">
        <ul>
          <li><a href="#">Home</a></li>
          <!-- <li><a href="#apartment">Apartment</a></li>
    <li><a href="#studio">Studio</a></li>
    <li><a href="">Room(Internal toilet and kitchen)</a></li>
    <li><a href="">Room(Internal toilet)</a></li>
    <li><a href="">Single simple room </a></li> -->
        </ul>
      </div>
    </div>
    <div class="hero">
      <div class="left_hero">
        <h1>Welcome to Online housing Buea, town of legendary hospitality</h1>
        <h2>Do some few clicks to get your affordable dream student room</h2><br><br>
        <?php echo'<a href="userssp.php"><h3 class="h3">CREATE AN ACCOUNT</h3></a>'  ?>
        <?php echo'<a href="userslogin.php"><h3 class="h3">LOGIN</h3></a>'  ?>
      </div>
      <div class="right_hero">
        <span>
          <div><select name="location" id="">
              <option value="" select hidden>Select location</option>
              <option value="">Mile 17</option>
              <option value="">Molyko</option>
              <option value="">checkpoint</option>
              <option value="">clarks Quarters</option>
              <option value="">Soppo</option>
              <option value="">Buea Town</option>
            </select></div>
          <div>

            <select onchange='scrollinto(this)' name="house type" id="">
              <option value="" select hidden>Select Type of House</option>
              <option value="#apartment">Apartment</option>
              <option value="#studio">Studio</option>
              <option value="#single_room">Single Room</option>
              <option value="#double_room">Double Room</option>
              <option value="#guest_house">Guest House</option>
              <option value="#single_rome/kitchen">Single Room/Kitchen</option>
            </select>
          </div>
        </span>

      </div>
      <div class="contact_btn">
        <a href="#contact"><button><b>CONTACT US NOW</b></button></a>
      </div>
    </div>
    </div>
    </div>

    <hr style="height: 3px; background:black;">

 


      <section>
      <h1 style="">STUDIO</h1>
        <div class="studio">
          

      <br>
        <?php
      
         $sql = "SELECT * FROM house WHERE house_discription='studio' ";
         $results = $conn -> query($sql);
        //  $_SESSION['house_id'];
        //  $house_id=  $_SESSION['house_id'];
        
         if($results -> num_rows > 0) {
           while($row = mysqli_fetch_assoc($results)) {
             
?>

            <div class="structure">
           
          <a target="_blank" href="detail.php?house_id= <?php  echo $row['house_id']?>">
            <img src="./<?php echo $row['house_picture']; ?>" alt="Forest" width="120px" height="120px">
          </a>
          <div class="desc"><?php echo $row['house_discription']; ?><br>
            price/year: <b><?php echo $row['house_price']; ?> </b><br>
            <i>PLEASE CONTACT US FOR MORE DETAILS</i>
            <?php echo '<a href="tenant_sp.php">pay here</a>'?>
          </div>
        </div>
        
        <!-- <div class="apartment">
        <h1 style="text-align: center;">STUDIO</h1> -->
      
        <?php

}
}
?>





    </div>
    </section>
    <hr style="height: 6px; background-color: rgb(1, 54, 54); overflow: hidden; width: 100%">

    <section>
      <!-- APARTMENT SECTION -->
      <h1 style="">APARTMENT</h1>
        <div class="studio">
      
        <?php
      
         $sql = "SELECT * FROM house WHERE house_discription='apartment' ";
         $results = $conn -> query($sql);
         if($results -> num_rows > 0) {
           while($row = mysqli_fetch_assoc($results)) {
             
?>
   
   <h1 style=""></h1>

            <div class="structure">
           
          <a target="_blank" href="./<?php echo $row['house_picture']; ?>">
            <img src="./<?php echo $row['house_picture']; ?>" alt="Forest" width="120px" height="120px">
          </a>
          <div class="desc"><?php echo $row['house_discription']; ?><br>
            price/year: <b><?php echo $row['house_price']; ?> </b><br>
           <i>PLEASE CONTACT US FOR MORE DETAILS</i>
            <?php echo '<a href="tenant_sp.php">pay here</a>'?>
          </div>
        </div>
        
        <!-- <div class="apartment">
        <h1 style="text-align: center;">STUDIO</h1> -->
      
        <?php

}
}
?>





    </div>
    </section>
  
<hr>
<!-- <hr style="height: 6px; background-color: rgb(1, 54, 54); overflow: hidden; width: 100%;"> -->
    <footer id="#contact">
      <div>
        <h1>CONTACTS</h1> <br>
        <P id="#contact">TEL: +237 526727387384 <br><br>
          EMAIL ADRESS: house@gmail.com <br><br>
          fax: 0736 <br><br>
          code postal:8373
        </P>
      </div>
      <div>
        <h1>ABOUT</h1> <br>
        <P>Headquaters of Buea,molyko <br><br>
          Beside hotel tyuij <br><br>
          moder house rentals
          <br><br>
          100% trust and rental contract guarantee
        </P>
      </div>
      <div>
        <h1>SERVICES</h1> <br>
        <P>Lorem ipsum dolor sit, amet consectetur adipisicing.<br><br>
          Lorem, ipsum.<br><br>
          lorm11
          <br><br>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, animi ea.
        </P>
      </div>
    </footer>


  </form>
</body>

<script>
  function scrollinto(element){
    document.querySelector(element.value).scrollIntoView();
  }
</script>

</html>
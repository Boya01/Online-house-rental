<?php
session_start();
 include('../connect/connect.php');

 include('nav.php'); 

if (isset($_SESSION['logging']) && $_SESSION['logging'] == true){
  // if logged in
}else{
  header("location: aadmin.php");
  exit();
}

?>
<style>
  body{
    background:url(../images/400_monthlycommon_room_for_rent_1547528960_ac047484.jpg);
   background-repeat:no-repeat;
   background-size:cover;
   background-position:top;

   
}
.content{
  
  margin-top: 10px;
  margin-left:270px;
  background:transparent;
  position: absolute;
  top:50%;
  left:8%;
  transform:translatey(-20%);
}
/* .bubbles img{
  border-radius:22px;
  position:absolute;
  bottom:0;

  height: 50px;
  animation:up 7s infinite ;
}
.bubbles{
  width:100%;
  top:0;
  display:flex;
  justify-content:space-around;
  justify-items:center;
  position:absolute;
  bottom: 0%;
}
@keyframes up{
  0%{
    top:0;
  }
  50%{
    bottom:0;
  }
  100%{
    top:0;
  }
}
.bubbles img:nth-child(1){
  animation-delay:2s;
}
.bubbles img:nth-child(2){
  animation-delay:2s;
} */
</style>
<body>
<div class="content">
  <h1>WELCOME MR ADMIN!!!</h1>
  <h4>.............My SuperHouse Agent For The City Of Buea.....</h4>


</div>
<div class="bubbles">
<img src="../images/400_monthlycommon_room_for_rent_1547528960_ac047484.jpg" alt="">
<img src="../images/400_monthlycommon_room_for_rent_1547528960_ac047484.jpg" alt="">

<img src="../images/400_monthlycommon_room_for_rent_1547528960_ac047484.jpg" alt="">
<img src="../images/400_monthlycommon_room_for_rent_1547528960_ac047484.jpg" alt="">

<img src="../images/400_monthlycommon_room_for_rent_1547528960_ac047484.jpg" alt="">

  </div>
</body>


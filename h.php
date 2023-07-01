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
    <hr style="height: 6px; background-color: rgb(1, 54, 54); overflow: hidden; width: 100%">

<hr style="height: 6px; background-color: rgb(1, 54, 54); overflow: hidden; width: 100%;">
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
          lorm11
          <br><br>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, animi ea.
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
<?php
include('nav-bar.php');
?>

    <div class="hero">
        <div class="left_hero">
            <h1>Welcome to Online housing Buea, town of legendary hospitality</h1>
            <h2>Do some few clicks to get your affordable dream student room</h2><br><br>
            <!-- <?php echo'<a href="tenant_sp.php"><h3 class="h3">CREATE AN ACCOUNT</h3></a>'  ?> -->
        </div>
      
        <div class="right_hero">
          <span>
          <div><select name="location" id="" required>
            <option value="" select hidden>Select location</option>
            <option value="">Mile 17</option>
            <option value="">Molyko</option>
            <option value="">checkpoint</option>
            <option value="">clarks Quarters</option>
            <option value="">Soppo</option>
            <option value="">Buea Town</option>
          </select></div>
          <div>
            <script>
              function drop(element){
                console.log(element.value)
                
              }
            </script>
            <select onchange='drop(this)'  name="house type" id="" required>
              <option value="" select hidden>Select Type of House</option>
              <a href="" class='selecte_section'> <option value="#apartment">Apartment</option></a>
              <option value="">Studio</option>
              <option value="">Single Room</option>
              <option value="">Double Room</option>
              <option value="">Guest House</option>
              <option value="">Single Room/Kitchen</option>
            </select>
          </div>
      </span>
      <div class="contact_btn">
        <a href="#contact"><button>CONTACT US NOW</button></a></div>
      </div>
    </div>
    </div>
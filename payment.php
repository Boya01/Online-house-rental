<!-- INSERT INTO `payment`(`transaction_id`, `payment_method`, `date_of_payment`, `amount_paid`, `amount_left`, `customer_id`, `room_id`, `house_id`, `room_price`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9]) -->

  <?php
  include('../connect/connect.php');
  if($_SERVER['REQUEST_METHOD'] == "POST"){
$method =$_POST['method'];
$date =$_POST['date'];
$amountp =$_POST['amountp'];
$amountl =$_POST['amountl'];
$tenant =$_POST['customer'];
$room =$_POST['room'];
$house =$_POST['house'];
$price =$_POST['price'];
$sql ="INSERT INTO `payment`(`payment_method`, `date_of_payment`, `amount_paid`, `amount_left`, `tenant_id`, `room_id`, `room_price`, `house_id`) VALUES ('$method','$date ','$amountp','$amountl','$tenant ','$room','$price','$house')";
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
      .container{
        max-width:100vw;
        height: 100vh;
        background-image:url(../images/guest_house.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 80px;
      }
      form{
       max-width: 500px;
       

      }
      input{
       float: right;
       height: 25px;
       border-radius: 4px;
      
       
      }
      #button{
        border-radius: 7px;
        color: black;
        width: 120px;
        margin-top: 40px;
        margin-right: 30px;
        background: chartreuse;
        font-size: larger;
        text-align: center;
      }
    </style>
</head>
<body>
  <center>
   <div class="container">
    <form action="" method="POST">
    <h1>PAYMENT</h1>
    <div class="input">
    <label for="payment_method">Method of Payment</label>
    <input type="text" name="method" required><br><br>
    <label for="date">Date of Payment</label>
    <input type="text" name="date" required><br><br>
    <label for="Amount_paid">Amount_paid</label>
    <input type="text" name="amountp" required><br><br>
    <label for="Amount_left">Amount_left</label>
    <input type="text" name="amountl" required><br><br>
    <label for="customer">Customer ID</label>
    <input type="text" name="customer" required><br><br>
    <label for="room_id">Room ID</label>
    <input type="text" name="room" required><br><br>
    <label for="house_id">House ID</label>
    <input type="text" name="house" required><br><br>
    <label for="room_price">Room Price</label>
    <input type="text" name="price" required><br>
    <input type="submit" value="submit" name="submit" id="button">
  </div>
</form>
</center>
</div>
</body>
</html>
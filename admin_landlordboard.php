<?php

include('../connect/connect.php');
include('../ADMIN/nav.php');

if(isset($_POST['delete'])) {
    $landlord_id = $_POST['delete'];

    $sql = mysqli_query($conn, "DELETE FROM `landlord` WHERE landlord_id='$landlord_id'");
    if($sql) {
        echo"<script>alert('Successfuly Deleted Record.!!')</script>";
    }
    else {
        echo"<script>alert('Failed to Deleted Record.!!')</script>";
    }
}



$sql = "SELECT * FROM `landlord`";

$landlord = $conn -> query($sql)

?>

<?php  	  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin-top:100px;
            border-collapse: collapse;
            width: 80%;
            height: 20vh;
            text-align: center;
            float:left;
            margin-left:17%;
        }
        td,th{
            border:2px solid black;
            }

        tr:nth-child(odd){
                background-color:grey;
                
            }
            #delete{
                background: rgb(175, 12, 12);
                color: white;
            }
            #update{
                background: rgb(1, 54, 54);
                color: white;
            }
            .header{
                float:left;
                margin-left:20%;
           display:flex;  
           text-align:center;
            }
             .header a{
                margin-left:200px; 
                margin-top:40px;
                width:300px;
                height:80px;
            }
            .add{
                position:absolute;
                top:40px;
                left:70%;
                float:right;
                margin-top:100px;
                margin-left:auto;
            }
    </style>
</head>
<body>
<div class="header">
<h1>LANDLORDS</h1>
<div class="add">
<?php echo'<a href="../house_rentals/landlordsp.php">ADD LANDLORD</a>' ?>
</div>
</div>
<center> <table>
    
    <tr><th>PICTURE</th><th>LANDLORD ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>PASSWORD</th><th>TELEPHONE</th><th>ADDRESS</th><th>EMAIL</th><th>DATE OF BIRTH</th><th>DOCUMENTS</th><th>NATIONAL ID</th><th>UPDATE</th><th>DELETE</th></tr>
    
        <?php  
        if ($landlord -> num_rows > 0) {
            // header("location: edit_house.php");
            while ($row = $landlord -> fetch_assoc()) {
                # code...

        ?>
        <!-- landlord_fname`, `landlord_lname`, `landlord_pwd`, `landlord_picture`, `landlord_tel`, `landlord_address`, `landlord_email`, `landlord_dob`, `landlord_documents`, `landlord_nic`) -->
    
        <tr><td><?php echo $row ['landlord_picture']?></td><td><?php  echo $row['landlord_id'] ?></td><td><?php  echo $row['landlord_fname'] ?></td><td><?php  echo $row['landlord_lname'] ?></td><td><?php echo $row['landlord_pwd'] ?></td><td><?php echo $row['landlord_tel'] ?></td><td><?php echo $row['landlord_address'] ?></td><td><?php echo $row ['landlord_email']?></td><td><?php echo $row ['landlord_dob']?></td><td><?php echo $row ['landlord_documents']?></td><td><?php echo $row ['landlord_nic']?></td>
        <td>

      <a href="edit_landlord.php?landlord_id=<?php  echo $row['landlord_id']?>"> <button type="submit" name="update" id="update" value="<?php $row['landlord_id']; ?>">UPDATE</button></a> </td>
        <td><button><a href="delete_admin.php?landlord_id=<?php  echo $row['landlord_id']?>">DELETE</a></button></td></tr>
    
        <?php  
                    }
                 } 
                 ?>

    </table></center>
  


</body>
</html>
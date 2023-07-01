<?php

include('../connect/connect.php');
include('../ADMIN/nav.php');

// delete house
if(isset($_POST['submit_delete'])) {
    $house_id = $_POST['submit_delete'];

    $sql = mysqli_query($conn, "DELETE FROM `house` WHERE house_id='$house_id'");
    if($sql) {
        echo"<script>alert('Successfuly Deleted Record.!!')</script>";
    }
    else {
        echo"<script>alert('Failed to Deleted Record.!!')</script>";
    }
}



$sql = "SELECT * FROM `house`";

$houses = $conn -> query($sql)

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
                text-decoration:none;
            }
            img{
                width:100px;
                height:100px;
            }
    </style>
</head>
<body>
<div class="header">
<h1>AVAILABLE HOUSES</h1>
<?php echo'<a href="../house_rentals/house.php">ADD HOUSE</a>' ?>

</div>
 <table>
    
    <tr><th>HOUSE ID</th><th>HOUSE PICTURE</th><th>HOUSE DESCRIPTION</th><th>HOUSE PRICE</th><th>NUMBER OF ROOMS</th><th>BUILDING NUMBER</th><th>UPDATE</th><th>DELETE</th></tr>
    
        <?php  
        if ($houses -> num_rows > 0) {
            // header("location: edit_house.php");
            while ($row = $houses -> fetch_assoc()) {
                # code...

        ?>
    
        <tr><td><?php  echo $row['house_id'] ?></td><td><img src="..house_rental/<?php  echo $row['house_picture'] ?>" alt="picture"></td><td><?php  echo $row['house_discription'] ?></td><td><?php echo $row['house_price'] ?></td><td><?php echo $row['number_rooms'] ?></td><td><?php echo $row['building_id'] ?></td><td>

      <button><a href="edit_house.php?house_id= <?php  echo $row['house_id']?>"name="update">UPDATE</a></button></td>
        <td><a href="delete_admin.php?house_id=<?php echo $row['house_id'] ?>"type="submit" name="submit_delete" id="delete" value="<?php  echo $row['house_id'] ?>">DELETE</a></td>
        <!-- <td>><input type="submit" name="delete" id="delete" value="">DELETE</td></tr> -->
    
        <?php  
                    }
                 } 
                 ?>

    </table>
  


</body>
</html>
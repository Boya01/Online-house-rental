<?php  

include('../connect/connect.php');
include('../ADMIN/nav.php');
?>

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
                /* background: white; */
                color: red ;
            }
            #update{
                background: rgb(1, 54, 54);
                color: white;
            }
            .header{
                /* float:left;
                margin-left:20%; */
           display:flex;  
           text-align:center;
           justify-content:space-around;

          
            }
             .header a{
                margin-left:200px; 
                margin-top:40px;
                width:300px;
                height:80px;
            }
            .header h1{
                margin-left:300px;
                margin-top:40px;
            }
            .header a{
                text-decoration:none;
                font-size:1.6rem;
            }
            .header a:hover{
                color:rgb(42, 165, 138);
            }
    </style>
    
</head>
<body>
<div class="header">
<h1>AVAILABLE BUILDING</h1>
<?php echo' <a href="../house_rentals/building.php">ADD BUILDING</a>';?>

</div>
 <table>
    
    <tr><th>Building ID</th><th>Landlord ID</th><th>Localisation ID</th><th>Building Document</th><th>Building Description</th><th>UPDATE</th><th>DELETE</th></tr>
    
        <?php  
    $sql =  "SELECT * FROM building";
        $building =$conn ->query($sql);
        if (!$building) {
            die("failed to query".$conn -> error);}
            // header("location: edit_house.php");
            while ($row = $building -> fetch_assoc()) {
 # code...
?>             
<tr><td><?php echo $row['building_id'] ?></td><td><?php echo $row['landlord_id']?></td><td><?php echo $row['localization_id']?></td><td><?php $row['building_documents']?></td><td><?php echo $row['description']?></td>
<td> <a href='edit_building.php?id=<?php echo $row['building_id'];?>'>UPDATE</a> </td>
<td id="delete"><a href='delete_admin.php?building_id = <?php echo $row['building_id'];?>'style="color:red;">DELETE </a></td></tr>
<?php
}
        ?>
   
   
      
         <?php  
        //             }
        //          } 
        //          ?>

    </table>
  


</body>
</html>

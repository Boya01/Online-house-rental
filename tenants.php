<?php
include('../connect/connect.php');
include('../ADMIN/nav.php');
$sql = "SELECT * FROM `tenant`";
// ORDER BY tenent_id ASC

$tenant = $conn -> query($sql)

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
        *{
            margin:0px;
            padding:0px;
           box-sizing: border-box;
        }
        body{
            margin:0px;
            padding:0px;
        }
        table{
            
            border-collapse: collapse;
            width: 80%;
            height: 20vh;
            text-align: center;
            float:left;
            margin-left:16%;
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
    </style>
</head>
<body>
<div class="header">
<h1>TENANTS...........@HouseOnline</h1>
<a href="../house_rentals/tenant_sp.php"><button>ADD TENANT</button></a>
</div>
<center> <table>
    
    <tr><th>PICTURE</th><th>TENANT ID</th><th>HOUSE ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>EMAIL</th><th>GENDER</th><th>NATIONAL ID</th><th>DATE OF BIRTH</th><th>TELEPHONE</th><th>USER NAME</th><th>PASSWORD</th><th>UPDATE</th><th>DELETE</th></tr>
    <form action="" method="POST">
        <?php  
        if ($tenant -> num_rows > 0) {
           
            while ($row = $tenant -> fetch_assoc()) {
                # code...

        ?>
    
        <tr><td><img src="../house_rentals/<?php  echo $row['tenant_picture'] ?>" alt="picture"></td><td><?php  echo $row['tenant_id'] ?></td><td><?php  echo $row['house_id'] ?></td><td><?php echo $row['tenant_fname'] ?></td><td><?php echo $row['tenant_lname'] ?></td><td><?php echo $row['tenant_email'] ?></td><td><?php echo $row['tenant_gender']?></td><td><?php echo $row['tenant_nic']?></td><td><?php echo $row['tenant_dob']?></td><td><?php echo $row['tenant_tel']?></td><td><?php echo $row['user_name']?></td><td><?php echo $row['tenant_pwd']?></td><td><a href="edit_tenant.php?tenant_id=<?php echo $row['tenant_id'] ?>"><input type="submit" name="update" id="update" value="">UPDATE</a></td><td><a href="delete_admin.php?tenant_id=<?php echo $row['tenant_id'] ?>"><input type="submit" name="delete" id="delete" value="">DELETE</a></td></tr>
        <?php  
                    }
                } ?>
           
</form>

</body>
</html>
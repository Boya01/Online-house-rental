<?php
include('../connect/connect.php');
include('../ADMIN/nav.php');
$sql = "SELECT * FROM `admin`";

$admin = $conn -> query($sql)

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
            }
        /* table{
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

         tr:nth-child(odd){
                background-color:grey; } */
                
           
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
<h1>ADD ADMIN</h1>

<a href="../admin.php"><button>ADD ADMIN</button></a>
</div>
 <table>
    
    <tr><th>ADMIN PHOTO</th><th>ADMIN ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>USER NAME</th><th>EMAIL</th><th>PASSWORD</th><th>STATUS</th><th>LEVEL</th><th>UPDATE</th><th>DELETE</th></tr>
    <form action="" method="POST">
        <?php  
        if ($admin) {
           
            while ($row =mysqli_fetch_assoc($admin)) {
                $pic =$row['admin_picture'];
                $id = $row['admin_id'];
                $fname =$row['admin_fname'];
                $lname =$row['admin_lname'];
                $username =$row['admin_username'];
                $email =$row['admin_email'];
                $pwd =$row['admin_pwd'];
                $status =$row['admin_status'];
                $level =$row['admin_level'];
                echo'
                <tr>
                <th><img src="../house_rentals/'.$pic.' alt="picture"></th>
                <th>'.$id.'</th>
                <th>'.$fname.'</th>
                <th>'. $lname.'</th>
                <th>'.$username.'</th>
                <th>'. $email.'</th>
                <th>'. $pwd.'</th>
                <th>'. $status.'</th>
                <th>'. $level.'</th>
                <th>
                <button><a href="edit_admin.php?updateid='.$id.'">UPDATE</a></button>
                </th>
                <th>
                <button><a href="delete_admin.php?deleteid='.$id.'">DELETE</a></button>
                </th>
                </tr>
                ';
// echo"
// <tr><td>$row[admin_id]</td><td>$row[admin_fname]</td><td>$row[admin_lname]</td><td>$row[admin_username]</td><td>$row[admin_email]</td><td>$row[admin_pwd]</td><td>$row[admin_status]</td><td>$row[admin_level]</td><td><a href='edit_admin.php?id=$row[admin_id]''>UPDATE</a></td></td><td><a href='delete_admin.php?id=$row[admin_id]'>DELETE</a></td></td></tr>
// ";
//         ?>
  
        <?php  
                    }
                } ?>
    </table>
</form>

</body>
</html>
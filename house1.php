<!-- 
<?php
include('connect/connect.php');
if(isset($_POST['submit'])){


    echo 'hello';


    $fname =$_POST['admin_fname'];
   
    $lname =$_POST['admin_lname'];
    $email =$_POST['admin_email'];
    $uname =  $_POST['admin_username'];
    $pwd =$_POST['admin_pwd'];
    $status =$_POST['admin_status'];
    $level=$_POST['admin_level'];

    
    $extensions = array('image/png', 'image/jpeg', 'image/jpg', 'image/jif');
    $upload_dir = 'uploads/';
    $uploaded_files = array();

    
        if ($_FILES['housefile']) {
            $files = checkFile(reArrayFiles($_FILES['housefile']), $extensions);
            if (!$files) {
                print 'check the files and submit again';
            } else {
                foreach ($files as $file) {
                    $traget_file = $upload_dir . basename($file['name']);
                    // check if file exist 
                    $file['upload_location'] = $target_file;
                    if (!file_exists($traget_file)) {
    
                        move_uploaded_file($file["tmp_name"], $traget_file);
                        // file uploaded
                        save_to_database($file);
                    } else {
                        // if file exist;
                        print $file['name'] . ' already exist <br>';
                    }
                }
            }
        }
        
    
    function checkFile($files, $extensions)
    {
        foreach ($files as $file) {
            if (in_array($file['type'], $extensions)) {
                return $files;
            } else {
                return null;
            }
        }
    }
    
    
    function reArrayFiles($file_post)
    {
        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_key = array_keys($file_post);
    
        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_key as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
                $file_ary[$i]['index'] = $i + 1;
            }
        }
        return $file_ary;
    }
    
    function save_to_database($file)
    {
        $uploaded_files[$file['index']] = $file;
    }


    $image_1 = $uploaded_files[1]['target_location'];
    
    

        $sql= "INSERT INTO `house`(`house_picture`, `house_discription`, `house_price`, `number_rooms`, `building_id`, `other_pic_1`, `other_pic_2`) VALUES ('$image_1','$house_desc',$house_price',$num_room', $building_id,'$newlocation','$newlocation')";
    if($conn -> query($sql)) {
    
        echo"house registration successful";
    }
    else {
        echo 'house registration unsuccessful';
    }
    }
?> -->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <STyle>
*{
    margin: 0;
    padding: 0;
}
body{
    background-image:url(images/FB_IMG_16779243452247734.jpg);
    background-repeat:no-repeat;
    background-position:center;
    background-size:cover;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    text-transform: uppercase;
}
h1{
    margin-bottom: 50px;
    color:red;
}
.Container{

    width: 500px;
    background: rgb(42, 165, 138);
    text-align: center;
    margin-top: 60px;
    padding: 40px;
   

}
.form{
float: left;
   margin-left: 10px;
   max-width: 300px; 
}
label{
    float: left;
}
.form input{
    margin-top:-20px;
    float:left;
    margin-left:200px;
    background: transparent;
    border: none;
    border-bottom: 4px solid red;
   
}
#button{
    
    text-align: center;
    width: 100px;
    border: 1px solid red;
    background: rgba(255, 0, 0, 0.44) ;
    border-radius: 8px;
    color:rgb(0, 3, 2); 
    font-size: larger;
    border-radius: 5px;
}
#button:hover{
    background: rgb(255, 0, 0) ;
    color: rgb(42, 165, 138);
}
#file{
    width: 160px;
}
    </STyle>
</head>
<body>
<div class="Container">
 
<h1>House</h1>
<div class="form">
<form action="" method="POST" enctype="multipart/form-data">
<label for="">house pic:</label>
<input type="file" name="housefile[]" required id="file" multiple><br><br><br>
<label for="">house description</label>
<input type="text" name="house_desc" required="yes"><br><br><br>
<label for="">House Price</label>
<input type="text" name="house_price" required="yes"><br><br><br>
<label for="">Number of rooms</label>
<input type="text" name="house_price" required="yes"><br><br><br>


<label for="building">Building ID</label>
<input type="text" name="building_id" required="yes"><br><br><br>
<input type="submit" id="button" name="submit" value="submit">

</form>
</div>
</div>
</body>
</html>
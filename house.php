<?php
include('connect/connect.php');
$extensions = array('image/png', 'image/jpeg', 'image/jpg', 'image/jif');
$upload_dir = 'upload/';
$files = array();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $house_desc = VALIDATE_POST_TEXT('house_desc');
    $house_price = VALIDATE_POST_TEXT('house_price');
    $room_number  = VALIDATE_POST_TEXT('room_number');
    $building_id = VALIDATE_POST_TEXT('building_id');


    if ($_FILES['image_1']) {
        $file = $_FILES['image_1'];
        $traget_file = $upload_dir . basename($file['name']);
        $file['upload_folder'] = $traget_file;
        if (checkFile($file, $extensions)) {
            $files[0] = $file;
        } else {
            $files[0] = "";
        }
    }
    if ($_FILES['image_2']) {
        $file = $_FILES['image_2'];
        $traget_file = $upload_dir . basename($file['name']);
        $file['upload_folder'] = $traget_file;
        if (checkFile($file, $extensions)) {

            $files[1] = $file;
        } else {
            $files[1] = "";
        }
        if ($_FILES['image_3']) {
            $file = $_FILES['image_3'];
            $traget_file = $upload_dir . basename($file['name']);
            $file['upload_folder'] = $traget_file;
            if (checkFile($file, $extensions)) {

                $files[2] = $file;
            } else {
                $files[2] = "";
            }
        }
    }


    $sql = "INSERT INTO `house`(`house_picture`, `house_discription`, `house_price`, `number_rooms`, `building_id`, `other_pic_1`, `other_pic_2`)
     VALUES ('" . imagelocation($files[0]) . "','" . $house_desc . "','" . $house_price . "',' " . $room_number . "', '" . $building_id . "','" . imagelocation($files[1]) . "','" . imagelocation($files[2]) . "')";

    // insert into the database
    
    if ($conn -> query($sql)) {
        foreach ($files as $file) {
            $traget_file = $upload_dir . basename($file['name']);
            // check if file exist 
            if (!file_exists($traget_file)) {

                move_uploaded_file($file["tmp_name"], $traget_file);
            } else {
                // if file exist;
                
            }
        }
    }
}

function imagelocation($file)
{
    if ($file != "") {
        return $file['upload_folder'];
    }
    return "";
}


function checkFile($file, $extensions)
{

    if (in_array($file['type'], $extensions)) {
        return $file;
    } else {
        return null;
    }
}


function VALIDATE_POST_TEXT($name)
{
    if (isset($_POST[$name])) {
        return $_POST[$name];
    }
    new ErrorException($name . "is not valid");
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <STyle>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        min-width: 100vw;
        min-height: 100vh;

        background-image: url(images/FB_IMG_16779243452247734.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        text-transform: uppercase;
    }

    h1 {
        margin-bottom: 50px;
        color: red;
    }

    .Container {

        width: 500px;
        background: rgb(42, 165, 138);
        text-align: center;
        margin-top: 60px;
        padding: 40px;
        height: fit-content;


    }

    .form {
        float: left;
        margin-left: 10px;
        max-width: 300px;
    }

    label {
        float: left;
    }

    .form input {
        margin-top: -20px;
        float: left;
        margin-left: 200px;
        background: transparent;
        border: none;
        border-bottom: 4px solid red;

    }

    #button {

        text-align: center;
        width: 100px;
        border: 1px solid red;
        background: rgba(255, 0, 0, 0.44);
        border-radius: 8px;
        color: rgb(0, 3, 2);
        font-size: larger;
        border-radius: 5px;
    }

    #button:hover {
        background: rgb(255, 0, 0);
        color: rgb(42, 165, 138);
    }

    #file {
        width: 160px;
    }
    </STyle>
</head>

<body>
    <div class="Container">

        <h1>House</h1>
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="">house pic:</label>
                <input type="file" name="image_1" accept="image/*" required><br><br><br>
                <input type="file" name="image_2" accept="image/*" required><br><br><br>
                <input type="file" name="image_3" accept="image/*"><br><br><br>
                <label for="">house description</label>
                <input type="text" name="house_desc" required="yes"><br><br><br>
                <label for="">House Price</label>
                <input type="text" name="house_price" required="yes"><br><br><br>
                <label for="">Number of rooms</label>
                <input type="text" name="room_number" required="yes"><br><br><br>


                <label for="building">Building ID</label>
                <input type="text" name="building_id" required="yes"><br><br><br>
                <input type="submit" id="button" name="submit" value="submit">

            </form>
        </div>
    </div>
</body>

</html>
<?php
include('../connect/connect.php');
if(isset($_GET['deleteid'])){
    $id =$_GET['deleteid'];
    $sql ="delete from `admin` where admin_id=$id";
    $result =mysqli_query($conn,$sql);
    if($result){
       // echo'DELETED SUCCESFULLY';
       header('location:aadmin.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
<!-- delete landlord -->
<?php

if(isset($_GET['landlord_id'])){
    $id =$_GET['landlord_id'];
    $sql ="delete from `landlord` where landlord_id=$id";
    $result =mysqli_query($conn,$sql);
    if($result){
       // echo'DELETED SUCCESFULLY';
       header('location:landlordboard.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
<!-- Delete building -->
<?php

if(isset($_GET['building_id'])){
    $id =$_GET['building_id'];
    $sql ="delete from `building` where building_id=$id";
    $result =mysqli_query($conn,$sql);
    if($result){
       // echo'DELETED SUCCESFULLY';
       header('location:admin_building.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
<!--DELETE TENANT  -->
<?php

if(isset($_GET['tenant_id'])){
    $id =$_GET['tenant_id'];
    $sql ="delete from `tenant` where tenant_id=$id";
    $result =mysqli_query($conn,$sql);
    if($result){
       // echo'DELETED SUCCESFULLY';
       header('location:tenants.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
<!-- Delete house -->
<?php
if(isset($_GET['house_id'])){
    $id =$_GET['house_id'];
    $sql ="delete from `house` where house_id=$id";
    $result =mysqli_query($conn,$sql);
    if($result){
       // echo'DELETED SUCCESFULLY';
       header('location:houses.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
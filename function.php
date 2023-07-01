<?php
function emptyinputsignup( $fname,$lname,$email, $address,$gender,$tel, $nic,$pic,$pwd){
$result;
if(!empty($fname)||empty($lname)||empty($email)||empty( $address)||empty($gender)||empty($tel)||empty($nic)||empty($pic)||empty($pwd)){ 
$result = true;
}
else{
    $result = false; 
}
return $result;
}
function userexist($conn,$username,$email){
    $sql = "select * FROM `user` WHERE user_id =? OR user_email=?; ";
    
    //prepared statement restrict certain harmful input
    $stm=mysqli_start_init($conn);
    if(!mysqli_stm_prepare($stm,$sql)){
        header("location:users.php?error=stmfailed");
        exit();
    }
    //check 2 strings using ss
             mysqli_stm_bind_param($stm,"ss",$username,$email);
             mysqli_stm_exercutr($stm);
    $resultData=mysqli_result_stm_get_result($stm);
    if($row = mysqli_fetch_assoc( $resultData)){
return $row; //all users data
    }else{  
        $result =false;
         return $result;
        }
mysqli_stm_close($stm);
    // trying to check random characters for name input
    // if(!preg_match("/^[a-zA-Z0-9]$"), $username){ 
    // $result = true;
    // }
    // else{
    //     $result = false; 
    // }
    // return $result;
    }
    function invalidemail($email){
        $result;
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){ 
        $result = true;
        }
        else{
            $result = false; 
        }
        return $result;
        }
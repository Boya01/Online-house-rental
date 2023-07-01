<?php
//initialise session
session_start();
//unset all session vaiables
$_SESSION = array();
//destroy session
session_destroy();
//redirect to home page
header("location: index.php");
?>
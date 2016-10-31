<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['person_id']);
header("Location: login.php");
die(); 

?>

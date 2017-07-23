<?php
session_start();
$_SESSION['temp']='index';
$_SESSION['user_name']=$_POST['name'];
header("Location:got1.php");
?>

<?php
 session_start();
 if(isset($_SESSION["user_name"]))
 {
	$con=mysqli_connect("localhost","user_college","astuteDB123@","AstuteDB");
	if(mysqli_connect_errno($con))
	{
	echo "A102";
	} 
	else
	{
	$query="insert into questions values('".$_GET["name"]."','".$_GET["got0"]."','".$_GET["got1"]."','".$_GET["got2"]."','".$_GET["got3"]."','".$_GET["got4"]."','".$_GET["got5"]."', '".$_GET["got6"]."','".$_GET["got7"]."','".$_GET["got8"]."','".$_GET["got9"]."','".$_GET["got10"]."','".$_GET["got11"]."' ,'".$_GET["got12"]."')";
	$result=mysqli_query($con,$query);
	echo "success";
	echo $query;
	
	$_SESSION['temp']='ques';
	header("Location:last.html");
	}
}
else
	header("Location:last.html");
?>
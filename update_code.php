<?php
session_start();
 if($_SESSION['usertype']=="admin"){
$name=$_POST['esm'];
$pass=$_POST['pass'];
$mail=$_POST['mail'];
$telephone=$_POST['phone'];
$id=$_POST['id'];

$DB_con=mysqli_connect("localhost","root","","students") 
or die(mysqli_error($DB_con));

$check_user=mysqli_query($DB_con,"UPDATE users SET Name='$name',Password='$pass',telephone='$telephone',Email='$mail' where ID =$id ") or die(mysqli_error($DB_con));
 
 if($check_user){
	header("location: admin_panel.php");
	 
 }
 
 }
 else 
	 header("location: Home.php");

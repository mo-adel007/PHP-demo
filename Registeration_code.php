<?php
$name=$_POST['esm'];
$pass=$_POST['pass'];
$telephone=$_POST['phone'];
$email=$_POST['mail'];


//echo $name ,$pass,$telephone,$email;


$DB_con=mysqli_connect("localhost","root","","students") 
or die(mysqli_error($DB_con));

$query=mysqli_query($DB_con,"INSERT INTO users (Name,Password,Telephone,Email,user_type)values ('$name','$pass','$telephone','$email','user')")or die(mysqli_error($DB_con));

if($query)
	echo"your are registered now in the DB";





?>
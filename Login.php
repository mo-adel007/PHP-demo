<?php
session_start();
$name=$_POST['esm'];
$pass=$_POST['pass'];


$DB_con=mysqli_connect("localhost","root","","students") 
or die(mysqli_error($DB_con));

$check_user=mysqli_query($DB_con,"select * from users where Name='$name' and Password='$pass' ") or die(mysqli_error($DB_con));
 
 $result=mysqli_fetch_array($check_user);
 
 $name_DB=$result['Name'];
	 $user_type=$result['user_type']; 
	 
 if($result && $user_type=='user' ){ 
 header("location: Home.php");
 $_SESSION['name']=$name_DB;
 $_SESSION['usertype']=$user_type;
 }
 
 else if($result && $user_type=='admin' ){
	 
	 header("location: admin_panel.php");
 $_SESSION['name']=$name_DB;
	  $_SESSION['usertype']=$user_type;
 }
	 else
		 echo"wrong Name or password plzzz try again";

?>
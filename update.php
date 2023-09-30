<?php
session_start();
 if($_SESSION['usertype']=="admin"){
$idd=$_GET['id'];

$DB_con=mysqli_connect("localhost","root","","students") 
or die(mysqli_error($DB_con));

$check_user=mysqli_query($DB_con,"select * from users where ID =$idd ") or die(mysqli_error($DB_con));
 
$result=mysqli_fetch_array($check_user);
 
 $name_DB=$result['Name'];
$pass_DB=$result['Password'];
$tele_DB=$result['telephone'];
$mail_DB=$result['Email'];

?>



<form action="update_code.php" method="POST">

<b>Name:</b> <input name="esm" type="text" value="<?php echo $name_DB ?>" required> <br><br>

<b>Password:</b> <input name="pass" type="text" value="<?php echo $pass_DB ?>" required> <br><br>

<input type="hidden" value="<?php echo $idd ?>" name="id">

<b>Phone Number:</b> <input name="phone" type="text" value="<?php echo $tele_DB ?>" required> <br><br>

<b>Email:</b> <input name="mail" type="text" value="<?php echo $mail_DB ?>" required> <br><br>

<input type="submit" value="update">
</form>


 <?php }
 else 
	 header("location: Home.php");


 ?>
<html>
<head></head>
<body bgcolor="orange">
  <?php 
  session_start();
  $DB_con=mysqli_connect("localhost","root","","register") 
or die(mysqli_error($DB_con));

$check_user=mysqli_query($DB_con,"select * from users where user_type ='user' ") or die(mysqli_error($DB_con));
 
 
 if($_SESSION['usertype']=="admin"){
	
  
echo"<h1>Welcome</h1>";
 echo $_SESSION['name'];
 ?>
 <html>
<head></head>
<body>
<table border="5" cellspacing="2" cellpadding="3">
<tr>
<th>
Name
</th>
<th>
password
</th>
<th>
edit$delete
</th>
</tr>
<?php
while($result=mysqli_fetch_array($check_user)){
	
	$id=$result['ID'];
	echo "<tr> <td>".$result['username']."</td>";
	echo "<td>".$result['password']."</td>";	
	echo"<td><a href='update.php?id=$id'><button type='button'>Update</button></a></td></tr>";
}


 }
 else 
	 header("location: Home.php");
?>
</table>
</body>
</html>
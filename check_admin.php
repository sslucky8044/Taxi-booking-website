<?php

if(isset($_POST['login']))
{
	include 'login_database.php';
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	 //$sel="select * from taxi_login_table where `email`='$email' and `password`='$password'";
	//$sel=mysqli_query($con,$sel);
	//echo $sel;
	
	if(($email==$a_email)&&($password==$a_password))
	{
	
?>
		<script>
		alert('Log in Success...!');
		window.location='admin.php';
		</script>
<?php 
	}
	else
	{
?>
	<script>
	alert('Wrong Email and Password...!');
	window.location='admin_login.php';
	</script>
<?php
	}
}
else
{
	header('Location:admin_login.php');
}
	
?>	
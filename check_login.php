<?php
session_start();
if(isset($_POST['login']))
{
	include 'login_database.php';
	$email=$_POST['email1'];
	$password=$_POST['password1'];
	
	$sel="select * from taxi_login_table where `email`='$email' and `password`='$password'";
	$sel=mysqli_query($con,$sel);
	//echo $sel;
	$tmp="select user_id from taxi_login_table where `email`='$email' and `password`='$password'";
	$row=mysqli_query($con,$tmp);

	if(mysqli_num_rows($sel)>=1)
	{
		$_SESSION['login_status']=true;
		$tr=mysqli_fetch_array($row);
		$_SESSION['unid']=$tr['user_id'];
?>
		<script>
		window.location='index.php';
		</script>
<?php 
	}
	else
	{
?>
	<script>
	alert('Wrong Email and Password...!');
	window.location='login_index.php';
	</script>
<?php
	}
}
else
{
	header('Location:login_index.php');
}
	
?>	
<?php
if(isset($_POST['save_form']))
{
	include 'login_database.php'; 
	extract ($_POST);
	$user_id=rand(111,9999999);
	$status=true;
	while($status)
	{
		$ch_ur="select * from booking_table where user_id='$user_id'";
		$run=mysqli_query($con,$ch_ur);
		if(mysqli_num_rows($run)>=1)
		{
			$user_id=rand(111,9999999);
		}
		else{
			$status=false;
		}
	}
	
	$check=true;
	while($check)
	{
		$ch_em="select * from taxi_login_table where email='$email'";
		$go=mysqli_query($con,$ch_em);
		if(mysqli_num_rows($go)>=1)
		{
			?>
			<script>
			alert('Email already registered!');
			window.location='login_index.php';
			</script>
			<?php
		}
		else{
			$ins_que="insert into taxi_login_table(user_id,username,email,password)values('$user_id','$username','$email','$password')";
			mysqli_query($con,$ins_que);
			$check=false;
?>
	<script>
	alert('Data Submitted');
	window.location='login_index.php';
	</script>
<?php
		}
	}
	

}
	else
	{
		header('Location:login.php');
	}
?>
	

<?php
if(isset($_POST['']))
{
	include 'login_database.php'; 
	extract ($_POST);
	//echo $e=$_POST['d'];
	
	$up_que="update booking_table set from_d='$from_d',to_d='$to_d'";	
	mysqli_query($con,$up_que);
?>
	<script>
	//alert('Data Submitted');
	window.location='index.php';
	</script>
<?php
}
	else
	{
		header('Location:index.php');
	}
?>
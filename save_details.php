<?php
include 'check_session.php';
if(isset($_POST['register']))
{
	include 'login_database.php'; 
	extract ($_POST);

	$id=$_SESSION['unid'];
    $ins_que="insert into booking_table(user_id,name,email,phone,from_d,to_d,vehicle,date,status)values('$id','$name','$email','$phone','$from_d','$to_d','$vehicle','$date','Pending')";
	mysqli_query($con,$ins_que);  
	$sel="select distance,cost from cost_table where `from_d`='$from_d' and `to_d`='$to_d'";
	$select=mysqli_query($con,$sel);
	$row=mysqli_fetch_array($select);
	$dis=$row['distance'];
	$t_cost=$row['cost'];
	$update1="update booking_table set `distance`='$dis' where `from_d`='$from_d' and `to_d`='$to_d'";
	$update2="update booking_table set `cost`='$t_cost' where `from_d`='$from_d' and `to_d`='$to_d'";
	mysqli_query($con,$update1); 
	mysqli_query($con,$update2); 
?>
	<script>
	window.location='amount.php';
	</script>
<?php }

else
{
	header('Location:index.php');
}
?>

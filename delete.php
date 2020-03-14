<?php
if(isset($_POST['cancell']))
{
	include 'login_database.php';
	extract ($_POST);
	 $select2="select * from booking_table order by s_no DESC LIMIT 1";
 $get_data=mysqli_query($con,$select2);
$data=mysqli_fetch_array($get_data);
$id=$data['user_id'];

$del="delete from booking_table where `user_id`='$id'";
mysqli_query($con,$del);
?>
    <script>
    
	window.location='index.php';
	</script>
	<?php
}
	else
	{
		header("location:index.php");
	}

?>


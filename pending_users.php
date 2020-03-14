			  <?php 
				include 'header_admin.php';
			  ?>
<section class="reviews-area section-gap">
<div class="form-group">
		<h1 align="center" style="color: black;">Pending Users</h1>
<table align="center" class="container" border="3" style="max-width:1100px;color:black; border:solid black;">
<tr align="center">
<th>S. No.</th>
<th>User Id</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>From</th>
<th>To</th>
<th>Date</th>
<th>Distance</th>
<th>Cost</th>
<th>Total</th>
<th>Vehicle</th>
<th>Status</th>
</tr>

<?php
include 'login_database.php';
$sel_data="select * from booking_table where `status`='pending'";
$res=mysqli_query($con,$sel_data);
$c=1;
while($row=mysqli_fetch_array($res))
{
	?>
	<tr align="center">
	<td><?php echo $c;  ?></td>
	<td><?php echo $row['user_id'];  ?></td>
	<td><?php echo $row['name'];  ?></td>	
	<td><?php echo $row['email'];  ?></td>	
	<td><?php echo $row['phone'];  ?></td>	
	<td><?php echo $row['from_d'];  ?></td>	
	<td><?php echo $row['to_d'];  ?></td>
	<td><?php echo $row['date'];  ?></td>
	<td><?php echo $row['distance'];  ?></td>
	<td><?php echo $row['cost'];  ?></td>
	<td><?php echo $row['total'];  ?></td>
	<td><?php echo $row['vehicle'];  ?></td>
	<td><?php echo $row['status'];  ?></td>
	</tr>
	<?php
	$c++;
}
?>

</table>
</div>
</section>
</body>
</html>
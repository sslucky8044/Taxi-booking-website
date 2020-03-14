<?php
include 'check_session.php';
include 'header.php';
?>

<?php
include 'login_database.php';
$a=1;
$id=$_SESSION['unid'];
$select2="select * from booking_table where `user_id`='$id'";
$get_data=mysqli_query($con,$select2);
while($data=mysqli_fetch_array($get_data))
{


?>

<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						
	

						<div class="col-lg-4  col-md-6 header-right" style="flex: 1 0 50%; max-width: 65%;">
							<table border="5" style="line-height:2.195em;font-size:15px;margin-top:65px;margin-left:-25px;margin-bottom:-11px;width:107%;">
							<tr>
							<td colspan="2" ><h3><i>Customer's details</i></h3></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">Customer's Name:</td>
							<td><?php echo $data['name']; ?></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">Email:</td>
							<td><?php echo $data['email']; ?></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">Phone No:</td>
							<td><?php echo $data['phone']; ?></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">From Destination:</td>
							<td><?php echo $data['from_d']; ?></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">To Destination:</td>
							<td><?php echo $data['to_d']; ?></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">Vehicle:</td>
							<td><?php echo $data['vehicle']; ?></td>
							</tr>
							
						<tr>
							<td colspan="2"><h3><i>Total Amount</i></h3></td>
						</tr>	
							<tr>
							<td style="color:blue;font-weight:bold;">Distance</td>
							<td><?php echo $data['distance']; ?> Km</td>
							</tr>
							
							<tr>
							<td style="color:blue;font-weight:bold;">Charges:</td>
							<td>Rs.<?php echo $data['cost']; ?></td>
							</tr>
							
							<tr>
							<td style="color:blue;font-weight:bold;">Vehicle Charge:</td>
							<td>Rs.500</td>
							</tr>
							
							<tr>
							<td style="color:blue;font-weight:bold;">Total Cost:</td>
							<td>Rs.<?php echo $data['total']; ?></td>
							</tr>
							
							<tr>
							<td colspan="2"><input type="button" onclick="window.print()" value="PRINT" class="genric-btn info radius"></td>
							</tr>
							</table>
						</div>	
					</div>		
				</div>	
			</section>
			<!-- End banner Area -->	
					
<?php
$a++;
}
if ($a==1) {
	?>
	<section class="home-calltoaction-area relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row align-items-center section-gap">
						<div class="col-lg-8">
							<h1>No Records Found!</h1>
							<p>
								There are no orders in your booking history.
							</p>
						</div>
						<div class="col-lg-4 btn-left">
							<a href="index.php" class="primary-btn">Place an order now</a>
						</div>
					</div>
				</div>	
			</section>
	<?php
}
include 'footer.php';
?>
<?php
include 'check_session.php';
include 'header.php';
?>

<?php
include 'login_database.php';
 $select2="select * from booking_table order by s_no DESC LIMIT 1";
 $get_data=mysqli_query($con,$select2);
$data=mysqli_fetch_array($get_data);
$name=$data['name'];
$email=$data['email'];
$phone=$data['phone'];
$from=$data['from_d'];
$to=$data['to_d'];
$vehicle=$data['vehicle'];
$date=$data['date'];
$dist=$data['distance'];
$cost=$data['cost'];
$total=$data['total'];

$up_status="update booking_table set `status`='Confirm' order by s_no DESC LIMIT 1";
mysqli_query($con,$up_status);

?>

<!-- start banner Area -->
			<section class="banner-area relative"style="background: url(img/confirm2.jpg) center;background-size:cover;" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						
	

						<div class="col-lg-4  col-md-6 header-right" style="flex: 1 0 50%; max-width:485px; background-color:peachpuff;border-radius:20px;">
							<form action="ok.php" method="POST">
							<table style="line-height:2.195em;font-size:15px;margin-top:65px;margin-left:-25px;margin-bottom:-11px;width:107%;">
							<tr>
							<td colspan="2"><h2><i>Customer's details</i></h2></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">Customer's Name:</td>
							<td style="color:maroon;"><?php echo $name; ?></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">Email:</td>
							<td style="color:darkblue;"><?php echo $email; ?></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">Phone No:</td>
							<td style="color:maroon;"><?php echo $phone; ?></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">From Destination:</td>
							<td style="color:maroon;"><?php echo $from; ?></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">To Destination:</td>
							<td style="color:maroon;"><?php echo $to; ?></td>
							</tr>
							
							<tr>
							<td style="color:black;font-weight:bold;">Vehicle:</td>
							<td style="color:maroon;"><?php echo $vehicle; ?></td>
							</tr>
							
						<tr>
							<td colspan="2"><h2><i>Total Amount</i></h2></td>
						</tr>	
							<tr>
							<td style="color:blue;font-weight:bold;">Distance</td>
							<td style="color:red;"><?php echo $dist; ?> Km</td>
							</tr>
							
							<tr>
							<td style="color:blue;font-weight:bold;">Charges:</td>
							<td style="color:red;">Rs.<?php echo $cost; ?></td>
							</tr>
							
							<tr>
							<td style="color:blue;font-weight:bold;">Vehicle Charge:</td>
							<td style="color:darkblue;">Rs.500</td>
							</tr>
							
							<tr>
							<td style="color:blue;font-weight:bold;">Total Cost:</td>
							<td style="color:red;">Rs.<?php echo $total; ?></td>
							</tr>
							
							<tr>
							<td><input type="button" onclick="window.print()" value="PRINT" class="genric-btn info radius"></td>
							<td><input type="submit" value="OK" name="ok" class="btn genric-btn info radius" style="background:green"></td>
							</tr>
							</table>
							</form>
						</div>	
					</div>		
				</div>	
			</div>
			</section>
			<!-- End banner Area -->	
					
<?php
include 'footer.php';
?>
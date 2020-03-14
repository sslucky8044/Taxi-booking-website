<?php
include 'check_session.php';
include 'header.php';
include 'login_database.php';
 $select1="select distance,cost from booking_table order by s_no DESC LIMIT 1";
 $get_data=mysqli_query($con,$select1);
$data=mysqli_fetch_array($get_data);
$dis1=$data['distance'];
$cost1=$data['cost']; 
?>

<?php
$fix=500;
$total=$cost1+$fix;

?>


<!-- start banner Area -->
			<section class="banner-area relative" style="background: url(img/amount-taxi.jpg) center;background-size:cover;" id="home">
					
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="col-lg-4  col-md-6 header-right" style="padding-bottom:0px;border-radius:20px; background-color:navajowhite;">
						<form class="form" action="confirmation.php">
							<h3 class="pb-30" style="margin-top:-30px; color:darkblue;font-family:italic;">Total Payable Bill !</h3>
							<table class="form-group"  style="font-size:18px;font-family:Lucida bright;color:black;">
							<tr>
							<td> Km's </td>
							<td> <input style="border-radius:5px;height:40px; width:200px;padding-left:10px;" type="text" value="<?php echo $dis1; ?>" readonly> </td>
							</tr>
							<tr>
							<td> Cost per Km</td>
							<td><input style="border-radius:5px;height:40px; width:200px;padding-left:10px;" type="number" value="<?php echo $cost1; ?>" readonly > </td>
							</tr>
							<tr>
							<td> Fixed Charges </td>
							<td><input style="border-radius:5px;height:40px; width:200px;padding-left:10px;" type="text" value="<?php echo $fix; ?>" readonly> </td>
							</tr>
							<tr>
							<td> Total AMOUNT</td>
							<td><input style="border-radius:5px;height:40px; width:200px;padding-left:10px;" type="number" value="<?php echo $total; ?>" readonly> </td>
							</tr>
			<?php
include 'login_database.php';
 $up="update booking_table set `total`='$total' order by s_no DESC LIMIT 1";
 mysqli_query($con,$up);
?>
							<tr>
						<td colspan="2"><h6 style="color:black;font-size:13px;">To confirm your booking press'CONFIRM' button. </h6></td>
							</tr>							
							<tr>
							<td colspan="2"><button style="margin-top:0px;"class="btn-primary" type="submit" name="confirm_booking">CONFIRM</button></td>
							</tr>
							
								<tr>
						<td colspan="2"><h6 style="color:black;font-size:13px;">To cancel your booking press 'CANCEL' button. </h6></td>
							</tr>				
  </form>
  <form action="delete.php" method="POST">
							<tr>
							<td colspan="2"><a href="delete.php"><button style="margin-top:0px;"class="btn-danger" type="submit" name="cancell" onclick="return confirm('Are you sure...? Your booking will be cancell !')">Cancel</button></a></td>
							</tr>
							</table>
							</form>								
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-left">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 about-right">
							<h1>Connected across India
							by Large Network</h1>
							<h4>We are here to listen from you deliver exellence</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.								
							</p>
							<a class="text-uppercase primary-btn" href="#">Get Details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			
			<!-- Start services Area -->
			<section class="services-area pb-120">
				<div class="container">
					<div class="row section-title">
						<h1>What Services we offer to our clients</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
					<div class="row">
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-car"></span>
							<a href="#"><h4>Taxi Service</h4></a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and power.
							</p>
						</div>
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-briefcase"></span>
							<a href="#"><h4>Office Pick-ups</h4></a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and power.
							</p>
						</div>
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-bus"></span>
							<a href="#"><h4>Event Transportation</h4></a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and power.
							</p>
						</div>												
					</div>	
				</div>	
			</section>
			<!-- End services Area -->
			
			<!-- Start image-gallery Area -->
			<section class="image-gallery-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Image Gallery that we like to share</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>					
					<div class="row">
						<div class="col-lg-4 single-gallery">
							<a href="img/g1.jpg" class="img-gal"><img class="img-fluid" src="img/g1.jpg" alt=""></a>
							<a href="img/g4.jpg" class="img-gal"><img class="img-fluid" src="img/g4.jpg" alt=""></a>
						</div>	
						<div class="col-lg-4 single-gallery">
							<a href="img/g2.jpg" class="img-gal"><img class="img-fluid" src="img/g2.jpg" alt=""></a>
							<a href="img/g5.jpg" class="img-gal"><img class="img-fluid" src="img/g5.jpg" alt=""></a>						
						</div>	
						<div class="col-lg-4 single-gallery">
							<a href="img/g3.jpg" class="img-gal"><img class="img-fluid" src="img/g3.jpg" alt=""></a>
							<a href="img/g6.jpg" class="img-gal"><img class="img-fluid" src="img/g6.jpg" alt=""></a>
						</div>				
					</div>
				</div>	
			</section>
			<!-- End image-gallery Area -->
			
			<!-- Start reviews Area -->
			<section class="reviews-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Client’s Reviews</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Harshit Singh</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Mohit Sharma</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Sirat Nigam</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Ravindra Saluja</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Ajay Bisht</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Gauri Verma</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>																															
					</div>
				</div>	
			</section>
			<!-- End reviews Area -->
							
			<!-- Start home-calltoaction Area -->
			<section class="home-calltoaction-area relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row align-items-center section-gap">
						<div class="col-lg-8">
							<h1>Experience Great Support</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
						</div>
						<div class="col-lg-4 btn-left">
							<a href="#" class="primary-btn">Reach Our Support Team</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-calltoaction Area -->
			
			<!-- Start latest-blog Area -->
			<section class="latest-blog-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Latest News from our Blog</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>						
					<div class="row">
						<div class="col-lg-6">
							<div class="single-latest-blog">
								<div class="thumb">
									<img class="img-fluid" src="img/b1.jpg" alt="">
								</div>
								<ul class="tags">
									<li><a href="#">Travel</a></li>
									<li><a href="#">Life Style</a></li>
								</ul>
								<a href="#">
									<h4>Portable latest Fashion for young women</h4>
								</a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
								</p>
								<p class="date">31st January, 2018</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-latest-blog">
								<div class="thumb">
									<img class="img-fluid" src="img/b2.jpg" alt="">
								</div>
								<ul class="tags">
									<li><a href="#">Travel</a></li>
									<li><a href="#">Life Style</a></li>
								</ul>
								<a href="#">
									<h4>Portable latest Fashion for young women</h4>
								</a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
								</p>
								<p class="date">31st January, 2018</p>
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End latest-blog Area -->
			




<?php
include 'footer.php';
?>
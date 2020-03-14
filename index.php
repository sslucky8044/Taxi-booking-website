<?php
include 'check_session.php';
include 'header.php';
include 'login_database.php';
$id=$_SESSION['unid'];
$select2="select * from taxi_login_table where `user_id`='$id'";
$get_data=mysqli_query($con,$select2);
$data=mysqli_fetch_array($get_data);
?>



<!-- start banner Area -->
<body class="bg agileinfo">
			<section class="banner-area relative" style="background: url(img/chin_img3.jpeg) center;background-size:cover"id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						
						<div class="col-lg-4  col-md-6 header-right"style="padding-top:0px;margin-top:80px;background-color: grey;opacity: 0.5;">
							<h4 class="pb-30" style="margin-top: 20px;color:white;">Welcome <?php echo $data['username'];?>!</h4>
							<form class="form" method="POST" action="save_details.php" style="height:400px;">
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="name" placeholder="Your name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'" required>
							    	<input class="form-control txt-field" type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
							    	<input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'" required>
							    </div>								
							    <div class="form-group">
							       	<div class="default-select" id="default-select">
										<select name="from_d" required>
											<option value="" disabled selected hidden >From Destination</option>
											<option value="agra">Agra</option>
											<option value="lucknow">Lucknow</option>
											<option value="kanpur">Kanpur</option>
										</select>
									</div>
							    </div>
							    <div class="form-group" >
							       	<div class="default-select" id="default-select2">
										<select name="to_d" required>
											<option value="" disabled selected hidden>To Destination</option>
											<option value="delhi">Delhi</option>
											<option value="dehradoon">Dehradoon</option>
											<option value="noida">Noida</option>
										</select>
									</div>
							    </div>
							    <div class="form-group" >
							       	<div class="default-select" id="default-select2">
										<select name="vehicle">
											<option value="" disabled selected hidden>Vehicle</option>
											<option value="5_seater">5 seater</option>
											<option value="7_seater">7 seater</option>
											<option value="minibus">Minibus</option>
										</select>
									</div>
								
							    </div>							    
							    <div class="form-group">
									<div class="input-group dates-wrap">                                              
										<input id="datepicker2" class="dates form-control"  placeholder="year/month/date" type="text"  name="date" required>                        
										<div class="input-group-prepend">
											<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
										</div>											
									</div>
							    </div>
								<div class="form-group">
									<button style="margin-top:0px;"class="btn btn-info btn-md" type="submit" name="register">Check Price</button></td>
								</div>
							  
							</form>
							
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
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.								
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
						<p>We try to make our ride as comfortable as possible.</p>
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
						<p>Some of our exclusive pictures.</p>
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
						<p>Some reviews given by our frequent customers.</p>
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
			
			

</body>


<?php
include 'footer.php';
?>
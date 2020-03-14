
<!DOCTYPE html>
<html>
<head>
<title>TaxiGo - Login or Sign up</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Login and Signup Form web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.9.1.min.js"></script>
<!--// js -->
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
 <link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body class="bg agileinfo" style="background: url(img/login.jpg) center;background-size:cover;">
<section id="home">
	<header id="header">
		  		
			    <div class="container main-menu"style="background:red;max-width:100%;">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="#"><img src="img/logo1.jpg" alt="" title="" /></a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu">
			
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->
<body class="bg agileinfo">
   <div class="w3layouts_main wrap " style="margin-top:80px; width:400px;">
    <!--Horizontal Tab-->
        <div id="parentHorizontalTab_agile">
            <ul class="resp-tabs-list hor_1">
                <li>LogIn</li>
                <li>SignUp</li>
            </ul>
            <div class="resp-tabs-container hor_1">
               <div class="w3_agile_login">
                    <form action="check_login.php" method="post" class="agile_form">
					  <p>Email</p>
					  <input type="email" name="email1" required="required" />
					  <p>Password</p>
					  <input type="password" name="password1" required="required" class="password" /> 
					
					  <input type="submit" value="LogIn" class="agileinfo" name="login" />
					</form>
					 <div class="login_w3ls">
				        <a href="#">Forgot Password</a>
					 </div>
                    
                </div>
                <div class="agile_its_registration">
                    <form action="signup.php" method="post" class="agile_form">
					<table>
					  <p>Username</p>
					  <input type="text" name="username" required="required" />
					  <p>Email</p>
					  <input type="email" name="email" required="required" />
					  <p>Password</p>
					  <input type="password" name="password" id="password1"  required="required">
					  <p>Confirm Password</p>
					  <input type="password" name="Confirm Password" id="password2"  required="required">
					<tr>
					  <td> <input type="submit" value="Signup" name="save_form" style="width:100%;border-radius:5px;padding:20%;padding-right:130%;"></td>
					  <td><input type="reset" value="Reset" style="width:100%;border-radius:5px;margin-left: 195%;padding:25%;padding-right:130%;"></td>
					</tr>
					
					   </table>
					</form> 
				</div>
            </div>
        </div>
		 <!-- //Horizontal Tab -->
    </div>
	<div class="agileits_w3layouts_copyright text-center">
			<p>© 2019 TaxiGo</p>
	</div>
	</body>
<!--tabs-->
<script src="js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//Horizontal Tab
	$('#parentHorizontalTab_agile').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		tabidentify: 'hor_1', // The tab groups identifier
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#nested-tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
});
</script>
<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}

</script>
<!--//tabs-->
</section>
</body>
</html>


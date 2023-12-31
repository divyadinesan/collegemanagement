<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Admin</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholar Vision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

 <link href="<?php echo base_url('Asset/Admin/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
 <link href="<?php echo base_url('Asset/Admin/css/font-awesome.css')?>" rel="stylesheet"> 
<!-- Flex-slider-CSS --><link rel="stylesheet" href="<?php echo base_url('Asset/Admin/css/flexslider.css')?>" type="text/css" media="screen" property="" />
<!-- Owl-carousel-CSS --><link href="<?php echo base_url('Asset/Admin/css/owl.carousel.css')?>" rel="stylesheet">
<!-- Index-Page-CSS --><link href="<?php echo base_url('Asset/Admin/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom-Stylesheet-Links -->
<!--web-fonts-->
<!-- Headings-font --><link href="<?php echo base_url('Asset/Admin///fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700')?>" rel="stylesheet">
<!-- Body-font --><link href="<?php echo base_url('Asset/Admin///fonts.googleapis.com/css?family=Lato:300,400,700')?>" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
<!-- js -->
</head>
<body>
<!-- banner -->
<div class="" id="home"  style="background-image: url('<?php echo base_url('Asset/Admin/images/bg3.jpg')?>');">
	<div class="banner-overlay-agileinfo">
	<div class="top-header-agile">
		<h1><a class="col-md-4 navbar-brand" href="index.html">Scholar Vision<span>Education for everyone</span></a></h1>
		<div class="col-md-4 top-header-agile-right">
				<ul>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-md-4 top-header-agile-left">
				<ul class="num-w3ls">
					<li><i class="fa fa-phone" aria-hidden="true"></i></li>
					<li>+0 097 338 004</li>
				</ul>
				
					</div>
			
			<div class="clearfix"></div>
		</div>

		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-3" id="link-effect-3">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo base_url('index.php/Admincontroller/admin_home')?>" data-hover="Home">Home</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Department<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('index.php/Admincontroller/add_department')?>">Add Department</a></li>
									<li><a href="icons.html">Manage Department</a></li>
								</ul>
							</li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Subject<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('index.php/Admincontroller/add_subject')?>">Add Subject</a></li>
									<li><a href="icons.html">Manage Subject</a></li>
								</ul>
							</li>
							
							
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Syllebus<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('index.php/Admincontroller/syllebus')?>">Add Syllebus</a></li>
									<li><a href="icons.html">Manage Syllebus</a></li>
								</ul>
							</li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Faculty<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<br>
									<li><a href="<?php echo base_url('index.php/Admincontroller/add_faculty')?>">Add Faculty</a></li><br>
									
								</ul>
							</li>

								<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Student<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<br>
									<li><a href="<?php echo base_url('index.php/Admincontroller/student')?>">Add Student</a></li><br>
									
								</ul>
							</li>


								<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">TimeTable<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('index.php/Admincontroller/timetable')?>">Add TimeTable</a></li>
									<li><a href="icons.html">Manage TimeTable</a></li>
								</ul>
							</li>


							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Holiday<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('index.php/Admincontroller/add_holiday')?>">Add Holiday</a></li>
									<li><a href="icons.html">Manage Holiday</a></li>
								</ul>
							</li>

							
							
							
						</ul>
					</nav>
				</div>
			</nav>	
		
		</div>
	</div>
</div>
<!-- //banner -->	
<!-- about -->
	<div class="about-w3layouts">
		<div class="container">
			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids1 wow slideInLeft">
				<div class="gallery-grid-images agileits w3layouts">
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-1 history-grid-image">
						<img src="<?php echo base_url('Asset/Admin/images/a1.jpg')?>" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-2 history-grid-image">
						<img src="<?php echo base_url('Asset/Admin/images/a2.jpg')?>" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-3 history-grid-image">
						<img src="<?php echo base_url('Asset/Admin/images/a3.jpg')?>" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-4 history-grid-image">
						<img src="<?php echo base_url('Asset/Admin/images/a4.jpg')?>" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-5 history-grid-image">
						<img src="<?php echo base_url('Asset/Admin/images/a5.jpg')?>" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-6 history-grid-image">
						<img src="<?php echo base_url('Asset/Admin/images/a6.jpg')?>" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids2 wow slideInRight">
				<h2 class="tittle-agileits-w3layouts">About Our Scholar Vision</h2>
				<h5>LOREM IPSUM DOLOR SIT AMET</h5>
				<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor. In hac habitasse platea dictumst. Donec nunc nunc,interdum sed aliquet quis.</p>
				<p class="para-w3-agile">conditum vitae enim. Quisque molestie consectetur urna quis scelerisque. Morbi at lectus sapien. Donec fgiat arcu in mi placerat ullamcorper.</p>
				<a href="single.html" class="button-w3layouts hvr-rectangle-out">know more</a>
			</div>
			<div class="clearfix"></div>
			
		</div>
	</div>
	<!-- //about -->

<!--/services-->
<div class="services-w3-agileits w3agileits-ref">
	<div class="col-md-6 services-left">
		<div class="service-grid1">
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-language" aria-hidden="true"></i>
				<h5>Language Lessons</h5>
				<p>Lorem ipsum dolor sit amet </p>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-users" aria-hidden="true"></i>
				<h5>Qualified Teachers</h5>
				<p>Lorem ipsum dolor sit amet </p>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
				<h5>Special Education</h5>
				<p>Lorem ipsum dolor sit amet </p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="service-grid2">
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-cutlery" aria-hidden="true"></i>
				<h5>Meals Provided</h5>
				<p>Lorem ipsum dolor sit amet </p>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-bus" aria-hidden="true"></i>
				<h5>Transportation</h5>
				<p>Lorem ipsum dolor sit amet </p>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
				<h5>Full Day Session</h5>
				<p>Lorem ipsum dolor sit amet </p>
			</div>
			<div class="clearfix"></div>
		</div>		
	</div>
	<div class="col-md-6  services-right">
		<div class="services-info">
			<h3 class="tittle-agileits-w3layouts white-w3ls">Our best services</h3>
			<p class="para-w3-agile white-w3ls">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor. In hac habitasse platea dictumst. Donec nunc nunc,interdum sed aliquet quis.</p>
			<a href="single.html" class="button-w3layouts hvr-rectangle-out">Learn more</a>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!--//services-->
<!-- agile_testimonials -->
<div class="test">
	<div class="container">
	<div class="col-md-3 test-left-agileinfo">
	<h3 class="tittle-agileits-w3layouts">Testimonials</h3>
	</div>
		<div class="col-md-9 test-gr">
					<div class=" test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<h4>Steve Warner</h4>
										<span>Lorem Ipsum</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t1.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor.</p>
										<h4>Andery</h4>
										<span>Lorem Ipsum</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t2.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<h4>williams</h4>
										<span>Lorem Ipsum</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t3.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<h4>Shane Smith</h4>
										<span>Lorem Ipsum</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t4.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>	
					</div>
				</div>	
		</div>
	</div>
</div>
<!-- //agile_testimonials -->
<!-- Register -->
<div class="register-wthree">
	<div class="container">
	<div class="col-md-6 regstr-l-w3-agileits">
	<h3 class="tittle-agileits-w3layouts white-w3ls">Get online <span>courses for free</span></h3>
	<h4>Register Now</h4>
	<!--timer-->
     		<section class="examples">
					<div class="simply-countdown-losange" id="simply-countdown-losange"></div>
					<div class="clear"></div>
				</section>
				<div class="clearfix"></div>
	<!--//timer-->
	</div>
	<div class="col-md-6 regstr-r-w3-agileits">
	<div class="form-bg-w3ls">
		<h3>Fill the register form</h3>
		<p class="para-w3-agile white-w3ls">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<form action="#" method="post">
			<input type="text"  name="Name" placeholder="Full name" required="" />
			<input type="email"  name="Email" placeholder="Email" required="" />
			<select class="form-control">
				<option>Select a course</option>
				<option>Philosophy</option>
				<option>Contemporary Art</option>
				<option>Geometry Course</option>
			</select>
			<input type="submit" value="Submit" class="button-w3layouts hvr-rectangle-out">
		</form>	
	</div>
	</div>
	<div class="clearfix"></div>
	</div>
</div>
<!-- //Register -->
<!--footer-->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-md-4 footer-grids w3l-agileits">
					<h6><a href="index.html">Scholar Vision</a></h6>
					<p class="footer-one-w3ls">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor. </p>
					<div class="top-header-agile-right">
						<ul>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-2 footer-grids w3l-agileits">
					<h3>Footer Menu</h3>					
					<ul class="b-nav">
						<li><a href="#home">Home</a></li>
						<li><a href="about.html" >About us</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">
					<h3>Contact Info</h3>
					<p>Virginia, USA</p>
					<p>+0 097 338 004</p>
					<p>El Montee RV, Sterling USA</p>
					<p><a href="mailto:info@example.com">mail@example.com</a></p>
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">	
					<h3>Newsletter</h3>
					<p>It was popularised in the 1960s with the release Ipsum. <p>
					 <form action="#" method="post">		 
							<input type="email" class="text" required="" />
							<input type="submit" value="Go" />					 
				     </form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--//footer-->	
<!-- copy-right -->
			<div class="copyright-wthree">
				<p>&copy; 2017 Scholar Vision . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
			</div>
<!-- //copy-right -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

	
<script type="text/javascript" src="<?php echo base_url('Asset/Admin/js/jquery-2.1.4.min.js')?>"></script>
<!-- flexSlider -->
							<script defer src="<?php echo base_url('Asset/Admin/js/jquery.flexslider.js')?>"></script>
							<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>
<!-- //flexSlider -->
<!-- requried-jsfiles-for owl -->
 <script src="<?php echo base_url('Asset/Admin/js/owl.carousel.js')?>"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->
<!-- Countdown-Timer-JavaScript -->
			<script src="<?php echo base_url('Asset/Admin/js/simplyCountdown.js')?>"></script>
			<script>
				var d = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);

				// default example
				simplyCountdown('.simply-countdown-one', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate()
				});

				// inline example
				simplyCountdown('.simply-countdown-inline', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					inline: true
				});

				//jQuery example
				$('#simply-countdown-losange').simplyCountdown({
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					enableUtc: false
				});
			</script>
		<!-- //Countdown-Timer-JavaScript -->


<!--search-bar-->
		<script src="<?php echo base_url('Asset/Admin/js/main.js')?>"></script>	
<!--//search-bar-->


 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('Asset/Admin/js/move-top.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Asset/Admin/js/easing.js')?>"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="<?php echo base_url('Asset/Admin/js/bootstrap.js')?>"></script>
<!-- //for bootstrap working -->
</body>
</html>

<!DOCTYPE html>
<html>

<head>
	<title>Student Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Stretch a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="<?php echo base_url('Asset/Student/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('Asset/Student/css/style.css')?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('Asset/Student/css/font-awesome.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('Asset/Student///fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800')?>" rel="stylesheet">
	<link href="<?php echo base_url('Asset/Student///fonts.googleapis.com/css?family=Mallanna')?>" rel="stylesheet">
</head>

<body>
	<!--Header-->
	
	<div class="header" id="home">

		<!--/top-bar-->
		<div class="top-bar">
			<div class="header-nav-agileits">

				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
						<h1><a class="navbar-brand" href="<?php echo base_url('index.php/Indexcontroller/index')?>">Student Management System </a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="top_nav">
								<li><a href="<?php echo base_url('index.php/Indexcontroller/index')?>" class="active">Home</a></li>
								<li><a href="<?php echo base_url('index.php/Indexcontroller/about')?>">About</a></li>
								<li><a href="<?php echo base_url('index.php/Indexcontroller/contact')?>">Contact</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Sign in<span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url('index.php/Admincontroller/Admin_login')?>">Admin</a></li>
										<li><a href="<?php echo base_url('index.php/Facultycontroller/faculty_index')?>">Faculty</a></li>
										<li><a href="<?php echo base_url('index.php/Studentcontroller/student_index')?>">Student</a></li>
										<li><a href="<?php echo base_url('index.php/Studentcontroller/parent_login')?>">Parents</a></li>
										
									</ul>
								</li>
							
								
							</ul>
						</nav>
					</div>
				</nav>

			</div>
		</div>
		<!--//top-bar-->
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="banner-top">
							<div class="banner-info-w3ls-agileinfo">
								<h3>Opportunities For Lifelong Learning.</h3>
								
							</div>

						</div>
					</li>
					<li>
						<div class="banner-top1">
							<div class="banner-info-w3ls-agileinfo">
								<h3>Education is a path, not a destination</h3>
								
							</div>

						</div>
					</li>
					<li>
						<div class="banner-top2">
							<div class="banner-info-w3ls-agileinfo">
								<h3>Opportunities For Lifelong Learning.</h3>
								
							</div>

						</div>
					</li>
					<li>
						<div class="banner-top3">
							<div class="banner-info-w3ls-agileinfo">
								<h3>Education is a path, not a destination</h3>
								
							</div>

						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>

			<!--banner Slider starts Here-->
		</div>
		<!--//Slider-->
	</div>
	<!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">

						<div class="login-m_page_img">

							<img src="<?php echo base_url('Asset/Student/images/model.jpg')?>" alt=" " class="img-responsive" />

						</div>
						<div class="login-m_page"><br><br>
							<h3 class="sign">Sign In</h3><br>
							<div class="login-form-wthree-agile">
								<form action="<?php echo base_url('index.php/Facultycontroller/faculty_login_insrt')?>" method="post">
									<input type="email" name="email" placeholder="E-mail" required="">
									<input type="password" name="password" placeholder="Password" required="">
									<div class="tp">
										<input type="submit" value="Sign In">
									</div>
								</form>
							</div>
							<br><br>
							<p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- Modal2 -->
	
	<!-- //Modal2 -->

	<!--//Header-->
	<!--/banner_bottom--><br><br><br>
	<div class="">
		<div class="container">
			<h3 class="headerw3" align="center">Staff</h3>
			<div class="inner_sec_w3_agileinfo">
				<?php
				foreach ($faculty as $flty) {
					
				?>
				<div class="col-md-4 grid_info_main">
					<div class="grid_info">
						<div class="icon_info">
							<img src="<?php echo base_url('Asset/Admin/faculty/'.$flty->faculty_image)?>" style="height: 150px;width: 250px">
							<h5><?php echo $flty->faculty_name?></h5>
							<h5><?php echo $flty->faculty_email?></h5>
							
						</div>
					</div>
					
				</div>
				<?php
			}
			?>
				

				<div class="clearfix"> </div>
			</div>
		</div>
	</div><br><br>
	<!-- <div class="banner_bottom">
		<div class="banner_bottom_in">
			<h3 class="headerw3">Take the world's best courses, online.</h3>

			<p>Lorem ipsum dolor sit amet, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
				nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

			<div class="edu_button">
				<a class="btn btn-primary btn-lg" href="about.html" role="button">Read More </a>
			</div>
			
		</div>
	</div> -->
	<!--//banner_bottom-->
	<div class="sec_video">
		<div class="container">
			<div class="about-main about1">
				<div class="col-md-4 about-gd">
					<div class="about-sub-gd">
						<h4>Curated Classes</h4>
						<p>Finding online education resources may not be difficult, but finding great resources known to be high-quality is a challenge.

CuratedCourses is here to help.</p>
					</div>
					<div class="about-sub-gd">
						<h4>Expert Instructors</h4>
						<p>The College considers our students as reservoirs of talent and we spare no effort in imparting them the skills required to be true global professionals. In this regard, the college makes concerted efforts to follow emerging trends in professional education and implement these trends successfully. </p>
					</div>
				</div>
				<div class="col-md-4 about-gd1">
					<img src="<?php echo base_url('Asset/Student/images/video.jpg')?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-4 about-gd ab-right">
					<div class="about-sub-gd">
						<h4>Students Strong</h4>
						<p>Our students learn to accept responsibility in making engineering designs, managerial policies of high standard so that the safety, health and welfare of the people are given special attention. In quest of this commitment, our management and faculty accept the responsibility to ensure continuous progress towards our goal.  </p>
					</div>
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--/video-->
	<!--/what-wedo-->
	
	<!--/what-wedo-->

	<!--/what-wedo-->
	
	<!--/what-wedo-->
	<!--/services-->
	
	<!--//services-->
	<!--/top_spl_courses-->
	<div class="top_spl_courses">
		<div class="container">
			<h3 class="headerw3">Department</h3>
			<div class="inner_sec_w3_agileinfo">
				<div class="mid_slider">
					<!-- banner -->
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1" class=""></li>
							<li data-target="#myCarousel" data-slide-to="2" class=""></li>
							<li data-target="#myCarousel" data-slide-to="3" class=""></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="row">
									<?php
									foreach ($department as $dprtmnt) 
									{
									?>
									<div class="col-md-3 col-sm-3 col-xs-3 slidering">
										<div class="thumbnail"><img src="<?php echo base_url('Asset/Admin/department/'.$dprtmnt->dep_image)?>" alt="Image" style="max-width:100%;height: 100%"></div>
										<h5>Business &amp; Management</h5>
									</div>
									<?php
								}
								?>
								</div>
							</div>
							
							
							
						</div>
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="fa fa-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="fa fa-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
						<!-- The Modal -->
					</div>
				</div>
				<!--//slider-->
			</div>
		</div>
	</div>
	<!--//top_spl_courses-->

	<!-- /newsletter-->
	
	<!-- //newsletter-->
	<!--what-we-do-->
	<div class="what-wedo">
		<div class="container">
			<h3 class="headerw3 two">Career Advice</h3>
			<div class="inner_sec_w3_agileinfo">
				<div class="wedo-main">
					<div class="wedo-right">

					</div>
					<div class="wedo-left">
						<h4 class="sub-hdng">Grow Your Digital Skills With Accenture</h4>
						<p class="paragraph">With content presented by Accenture digital experts, you can learn more about digital topics such as social media, digital marketing, user experience and artificial intelligence in a simple way. Exploring more advanced concepts such as measuring the success of a social media post to designing and developing an app has never been easier, aided by Accenture mentors providing guidance at each step of your journey!.............<br>							The eight digital skills courses explore some of the most in-demand skills in the current digital climate. The Digital Skills for Work and Life and Reimagine Your Career courses are a good place to start as they will introduce you to what digital means, the importance of digital technology and how it’s changing the way we live and work across different sectors, and help you discover the skills and tools to succeed in the workplace.<p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//what-we-do-->
	

	<!-- bootstrap-modal-pop-up -->
	
	<!-- //bootstrap-modal-pop-up -->
	<!--footer-->
	<div class="contact-footer-w3layouts-agile">

		
		<div class="copy-w3-agileits">
			
			<p>@2022 |CodeIgniter Web Framework | Student Management System | Trainer - DIVYA M D| <a href="https://atees.org/">ATEES Industrial Training Pvt Ltd</a> </p>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--/footer -->


	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url('Asset/Student/js/jquery-2.2.3.min.js')?>"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="<?php echo base_url('Asset/Student/js/main.js')?>"></script>
	<script src="<?php echo base_url('Asset/Student/js/responsiveslides.min.js')?>"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!--//search-bar-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/Student/css/easy-responsive-tabs.css ')?>" />
	<script src="<?php echo base_url('Asset/Student/js/easyResponsiveTabs.js')?>"></script>
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
		$(document).ready(function () {

			//Vertical Tab
			$('#parentVerticalTab').easyResponsiveTabs({
				type: 'vertical', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo2');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>
	<!--/script-->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url('Asset/Student/js/move-top.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('Asset/Student/js/easing.js')?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="<?php echo base_url('Asset/Student/js/bootstrap-3.1.1.min.js')?>"></script>


</body>

</html>
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
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


	<link href="<?php echo base_url('Asset/Student/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('Asset/Student/css/style.css')?>" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo base_url('Asset/Student/css/chocolat.css')?>" type="text/css" media="screen">
	<link href="<?php echo base_url('Asset/Student/css/font-awesome.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('Asset/Student///fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800')?>" rel="stylesheet">
	<link href="<?php echo base_url('Asset/Student///fonts.googleapis.com/css?family=Mallanna')?>" rel="stylesheet">


	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet"> -->
</head>

<body>
	<!--Header-->
	<div class="top-bar_sub_w3layouts_agile">
		<h2 class="footer-logo"><a >Student <span>Management System</span></a></h2>
		<div class="search">
			<h5><a class="sign" href="<?php echo base_url('index.php/Facultycontroller/logout')?>" >Faculty Logout</a></h5>
			
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="header inner_banner" id="home">
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
						
					</div>
					
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="top_nav">
								
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Attendance <span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url('index.php/Facultycontroller/Student_Attendance')?>">Student Attendance</a></li>
										
									</ul>
								</li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Syllabus <span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url('index.php/Facultycontroller/faculty_syllebus')?>">syllabus status</a></li>
									
									</ul>
								</li>

								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Assignment<span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url('index.php/Facultycontroller/assignment')?>">Add Assignment</a></li>
										<li><a href="<?php echo base_url('index.php/Facultycontroller/manage_assignment')?>">Manage Assignment</a></li>
										
										<li><a href="<?php echo base_url('index.php/Facultycontroller/student_assignments')?>">Students Assignment</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Seminar<span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url('index.php/Facultycontroller/seminar')?>">Add Seminar</a></li>
										<li><a href="<?php echo base_url('index.php/Facultycontroller/manage_seminar')?>">Manage Seminar</a></li>
										<li><a href="<?php echo base_url('index.php/Facultycontroller/students_seminar')?>">Students Seminar</a></li>
									</ul>
								</li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Recorded Class<span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url('index.php/Facultycontroller/recorded_class_upload')?>">Add Recorded Classes</a></li>
										
										<li><a href="<?php echo base_url('index.php/Facultycontroller/Manage_recordedclass')?>">Manage Recorded Classes</a></li>
									</ul>
								</li>
								
									<li><a href="<?php echo base_url('index.php/Facultycontroller/internal_mark')?>" >Internal mark</a></li>


										<li><a href="<?php echo base_url('index.php/Facultycontroller/semester_timetable')?>" >semester_timetable</a></li>
								
								<li><a href="<?php echo base_url('index.php/Facultycontroller/holiday')?>" >Holidays</a></li>
									<li><a href="<?php echo base_url('index.php/Facultycontroller/faculty_profile')?>" >My Profile</a></li>

								
							</ul>
						</nav>
					</div>
				</nav>

			</div>
		</div>
		<!--//top-bar-->
		<!--/ banner-text -->
		<!--// banner-text -->
	</div>
	<!--//inner_banner-->
	<!--/short-->
	<div class="services-breadcrumb-w3ls-agile">
		<div class="inner_breadcrumb">

			<ul class="short">
			
			</ul>
		</div>
	</div>
	

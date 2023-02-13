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
<div class="" id=""  style="background-image: url('<?php echo base_url('Asset/Admin/images/bg3.jpg')?>'); height: 300px">
	<div class="">
	<div class="top-header-agile">
		<h1><a class="col-md-5 navbar-brand" >Student Management System<span>Education for everyone</span></a></h1>
		<div class="col-md-4 top-header-agile-right">
				
					<a href="<?php echo base_url('index.php/Admincontroller/logout')?>"><img src="<?php echo base_url('Asset/Admin/images/logout.jpg')?>" style="height: 40px;width: 40px"></a>
					
				
			</div>
			<div class="col-md-4 top-header-agile-left">
				
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
					<nav  id="link-effect-3">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo base_url('index.php/Admincontroller/update_password')?>" data-hover="Home">update Password</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Department<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('index.php/Admincontroller/add_department')?>">Add Department</a></li>
									<li><a href="<?php echo base_url('index.php/Admincontroller/manage_department')?>">Manage Department</a></li>
								</ul>
							</li>
							<!-- <li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Exam<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('index.php/Admincontroller/exam')?>">Add Exam</a></li>
									<li><a href="<?php echo base_url('index.php/Admincontroller/manage_exam')?>">Manage Exam</a></li>
								</ul>
							</li> -->
							
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Subject<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('index.php/Admincontroller/add_subject')?>">Add Subject</a></li>
									<li><a href="<?php echo base_url('index.php/Admincontroller/manage_subject')?>">Manage Subject</a></li>
								</ul>
							</li>
							
							
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Syllabus<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<!-- <li><a href="<?php echo base_url('index.php/Admincontroller/syllabus')?>">Add Syllabus</a></li>department_syllabus -->
									<li><a href="<?php echo base_url('index.php/Admincontroller/department_syllabus')?>">Add Syllabus</a></li>
									<li><a href="<?php echo base_url('index.php/Admincontroller/manage_syllabus')?>">Manage Syllabus</a></li>
								</ul>
							</li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Faculty<span class="caret"></span></a>
								<ul class="dropdown-menu">
									
									<li><a href="<?php echo base_url('index.php/Admincontroller/add_faculty')?>">Add Faculty</a></li>
									<li><a href="<?php echo base_url('index.php/Admincontroller/manage_faculty')?>">Manage Faculty</a></li>
									
								</ul>
							</li>

								<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Student<span class="caret"></span></a>
								<ul class="dropdown-menu">
									
									<li><a href="<?php echo base_url('index.php/Admincontroller/student')?>">Add Student</a></li>
									<li><a href="<?php echo base_url('index.php/Admincontroller/manage_student')?>">Manage Student</a></li>
									
								</ul>
							</li>


							<!-- <li class="dropdown menu__item"> -->
								<li>
								<!-- <a href="<?php echo base_url('index.php/Admincontroller/timetable')?>"  data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">TimeTable (internal)</a>
								department_timetable -->
								<a href="<?php echo base_url('index.php/Admincontroller/department_timetable')?>"  data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">TimeTable (internal)</a>
								
							</li>

							<!-- <li class="dropdown menu__item"> -->
								<li>
								<a href="<?php echo base_url('index.php/Admincontroller/timetable_semester')?>"  data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">TimeTable (Semester)<span class="caret"></span></a>
								<!-- <ul class="dropdown-menu">
									<li><a href="<?php echo base_url('index.php/Admincontroller/timetable_semester')?>">Add TimeTable</a></li>
									<li><a href="<?php echo base_url('index.php/Admincontroller/manage_timetable_semester')?>">Manage Timetable</a></li>
								</ul> -->
							</li>


							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Holiday<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('index.php/Admincontroller/add_holiday')?>">Add Holiday</a></li>
									<li><a href="<?php echo base_url('index.php/Admincontroller/manage_holiday')?>">Manage Holiday</a></li>
								</ul>
							</li>

							
							
							
						</ul>
					</nav>
				</div>
			</nav>	
		
		</div>
	</div>
</div>
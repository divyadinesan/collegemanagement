










<!-- // student login -->


<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Parent Login</title>
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

<div class="register-wthree">
	<div class="container">
	<br><br><br><br><br><br>
	<div class="col-md-12 regstr-r-w3-agileits" style="height: 500px">
	<div class="form-bg-w3ls" style="height:480px">
		<h3>Sign In</h3>
		<br>



		<form action="<?php echo base_url('index.php/Studentcontroller/parent_login_check')?>" method="post">
			<label style="color: white">Student Email</label>
						<input type="email"  name="email" placeholder="Student Email" required="" /style="width: 850px;height: 40px"><br><br>
						<label style="color: white">Parent Password</label>
			<input type="text" name="password" placeholder="Parent Password" required="" /style="width: 850px;height: 40px">

			<input type="submit" value="Submit" class="button-w3layouts hvr-rectangle-out"><br><br>
			<h3><a href="<?php echo base_url('index.php/Indexcontroller/index')?>" align="center"><img  src="<?php echo base_url('Asset/Admin/images/home.png')?>" style="height: 40px;width: 40px" ></a></h3>
		</form>	

	</div>
	</div>

	<div class="clearfix"></div>
	</div>
</div>

	

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


	
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
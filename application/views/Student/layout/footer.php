<!--//Gallery-->

	<!--//inner_connectent-->
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
	<!--gallery -->
	<script src="<?php echo base_url('Asset/Student/js/jquery.chocolat.js')?>"></script>
	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.gallery-grid1 a').Chocolat();
		});
	</script>
	<!-- //gallery -->
	<!--//search-bar-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/Student/css/easy-responsive-tabs.css')?> " />
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
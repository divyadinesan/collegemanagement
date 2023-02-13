<?php
$this->load->view('Student/Layout/header');
?>
<?php
foreach ($faculty_fetch as $faculty) 

?>
<div class="top_spl_courses">
		<div class="container">
			
			<div class="inner_sec_w3_agileinfo">

				<div class="col-md-6 edu-left">
					<h4 class="sub-hdng two"><?php echo $faculty->faculty_name?></h4>
					
					<p class="paragraph"><b>Email Id </b>: <?php echo $faculty->faculty_email?></p>
					<p class="paragraph"><b>Faculty Id</b> : <?php echo $faculty->faculty_password?></p>
					<p class="paragraph"><b>subject </b>: <?php echo $faculty->subject_name?></p>
					

				</div>
				<div class="col-md-6 edu_img">
					<img src="<?php echo base_url('Asset/Admin/Faculty/'.$faculty->faculty_image)?>" alt=" " class="img-responsive" style="height: 350px;width: 350px">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<?php
$this->load->view('Student/Layout/footer');
?>
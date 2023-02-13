<?php
$this->load->view('Student/Layout/parent_header');
?>
<br><br>

<div class="">
		<div class="container">
			<!-- <h3 class="headerw3">Featured Courses</h3> -->
			<div class="inner_sec_w3_agileinfo">
				<div class="col-md-4 grid_info_main">
					<div class="grid_info">
						<div class="icon_info">
								<a href="<?php echo base_url('index.php/Studentcontroller/parent_student_internal/'.$sem='S1')?>"><span class="fa fa-laptop" aria-hidden="true"></span></a>
							<h5>S1</h5>
							
						</div>
					</div>
					<div class="grid_info second">
						<div class="icon_info">
								<a href="<?php echo base_url('index.php/Studentcontroller/parent_student_internal/'.$sem='S2')?>"><span class="fa fa-laptop" aria-hidden="true"></span></a>
							<h5>S2</h5>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 grid_info_main">
					<div class="grid_info">
						<div class="icon_info">
								<a href="<?php echo base_url('index.php/Studentcontroller/parent_student_internal/'.$sem='S3')?>"><span class="fa fa-laptop" aria-hidden="true"></span></a>
							<h5>S3</h5>
							
						</div>
					</div>
					<div class="grid_info second">
						<div class="icon_info">
								<a href="<?php echo base_url('index.php/Studentcontroller/parent_student_internal/'.$sem='S4')?>"><span class="fa fa-laptop" aria-hidden="true"></span></a>
							<h5>S4</h5>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 grid_info_main">
					<div class="grid_info">
						<div class="icon_info">
						<a href="<?php echo base_url('index.php/Studentcontroller/parent_student_internal/'.$sem='S5')?>">	<span class="fa fa-laptop" aria-hidden="true"></span></a>
							<h5>S5</h5>
							
						</div>
					</div>
					<div class="grid_info second">
						<div class="icon_info">
							<a href="<?php echo base_url('index.php/Studentcontroller/parent_student_internal/'.$sem='S6')?>"><span class="fa fa-laptop" aria-hidden="true"></a>
							<h5>S6</h5>
							
						</div>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div><br>
<?php
$this->load->view('Student/Layout/footer');
?>
<br><br>
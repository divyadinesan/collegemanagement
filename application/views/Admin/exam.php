<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Add Exam</h3>
			
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/exam_insrt')?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="name" placeholder="" required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira">Exam Name</span>
							</label>
						</span>
						
					</div>
					<div class="col-md-12 w3_agileits_contact_right">
						
						<div class="w3_agileits_contact_right2">
							<input type="submit" value="Submit">
						</div>
						<div class="clearfix"> </div>
					</div>
				
			
				</form>
			</div>
		</div>
	</div>

<?php
$this->load->view('Admin/Layout/admin_footer');
?>

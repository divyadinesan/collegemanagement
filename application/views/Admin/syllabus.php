<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Add Syllabus</h3>
			
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/syllabus_insrt')?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
						
						<span class="input input--akira">
							<select class="input__label-content input__label-content--akira" name="sub_id">
								<option>Choose Subject</option>
								<?php
								foreach ($subject as $sjbt) {
								
								?>
								<option value="<?php echo $sjbt->subject_id ?>"><?php echo $sjbt->subject_name?></option>
								<?php
							}
							?>
							</select>
							
						</span>
						
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="module1" placeholder="" required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira">Module 1</span>
							</label>
						</span>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="module2" placeholder="" required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira">Module 2</span>
							</label>
						</span>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="module3" placeholder="" required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira">Module 3</span>
							</label>
						</span>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="module4" placeholder="" required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira">Module 4</span>
							</label>
						</span>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="module5" placeholder="" required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira">Module 5</span>
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


<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Update Syllabus</h3>
			<?php
			foreach ($syllabus as $sylbs) 
			?>
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/syllabus_update')?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
						<input type="hidden" name="syllabus_id" value="<?php echo $sylbs->syllabus_id?>"><label>Subject Name</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="" placeholder="" value="<?php echo $sylbs->subject_name?>" / readonly>
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<select class="input__label-content input__label-content--akira" name="sub_id">
								<option value="<?php echo $sylbs->subject_id ?>">Choose Subject</option>
								<?php
								foreach ($subject as $sjbt) {
								
								?>
								<option value="<?php echo $sjbt->subject_id ?>"><?php echo $sjbt->subject_name?></option>
								<?php
							}
							?>
							</select>
							
						</span>
						<br><br>
						<label>
							Module 1
						</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="module1" placeholder=""value="<?php echo $sylbs->module1?>" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<br><br>
						<label>
							Module 2
						</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="module2" placeholder=""value="<?php echo $sylbs->module2?>" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>

						<br><br>
						<label>
							Module 3
						</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="module3" placeholder=""value="<?php echo $sylbs->module3?>" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<br><br>
						<label>
							Module 4
						</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="module4" placeholder=""value="<?php echo $sylbs->module4?>" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<br><br>
						<label>
							Module s
						</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="module5" placeholder=""value="<?php echo $sylbs->module5?>" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
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


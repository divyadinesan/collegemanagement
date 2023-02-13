<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Update Faculty</h3>
			
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/faculty_edit')?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
											<?php
											foreach ($faculty as $flty) 
											?>
											<input type="hidden" name="faculty_id" value="<?php echo $flty->faculty_id?>">	
										<label>Faculty name</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_name" placeholder="" value="<?php echo $flty->faculty_name?>" >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<br><br><label>Date Of Birth</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_dateofbirth"  value="<?php echo $flty->faculty_dateofbirth?>">
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span><br><br>
						<label>Phone Number</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_phone"  value="<?php echo $flty->faculty_phone?>" >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						</span><br><br>
<label>Email</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_email"  value="<?php echo $flty->faculty_email?>" readonly >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"> </span>
							</label>
						</span><br><br>
						<label>Password </label>

						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_password"   value="<?php echo $flty->faculty_password?>" >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span><br><br>
						<label>Address </label>

						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_address" value="<?php echo $flty->faculty_address?>" >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"> </span>
							</label>
						</span><br><br>
<label>Image</label><br>
<img src="<?php echo base_url('Asset/Admin/faculty/'.$flty->faculty_image)?>">
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="file" id="input-22" name="image"  >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira">Photo </span>
							</label>
						</span>
						
					
						
					<div class="col-md-12 w3_agileits_contact_right">
						
						<div class="w3_agileits_contact_right2">
							<input type="submit" value="Submit">
						</div>
						<div class="clearfix"> </div>
					</div>
				
			
				</form>
			</div>
		</div>
	</div><br><br><br>

<?php
$this->load->view('Admin/Layout/admin_footer');
?>


<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Add Faculty</h3>
			
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/faculty_insrt')?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
											
						<span class="input input--akira">
							<label>Faculty name</label>	
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_name" placeholder="" required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<label>Date Of Birth</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_dateofbirth"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<label>Gender</label>
							<select class="input__field input__field--akira"  id="input-22" name="faculty_gender"  required="" />
								<option value="Female">Female</option>
								<option value="Male">Male</option>
								<option value="Others">Others</option>
							</select>
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<label>Phone Number</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_phone"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>

						<span class="input input--akira">
							<label>Email</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_email"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"> </span>
							</label>
						</span>

						<span class="input input--akira">
							<label>Password</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_password"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"> </span>
							</label>
						</span>

						<span class="input input--akira">
							<label>Address</label>

							<input class="input__field input__field--akira" type="text" id="input-22" name="faculty_address"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira" ></span>
							</label>
						</span>

						<span class="input input--akira">
							
							<input class="input__field input__field--akira" type="file" id="input-22" name="image"  required="" / >
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


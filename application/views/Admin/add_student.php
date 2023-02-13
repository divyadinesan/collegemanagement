<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Add Student</h3>
			
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/student_registration')?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
												
						<span class="input input--akira">
							<label>Student name</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="name" placeholder="" required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<label>Register Number</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="reg"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<label>Email</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="email"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<label>Date Of Birth</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="dob"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>

							<span class="input input--akira">
								<label>Phone Number</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="ph"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>

						<span class="input input--akira">
							<label>Choose Semester</label>
							<select class="input__label-content input__label-content--akira" name="semester">
								
								
								<option value="S1">S1</option>
								<option value="S2">S2</option>
								<option value="S3">S3</option>
								<option value="S4">S4</option>
								<option value="S5">S5</option>
								<option value="S6">S6</option>
								<option value="S7">S7</option>
								<option value="S8">S8</option>
								
							</select>
							
						</span>

						<span class="input input--akira">
							<label>Address</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="address"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						
							<span class="input input--akira">
								<label>Choose Department</label>
							<select class="input__label-content input__label-content--akira" name="dpt_id">
							
								
								<?php
										foreach ($department as $dept) {
										
										?>
										<option value="<?php echo $dept->department_id?>"><?php echo $dept->dep_name?></option>
										<?php
									}
									?>
								
								
							</select>
							
						</span>

						<span class="input input--akira">
							<input class="input__field input__field--akira" type="file" id="input-22" name="image"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira">Photo </span>
							</label>
						</span>
						
						<span class="input input--akira">
							<label>Parent Name</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="parent_name"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						
						<span class="input input--akira">
							<label>Parent Password</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="parent_password"  required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
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


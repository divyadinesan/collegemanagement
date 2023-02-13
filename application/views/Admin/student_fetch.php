<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Update Student</h3>
			<?php
			foreach ($student as $stdnt)
			?>
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/student_edit')?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
									
									<input type="hidden" name="student_id" value="<?php echo $stdnt->student_id?>">		
						<span class="input input--akira">
							<label>Student Name</label>	
							<input class="input__field input__field--akira" type="text" id="input-22" name="name" placeholder="" value=<?php echo $stdnt->s_name?> / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span><br><br>
							
						<span class="input input--akira">
							<label>Register Number</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="reg" value=<?php echo $stdnt->register_no?>  / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span><br><br>
					
						<span class="input input--akira">
								<label>Email</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="email"  value=<?php echo $stdnt->s_email?> >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						
						<span class="input input--akira">
							<label>Date Of Birth</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="dob"   value="<?php echo $stdnt->s_dob?>">
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
							
							<span class="input input--akira">
								<label>Phone Number</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="ph"   value="<?php echo $stdnt->s_phone?>">
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>

						
							
						<span class="input input--akira">
							<label>Address</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="address"  value="<?php echo $stdnt->s_address?>"/ >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span><br>
						
						
							<label>Image</label><br>
							<img src="<?php echo base_url('Asset/Student/student_img/'.$stdnt->s_image)?>" style="height: 100px;width: 300px">
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="file" id="input-22" name="image"  / >
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


<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Add Subject</h3>
			
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/subject_insrt')?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
						<span class="input input--akira">
							<select class="input__label-content input__label-content--akira" name="deprt_id">
								<option>Choose Department</option>
								<?php
								foreach ($department as $dpt) {
								
								?>
								<option value="<?php echo $dpt->department_id ?>"><?php echo $dpt->dep_name?></option>
								<?php
							}
							?>
							</select>
							
						</span>

							<span class="input input--akira">
							<select class="input__label-content input__label-content--akira" name="faculty_id">
								<option>Choose faculty</option>
								<?php
								foreach ($faculty as $flty) {
								
								?>
								<option value="<?php echo $flty->faculty_id  ?>"><?php echo $flty->faculty_name?></option>
								<?php
							}
							?>
							</select>
							
						</span>


						<span class="input input--akira">
							<select class="input__label-content input__label-content--akira" name="semester">
								<option>Choose Semester</option>
								
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
						<br><br><label>Subject name</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="subName" placeholder="" required="" / >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="file" id="input-24" name="image"  required="" />
							<label class="input__label input__label--akira" for="input-24">
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


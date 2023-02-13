<?php
$this->load->view('Admin/Layout/admin_header');
?>
	<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">TimeTable - Semester Exam</h3><br><br><br>
			<form action="<?php echo base_url('index.php/Admincontroller/timetable_semester_insert')?>" method="post" enctype="multipart/form-data">
			<div class="agile_banner_bottom_grids">
				<div class="col-md-4 w3_agile_contact_grid">
					
					<div class="col-xs-10 agile_contact_grid_right agilew3_contact">
						<select style="height: 60px;width: 260px" name="department_id">
							<option>Choose Department</option>
							<?php
							foreach ($department as $dprtmnt) {
							
							?>
							<option value="<?php echo $dprtmnt->department_id?>"><?php echo $dprtmnt->dep_name?></option>
							<?php
						}
						?>
						</select>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3_agile_contact_grid">
					
					<div class="col-xs-10 agile_contact_grid_right agileits_w3layouts_right">
						<select style="height: 60px;width: 260px" name="semester">
						<option>Choose Semester</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
						<option value="S4">S4</option>
						<option value="S5">S5</option>
						<option value="S6">S6</option>
						

						
						</select>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3_agile_contact_grid">
					
					<div class="col-xs-10 agile_contact_grid_right ">
						<label>Upload Timetable</label><br>
						<input type="file" name="image" style="height: 60px;width: 260px">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agile_banner_bottom_grids w3agileits-ref">
				
					
					<div class="col-md-6 w3_agileits_contact_right"><br><br><br>
						
						<div class="w3_agileits_contact_right2">
							<input type="submit" value="Submit"  style="width:1010px">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
<?php
$this->load->view('Admin/Layout/admin_footer');
?>
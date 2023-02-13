<?php
$this->load->view('Faculty/Layout/faculty_header');
?>

<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				


	<form action="<?php echo base_url('index.php/Facultycontroller/faculty_profile_update')?>" method="post">

		<?php
		foreach ($f_profile as $row) 	
		?>

					<div class="signin-form profile">
						<div class="login-m_page_img">
							<img src="<?php echo base_url('Asset/Admin/faculty/'.$row->faculty_image)?>" style="height: 400px;width:250px" >
						</div>
						<div class="login-m_page"><br><br>
							<h3 class="sign">My Profile</h3>
							<div class="login-form-wthree-agile">
								<input type="hidden" name="faculty_id" value="<?php echo $row->faculty_id?>">
									<input type="text" name="f_name" value="<?php echo $row->faculty_name?>">
									<input type="text" name="f_dob" value="<?php echo $row->faculty_dateofbirth	?>">
									<input type="text" name="gender" value="<?php echo $row->faculty_gender	?>">
									<input type="text" name="f_email"value="<?php echo $row->faculty_email?>" readonly>
									<input type="text" name="f_phone" value="<?php echo $row->faculty_phone?>">
									<input type="text" name="f_address" value="<?php echo $row->faculty_address	?>">
									<!-- <input type="file" name="faculty_img"> -->
									<br>
									<div class="tp">
										<input type="submit" value="Submit">
									</div>
								</form>


							</div>
							<br><br>
							
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
$this->load->view('Faculty/Layout/faculty_footer');
?>
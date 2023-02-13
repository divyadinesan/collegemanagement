<?php
$this->load->view('Faculty/Layout/faculty_header');

?>
<div class="modal-dialog">
			<div class="modal-content">
				<div >
				

	<?php
foreach ($seminar as $smnr) 
?>
	<form action="<?php echo base_url('index.php/Facultycontroller/seminar_update/'.$smnr->seminar_id)?>" method="post"enctype="multipart/form-data">


					<div class="signin-form profile">
						<!-- <div class="login-m_page_img">
							<object data="<?php echo base_url('Asset/Faculty/assignment_question/'.$asgmnt->assignment_upload)?>"  width="100%" height="600px" type="application/pdf"></object>
						</div> -->
						<div class="login-m_page"><br><br>
							<h3 class="sign">Update Seminar</h3><br>
							<div class="login-form-wthree-agile">

								<input type="hidden" name="semester" value="">
								<label style="padding-right: 180px;font-size: 15px">Subject Name</label>
									<input type="text" name="subject_name" value="<?php echo $smnr->subject_name?>" readonly><br>
									
									<label style="padding-right: 180px;font-size: 15px">Submission Date</label>
									<input type="date" name="submit_date" value="<?php echo $smnr->submission_date?>" style="width: 300px"><br><br>
									
									<label >Seminar Topic</label>
									<input type="Text" name="seminar_topic" value="<?php echo $smnr->seminar_topic?>"><br>
									
									<br>
									<div class="tp">
										<input type="submit" value="Update">
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
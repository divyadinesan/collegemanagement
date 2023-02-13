<?php
$this->load->view('Faculty/Layout/faculty_header');

?>
<div class="modal-dialog">
			<div class="modal-content">
				<div >
				

	<?php
foreach ($assignment as $asgmnt) 
?>
	<form action="<?php echo base_url('index.php/Facultycontroller/assignment_update/'.$asgmnt->assignment_upload)?>" method="post"enctype="multipart/form-data">


					<div class="signin-form profile">
						<div class="login-m_page_img">
							<object data="<?php echo base_url('Asset/Faculty/assignment_question/'.$asgmnt->assignment_upload)?>"  width="100%" height="600px" type="application/pdf"></object>
						</div>
						<div class="login-m_page"><br><br>
							<h3 class="sign">Update Assignment</h3><br>
							<div class="login-form-wthree-agile">

								<input type="hidden" name="semester" value="">
								<label style="padding-right: 180px;font-size: 15px">Subject Name</label>
									<input type="text" name="subject_name" value="<?php echo $asgmnt->subject_name?>" readonly><br>
									
									<label style="padding-right: 180px;font-size: 15px">Submission Date</label>
									<input type="date" name="submit_date" value="<?php echo $asgmnt->submition_date?>" style="width: 300px"><br><br>
									
									<label >Updated Assignment Question(pdf)</label>
									<input type="file" name="pdf_question" value=""><br>
									
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
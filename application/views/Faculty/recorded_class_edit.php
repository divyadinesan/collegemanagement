<?php
$this->load->view('Faculty/Layout/faculty_header');

?>
<div class="modal-dialog">
			<div class="modal-content">
				<div >
				

	<?php
		foreach ($online as $rcd_cls) 
		?>
	<form action="<?php echo base_url('index.php/Facultycontroller/recorded_class_update/'.$rcd_cls->recorded_class_upload)?>" method="post"enctype="multipart/form-data">

	

					<div class="signin-form profile">
						<div class="login-m_page_img">
							<object data="<?php echo base_url('Asset/Faculty/recorded_class/'.$rcd_cls->recorded_class_upload)?>"  width="100%" height="700px" type="application/pdf"></object>
						</div>
						<div class="login-m_page"><br><br>
							<h3 class="sign">Update Recorded Class</h3><br>
							<div class="login-form-wthree-agile">

								<input type="hidden" name="semester" value="<?php echo $rcd_cls->semester?>">
								<label style="padding-right: 180px;font-size: 15px">Subject Name</label>
									<input type="text" name="subject_name" value="<?php echo $rcd_cls->subject_name?>" readonly><br>
									<label style="padding-right: 200px;font-size: 15px">Module</label>
									<input type="text" name="module" value="<?php echo $rcd_cls->module?>"><br>
									<label style="padding-right: 200px;font-size: 15px">Topics</label>
									<input type="text" name="topics" value="<?php echo $rcd_cls->topics?>"><br>
									
									<label style="padding-right: 150px;font-size: 15px">Upload New Video</label>
									<input type="file" name="video" value=""><br>
									<!-- <input type="file" name="faculty_img"> -->
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
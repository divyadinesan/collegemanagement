<?php
$this->load->view('Student/Layout/header');
?>


<div  >
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				

<br><br>
<?php
foreach ($profile as $prfle) 

?>
					<div class="signin-form profile">
<form action="<?php echo base_url('index.php/Studentcontroller/profile_update/'.$prfle->student_id)?>" method="post" enctype="multipart/form-data">
						<div class="login-m_page_img">

							<img src="<?php echo base_url('Asset/Student/student_img/'.$prfle->s_image)?>" alt=" " class="img-responsive" / style="height: 350px;width: 250px">

						</div>
						<div class="login-m_page">
							<h3 class="sign">My Profile</h3>
							<div class="login-form-wthree-agile">
								
									<input type="text" name="name" placeholder="Name"  value="<?php echo $prfle->s_name?>">
									<input type="email" name="email" placeholder="E-mail"  value="<?php echo $prfle->s_email?>" readonly>
									<input type="text" name="dob" placeholder="Date Of Birth"  value="<?php echo $prfle->s_dob?>">
									<input type="text" name="phone" placeholder="Phone"  value="<?php echo $prfle->s_phone?>">
									<input type="text" name="address" placeholder="Address"  value="<?php echo $prfle->s_address?>">
									
									<div class="tp">
										<input type="submit" value="Submit">
									</div>
								</form>
							</div>
							<br><br><br>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>








<?php
$this->load->view('Student/Layout/footer');
?>
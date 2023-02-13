<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Change Password</h3>
			
				<?php
				foreach ($admin as $admn) 
				
				?>

			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/update_pass')?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="reason" placeholder="" required="" / value="<?php echo $admn->email?>" readonly>
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="fdate" placeholder="" required="" / value="<?php echo $admn->password?>" readonly>
							
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<br><br>
						<label>Enter New Password</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="password" id="input-22" name="new_password" placeholder="" required="" / >
							
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<br><br>
						<label>Confirm Password</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="password" id="input-22" name="conf_password" placeholder="" required="" / >
							
							<label class="input__label input__label--akira" for="input-22">
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
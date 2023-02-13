<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Update Department</h3>
			<?php
			foreach ($department as $dprtmnt) 
			?>
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/department_update')?>" method="post" enctype="multipart/form-data">

					<input class="input__field input__field--akira" type="hidden" id="input-22" name="department_id" placeholder="" value="<?php echo $dprtmnt->department_id?>" / >
					<div class="col-md-12 w3_agileits_contact_left">

						<label>Department name</label>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="Name" placeholder=""  / value="<?php echo $dprtmnt->dep_name?>">
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<img src="<?php echo base_url('Asset/Admin/department/'.$dprtmnt->dep_image)?>" style="height: 100px;width: 100px">
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="file" id="input-24" name="image"   />
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


<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Update Upcoming Holidays</h3>
			<?php
			foreach ($holiday as $hldy) 
			?>
			
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/holiday_update')?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
						<input type="hidden" name="holiday_id" value="<?php echo $hldy->holiday_id?>">
						<span class="input input--akira">
							<label>Reason</label>
							<input class="input__field input__field--akira" type="text" id="input-22" name="reason" placeholder="" value="<?php echo $hldy->reason?>" >
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="fdate" placeholder=""  / value="<?php echo $hldy->from_date?>">
							<label>From Date</label><br>
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="todate" placeholder=""  / value="<?php echo $hldy->to_date?>">
							<label>To Date</label><br>
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


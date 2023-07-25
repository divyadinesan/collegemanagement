<?php
$this->load->view('Admin/Layout/admin_header');
?>
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts" align="center">Update TimeTable</h3>
			<?php
			foreach ($time_table as $fetch)
			?>
			<div class="agile_banner_bottom_grids w3agileits-ref">
				<form action="<?php echo base_url('index.php/Admincontroller/timetable_update/'.$fetch->time_table_id)?>" method="post" enctype="multipart/form-data">
					<div class="col-md-12 w3_agileits_contact_left">
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="reason" placeholder="" required="" /  value="<?php echo $fetch->subject_name?>">
							<label>Subject</label><br>
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="fdate" placeholder="" required="" / value="<?php echo $fetch->Exam_time?>">
							<label>Exam Time</label><br>
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							 <select name="exam_time" class="input__field input__field--akira">

          <option value="9.00am - 12.30pm">9.00am - 12.30pm</option>
          <option value="2.00pm - 4.30pm">2.00pm - 4.30pm</option>
         </select>
							<!-- <input class="input__field input__field--akira" type="text" id="input-22" name="fdate" placeholder="" required="" / value="<?php echo $fetch->Exam_time?>"> -->
							<label>Update Exam Time</label><br>
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="text" id="input-22" name="todate" placeholder="" required="" / value="<?php echo $fetch->Exam_date?>" >
							<label>Exam Date</label><br>
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
						<span class="input input--akira">
							<input class="input__field input__field--akira" type="date" id="input-22" name="date" placeholder="" required="" / value="" id="date">
							<label>Update Exam Date</label><br>
							<label class="input__label input__label--akira" for="input-22">
								<span class="input__label-content input__label-content--akira"></span>
							</label>
						</span>
					
						 <script type="text/javascript">
			 	
			 	var today = new Date().toISOString().split('T')[0];
document.getElementsByName("date")[0].setAttribute('min', today);
			 </script>

						
						
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
<?php
$this->load->view('Faculty/Layout/faculty_header');
?>
<br><br>

<h2 align="center"><b >Seminar </b></h2><br><br>

<div class="row text-center">
		<div class="col-md-12 col-lg-12">
			<?php
				foreach ($facultysubject as $fs) 
				{
				?>
			<form action="<?php echo base_url('index.php/Facultycontroller/seminar_insert')?>" method="post" enctype="multipart/form-data" class="form-inline" id="subjectForm" data-toggle="validator">
				<div class="form-group">
					<label for="select" class="control-label">Department:</label>
						<input type="text" class="form-control" name="subject"  value="<?php echo $fs->dep_name?>">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
				</div>
				<div class="form-group">
					<label for="select" class="control-label">Semester:</label>
						<input type="text" class="form-control" name="subject"  value="<?php echo $fs->semester?>">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
				</div>
				<div class="form-group">
					<label for="select" class="control-label">Subject:</label>
						<input type="text" class="form-control" name="subject"  value="<?php echo $fs->subject_name?>">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
				</div>

				<div class="form-group" data-provide="datepicker">
					<label for="select" class="control-label">Submission Date:</label>
					<!-- <input type="date" class="form-control" name="date" value="" required> -->
					<input type="date"  id="date" required="Required" class="form-control" name="date" placeholder="Select suitable date" / ><br>
			  <script type="text/javascript">
			 	
			 	var today = new Date().toISOString().split('T')[0];
document.getElementsByName("date")[0].setAttribute('min', today);
			 </script>
				</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			
		
				<br><br><br><br>
			
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th></th>
						<th class="text-center">Roll</th>
						<th class="text-center">Student's Name</th>
						<th class="text-center">Seminar Topic</th>
						
											

					</tr>
				</thead>

				<tbody>
					<?php
					
					foreach ($facultystudent as $fstdnt) {
						if($fstdnt->s_semester==$fs->semester && $fstdnt->department_id==$fs->department_id)
						{
						
					
					?>
					<tr>
						<td>
						<input type="hidden" name="student_id[]" value="<?php echo $fstdnt->student_id?>">
						<input type="hidden" name="student_email[]" value="<?php echo $fstdnt->s_email?>">
						<input type="hidden" name="faculty_email" value="<?php echo  $fs->faculty_email?>">
			<input type="hidden" name="subject_id" value="<?php echo $fs->subject_id?>">
			<input type="hidden" name="department_id" value="<?php echo $fs->department_id?>">

<input type="hidden" name="semester" value="<?php echo $fstdnt->s_semester?>">
			<input type="hidden" name="faculty_id" value="<?php echo $fs->faculty_id?>">

			
			<input type="hidden" name="subject_name" value="<?php echo $fs->subject_name?>"></td>

						<td><?php echo $fstdnt->register_no?></td>
						<td><?php echo $fstdnt->s_name?></td>
						<td><input type="text" name="seminar_topic[]" style="height: 80px;width: 600px"></td>

		
					</tr>
					<?php
				}
				}
				?>
				</tbody>
			</table> 
			<button type="submit" class="btn btn-success btn-block" style='border-radius:0%;' name="sbt_top"><i class="glyphicon glyphicon-ok-sign"></i> Submit</button>
			
			</form><br><br>




<?php
}
?>


			
			
			
		</div>
	</div>







<?php
$this->load->view('Faculty/Layout/faculty_footer');
?>
<br><br>
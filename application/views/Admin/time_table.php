<?php
$this->load->view('Admin/Layout/admin_header');
?>


<br><br><br><br>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

<h2 align="center"> Internal Exam - Time Table</h2>
<br><br><br>
<form method="post" action="<?php echo base_url('index.php/Admincontroller/timetable_insrt')?>">
	<!-- <div class="form-group" align="center">
					 <label for="select" class="control-label">Exam:</label>
						<select name="exam_id">
							<?php
							foreach ($exam_name as $exam) {
							
							?>
							<option value="<?php echo $exam->exam_id?>"><?php echo $exam->exam_name?></option>
							<?php
							}
							?>
						</select>	 -->			
				<!-- </div>- -->
<?php
   // $j=1;
    foreach ($department as $dprtmnt)
     //{
     
    
    
    ?>
<div class="form-group">
					
<h1 align="center"><?php echo $dprtmnt->dep_name?></h1>
 						<input type="text" class="form-control"  value="">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
				</div>
<div style="overflow-x:auto;">

  <table>
    <tr>
      <th>Sl.No</th>
      <th>Department Name</th>
      <th>Subject Name</th>
      <th>Semester</th>
      <th>Date</th>
     <th>Time</th>
    </tr>
   	<?php
$i=1;
   $j=1;
  	foreach ($subject as $sbjct) {
      // if($sbjct->department_id==$dprtmnt->department_id)
      // {
  		 // foreach ($semester as $sem)
     
     //  if($sem->semester==$dprtmnt->semester)
     // {
  	
  	?>

    <tr>

      <td><?php echo $i?></td>
      <td><?php echo $sbjct->dep_name?></td>
      <td><?php echo $sbjct->subject_name?></td>
       <td><?php echo $sbjct->semester?></td>
      <td>
        


     
   
      <input type="date"  id="date[]" required="Required" class="form-control date<?php echo $j?>" name="date[]" placeholder="Select suitable date" / ><br>
        
</td>
      <td>
        <select name="time[]">
          <option value="9.00am - 12.30pm">9.00am - 12.30pm</option>
          <option value="2.00pm - 4.30pm">2.00pm - 4.30pm</option>
         </select></td>
      <input type="hidden" name="sub_id[]" value="<?php echo $sbjct->subject_id?>">
        <input type="hidden" name="deprt_id[]" value="<?php echo $sbjct->department_id?>">
        <input type="hidden" name="semester[]" value="<?php echo $sbjct->semester?>">
     
     <script type="text/javascript">
      var counter = '<?php echo $j?>';
      var today = new Date().toISOString().split('T')[0];
      document.getElementsByClassName("date"+counter)[0].setAttribute('min', today);
    </script>
    </tr>
    <?php
    $i++;
    $j++;
    //}
//}
	}
	?>
   
   
  </table>
  <br><br>
</div>



</body>
<div align="center">
<input type="submit" name="" >
</div>
</html>
</form>
<br><br><br><br>

<?php
$this->load->view('Admin/Layout/admin_footer');
?>


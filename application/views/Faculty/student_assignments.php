<?php
$this->load->view('Faculty/Layout/faculty_header');
?>
<br><br>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2 align="center">Students Assignment</h2><br><br>

<table>
  <thead>
     <tr>
    	<th>sl.no</th>
    	<th>Student Name</th>
    	<th>Register Number</th>
    	<th>Subject</th>
    	<th>Semester</th>
     	
      	<th>Upload Assignment</th>
        <th>Mark Status</th>
        <th>Upload Mark </th>
  	</tr>
  </thead>
 <tbody>
 <?php
 $i=1;
foreach ($assignment as $asgmnt) {
if($asgmnt->assignment_mark=='Pending')
{
 ?>
   <tr>
     <td><?php echo $i?></td>
     <td><?php echo $asgmnt->s_name?></td>
     <td><?php echo $asgmnt->register_no?></td>
     <td><?php echo $asgmnt->subject_name?></td>
     <td><?php echo $asgmnt->semester?></td>

     
     <td><br><object data="<?php echo base_url('Asset/student/assignment_answer/'.$asgmnt->assignment_upload)?>"  width="100%" height="300px" type="application/pdf"></object></td>
    <td><?php echo $asgmnt->assignment_mark?></td>
    <td><form method="post" action="<?php echo base_url('index.php/Facultycontroller/assignment_mark/'.$asgmnt->student_assignment_upload_id )?>">
      <input type="text" name="mark" placeholder="Enter Mark/10"><br><br>
      <input type="submit" name="">
    </form></td>
   </tr>
   <?php
   $i++;
}
}
?>
  
 </tbody>
  
</table>
<br><br><br><br>
</body>
</html>





<?php
$this->load->view('Faculty/Layout/faculty_footer');
?>

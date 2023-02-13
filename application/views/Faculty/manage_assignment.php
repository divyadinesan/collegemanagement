<?php
$this->load->view('Faculty/Layout/faculty_header');
?>
<br><br><br>
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

<h2 align="center">Manage Assignment</h2><br><br>

<table>
  <thead>
     <tr>
      <th>Sl.No</th>
      <th>Semester</th>
     
    	<th>Subject Name</th>
    	
    	
     	
      	<th>Assignment</th>
          <th>Edit</th>
            <th>Delete</th>
  	</tr>
  </thead>
 <tbody>
 <?php
 $i=1;
foreach ($assignmnet as $asgmnt) {
  

 ?>
   <tr>
    <td><?php echo $i?></td>
    <td><?php echo $asgmnt->semester?></td>
    
     <td><?php echo $asgmnt->subject_name?></td>
     
     
     
     <td><br><object data="<?php echo base_url('Asset/Faculty/assignment_question/'.$asgmnt->assignment_upload)?>"  width="100%" height="300px" type="application/pdf"></object></object></td>
     <td><a href="<?php echo base_url('index.php/Facultycontroller/assignment_edit/'.$asgmnt->assignment_upload)?>"><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 40px;width: 40px"></a></td>
      <td><a href="<?php echo base_url('index.php/Facultycontroller/assignment_delete/'.$asgmnt->assignment_upload)?>"><img src="<?php echo base_url('Asset/Admin/images/delete.png')?>"  style="height: 40px;width: 40px"></a></td>
        
   </tr>
  
  <?php
  $i++;
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
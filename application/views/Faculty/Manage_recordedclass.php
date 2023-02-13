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

<h2 align="center">Recorded Classes</h2><br><br>

<table>
  <thead>
     <tr>
      <th>Sl.No</th>
      <th>Semester</th>
     
    	<th>Subject Name</th>
    	
    	<th>Module</th>
    	<th>Topics</th>
     	
      	<th>Recorded Classes</th>
          <th>Edit</th>
            <th>Delete</th>
  	</tr>
  </thead>
 <tbody>
 <?php
 $i=1;
foreach ($online as $rcd_cls) {
  

 ?>
   <tr>
    <td><?php echo $i?></td>
    <td><?php echo $rcd_cls->semester?></td>
    
     <td><?php echo $rcd_cls->subject_name?></td>
      <td><?php echo $rcd_cls->module?></td>
      <td><?php echo $rcd_cls->topics?></td>
     
     
     <td><br><object data="<?php echo base_url('Asset/Faculty/recorded_class/'.$rcd_cls->recorded_class_upload)?>"  width="100%" height="300px" type="application/pdf"></object></td>
     <td><a href="<?php echo base_url('index.php/Facultycontroller/recorded_class_edit/'.$rcd_cls->recorded_class_upload)?>"><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 40px;width: 40px"></a></td>
      <td><a href="<?php echo base_url('index.php/Facultycontroller/recorded_class_delete/'.$rcd_cls->recorded_class_upload)?>"><img src="<?php echo base_url('Asset/Admin/images/delete.png')?>"  style="height: 40px;width: 40px"></a></td>
        
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
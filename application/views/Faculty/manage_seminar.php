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

<h2 align="center">Manage Seminar</h2><br><br>

<table>
  <thead>
     <tr>
      <th>Sl.No</th>
      <th>Student Name</th>
      <th>Semester</th>
     
      <th>Subject Name</th>
      <th>Submission Date</th>
      
      
        <th>Seminar Topic</th>
          <th>Update Seminar</th>
            
    </tr>
  </thead>
 <tbody>
 <?php
 $i=1;
foreach ($seminar as $smnr) {
  

 ?>
   <tr>
    <td><?php echo $i?></td>
     <td><?php echo $smnr->s_name?></td>
    <td><?php echo $smnr->semester?></td>
    
     <td><?php echo $smnr->subject_name?></td>
      <td><?php echo $smnr->submission_date?></td>
      <td><?php echo $smnr->seminar_topic?></td>
     
     
     
    
     <td><a href="<?php echo base_url('index.php/Facultycontroller/seminar_edit/'.$smnr->seminar_id )?>"><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 40px;width: 40px"></a></td>
      
        
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
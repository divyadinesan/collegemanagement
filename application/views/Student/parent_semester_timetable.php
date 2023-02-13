<?php
$this->load->view('Student/Layout/parent_header');
?>

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
<br><br><br>
<h2 align="center">Timetable - Semester Exam</h2><br><br>

<table>
  <thead>
     <tr>
    <th>sl.no</th>
    <th>Department</th>
    <th>Semester</th>
      <th>Timetable</th>
     
  </tr>
  </thead>
 <tbody>
  <?php
  $i=1;
  foreach ($semester as $smstr) {
  
  ?>
   <tr>
     <td><?php echo $i?></td>
       <td><?php echo $smstr->dep_name?></td>
     <td><?php echo $smstr->semester?></td>
   
     
     <td><br><object data="<?php echo base_url('Asset/Admin/semester_timetable/'.$smstr->time_table_image)?>"  width="100%" height="300px" type="application/pdf"></object></td>
    
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
$this->load->view('Student/Layout/footer');
?>

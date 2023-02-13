<?php
$this->load->view('Student/Layout/header');
?><br><br><br>
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

<h2 align="center">My Leave History</h2><br><br>

<table>
  <thead>
     <tr>
      <th>Sl.No</th>
    <th>Faculty Name</th>
    <th>Subject Name</th>
    <th>Semester</th>
     <th>Leave Date</th>
     <th>Attendance Status</th>
      

  </tr>
  </thead>
 <tbody>
  <?php
  $i=1;
  foreach($stdnt_leave as $std_leave)
  {
  ?>
  
   <tr>
    <td><?php echo $i?></td>
   
    <td><?php echo $std_leave->faculty_name?></td>
     <td><?php echo $std_leave->subject_name?></td>
     <td><?php echo $std_leave->semester?></td>
     <td><?php echo $std_leave->a_date?></td>
     <td><?php echo $std_leave->attendance_status?></td>
     
     
   
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